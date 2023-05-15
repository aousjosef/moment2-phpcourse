

<?php
$pageTitle = "Formulär";
include("includes/header.php"); ?>


<!-- NOTE: Include here -->

<h1>Välkommen!</h1>
<form class="" action="form.php" method="post">

Förnamn: <input type="text" name="firstname" >
<br><br>
Efternamn: <input type="text" name="lastname" >

<br><br>
<input type="submit" name="submitBtn" value="Skicka">
<br><br>
</form>


<?php

if (isset($_POST["submitBtn"])) {
    //Använt empty funktionen för att kolla om innehållet är NULL eller saknar värde
    if (!empty($_POST ["firstname"]) && ($_POST ["lastname"])) {
        $fName = $_POST ["firstname"];
        $lName = $_POST ["lastname"];
        echo "Hej " . $fName . " " . $lName . "!";
    } else {
        echo "Båda fälten måste fyllas i!";
    }
}
 ?>



<h1>Area räknare</h1>
<form class="" action="calculate.php" method="post">


  Höjd: <input type="number" name="height" value="">
  <br><br>
  Bredd: <input type="number" name="width" value="">
  <br><br>

<input type="submit" name="calc" value="Kalkulera">

</form>

<?php


 ?>

<?php include("includes/footer.php"); ?>
