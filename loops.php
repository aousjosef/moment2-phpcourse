

<?php
$pageTitle = "Upprepningar";
include("includes/header.php"); ?>



<!-- NOTE: Include here -->

<?php
for ($i=10; $i > 0 ; $i--) {
  echo  '<strong>' . $i . '</strong>';
  echo "<br/></br/>";
}

$courses = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Digital bildbehandling för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];


foreach ($courses as $course) {
  echo '<li><strong>' . $course  . '</strong></li>';
  echo "<br/></br/>";

}
 ?>


<h2>Sorted by name</h2>


<?php

sort($courses);

// NOTE: AFTER SORTING
foreach ($courses as $course) {
  echo '<li><strong>' . $course  . '</strong></li>';
  echo "<br/></br/>";

}

 ?>

<?php include("includes/footer.php"); ?>

<ul>
  <li></li>
</ul>
