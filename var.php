

<?php
$pageTitle = "Variablar";
include("includes/header.php"); ?>

<?php
$name = "Aous Josef";
$email = "aojo2100@student.miun.se";
$age = 26;


echo '<h3>'.
 "Hej jag heter " . $name . ", är " . $age . " år gammal och nås på följande e-post: " .

'<a href="mailto:' . $email  .'">aojo2100@student.miun.se</a>'


 .'</h3>'

 ?>

<!-- NOTE: Include here -->





<?php include("includes/footer.php"); ?>
