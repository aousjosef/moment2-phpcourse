
<?php
$pageTitle = "Formulär";
include("includes/header.php"); ?>


<?php

if (isset($_POST['height']) && ($_POST['width']) ) {
  $height= $_POST['height'];
  $width= $_POST['width'];
  $area= $height*$width;


echo ( '<h2>' .
  "Längden " . $height . " och bredden " . $width . " ger en area på " . $area . " kvadratmeter"
. '</h2>');
}

 ?>

 <a href="form.php"> Gå tillbaks till föregående sida.</a>
 <?php include("includes/footer.php"); ?>
