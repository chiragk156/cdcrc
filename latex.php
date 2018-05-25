<?php
$myfile = fopen("latex/new.tex", "w") or die("Unable to open file!");
$name = $_POST["name"];
$add = $_POST["add"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$txt = "\documentclass[a4paper,10pt]{article}
\usepackage{marvosym}
\usepackage{fontspec}
\usepackage{xunicode,xltxtra,url,parskip}
\RequirePackage{color,graphicx}
\usepackage[usenames,dvipsnames]{xcolor}
\usepackage{fullpage}
\usepackage{supertabular}
\usepackage{titlesec}
\usepackage{hyperref}
\definecolor{linkcolour}{rgb}{0,0.2,0.6}
\hypersetup{colorlinks,breaklinks,urlcolor=linkcolour, linkcolor=linkcolour}
\defaultfontfeatures{Mapping=tex-text}
\setmainfont[
SmallCapsFont = Fontin-SmallCaps.otf,
BoldFont = Fontin-Bold.otf,
ItalicFont = Fontin-Italic.otf
]
{Fontin.otf}
\\titleformat{\section}{\Large\scshape\\raggedright}{}{0em}{}[\\titlerule]
\\titlespacing{\section}{0pt}{3pt}{3pt}
\hyphenation{im-pre-se}
\usepackage[absolute]{textpos}
\setlength{\TPHorizModule}{30mm}
\setlength{\TPVertModule}{\TPHorizModule}
\\textblockorigin{2mm}{0.65\paperheight}
\setlength{\parindent}{0pt}
\begin{document}
\pagestyle{empty}
\\font\\fb=''[cmr10]''
\par{\centering
		{\Huge ".$name."
	}\bigskip\par}
\section{Personal Data}
\begin{tabular}{rl}
\\textsc{Address:}&".$add."\\\
\\textsc{Mobile:}&".$mob."\\\
\\textsc{Email:} & \href{mailto:".$email."}{".$email."}\\\
\\end{tabular}
\\end{document}";

fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
function terminal($command)
{
    //system
    if(function_exists('system'))
    {
        ob_start();
        system($command , $return_var);
        $output = ob_get_contents();
        ob_end_clean();
    }
    //passthru
    else if(function_exists('passthru'))
    {
        ob_start();
        passthru($command , $return_var);
        $output = ob_get_contents();
        ob_end_clean();
    }
     
    //exec
    else if(function_exists('exec'))
    {
        exec($command , $output , $return_var);
        $output = implode("n" , $output);
    }
     
    //shell_exec
    else if(function_exists('shell_exec'))
    {
        $output = shell_exec($command) ;
    }
     
    else
    {
        $output = 'Command execution not possible on this system';
        $return_var = 1;
    }
     
    return array('output' => $output , 'status' => $return_var);
}

$o = terminal('cd latex && xelatex new.tex');
if($o['status'] == 0)
{
   //
}
else
{
    //some problem
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>CV Generated</title>
</head>
<body>
<center>
    <iframe src="latex/new.pdf" style="width:800px; height:1000px;" frameborder="0"></iframe>
</center>
</body>
</html>