<html>
  <head>
    <title>Refreshing Resume</title>
    <META http-equiv="refresh" content="5">

<content="5;URL=index.php">
  </head>
  <body bgcolor="#ffffff">

<?php

function github($project) {

$URL="github.com/johnrigler/" . $project;

echo "<a href=https:" . $URL . ">" . $URL . "</a>";

}




?>

<?php include "body.php"; ?>

<br>
<br>
<br>
<hr>

<?php

$date=`date`;
echo "$date | <a href=http://rigler.org/resume>resume</a>"

 ?>


</html>
