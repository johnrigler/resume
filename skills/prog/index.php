<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Resume for John Rigler</title>
    <meta http-equiv="refresh" content="5">
		<link rel="stylesheet" href="style.css">
  </head>

  <body bgcolor="#ffffff">

<?php 



// map this directory

$dir = opendir(".");


while(false != ($file = readdir($dir)))
{
if($file == "images")continue;
if($file == ".index.php.swp")continue;
if($file == "index.php")continue;
if($file == "style.css")continue;
if($file == ".")continue;
if($file == "..")continue;
if($file == ".git")continue;

echo "<h2>$file</h2>";

include "$file";
}
?>


<br>
<br>
<hr>

<?php
	$date=`date`;
echo "$date | <a href=http://secretbeachsolutions.com/resume/john>
                      http://secretbeachsolutions.com/resume/john</a>"


 ?>
</html>
