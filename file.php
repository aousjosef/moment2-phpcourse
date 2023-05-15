

<?php
$pageTitle = "Läsa in fil";
include("includes/header.php"); ?>

<?php

$filename = 'includes/courses.txt';

if (file_exists($filename)) {
  $fp = fopen("includes/courses.txt", "r");

  while (!feof($fp)){

  $textLine = fgets($fp);

  echo '<strong><li>'. $textLine
   . '</li></strong>';
  }

}
else {
    echo "FEL: $filename kunde inte hittas";

}

 ?>



<!-- NOTE: Include here -->



<?php include("includes/footer.php"); ?>
