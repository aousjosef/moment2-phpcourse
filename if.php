

<?php
$pageTitle = "Vilkor";
include "includes/header.php";
?>


<?php
$date = date("Y-m-d");
$time = date("H:i:s");
$day = date("l");

//Date as Int
$timeInt = (int) date("H");

echo "Dagens datum är: " . $date . ", klockan är " . $time;

echo "<br /> <br />";

if ($day == "Sunday") {
    echo "Idag är det söndag! :D";
} else {
    echo "Idag är inte söndag.. :(";
}

echo "<br /> <br />";

//För att kunna jämföra tid så måste det vara Int

if ($timeInt >= 6 && $timeInt <= 9) {
    echo "Det är morgon";
} elseif ($timeInt >= 9 && $timeInt <= 12) {
    echo "Det är förmiddag";
} elseif ($timeInt >= 12 && $timeInt <= 18) {
    echo "Det är eftermiddag ";
} else {
    echo "Det är kväll";
}

echo "<br /> <br />";

switch ($day) {
    case "Monday":
        echo "Idag är det måndag.";
        break;

    case "Tuesday":
        echo "Idag är det tisdag.";
        break;

    case "Wednesday":
        echo "Idag är det onsdag.";
        break;

    case "Thursday":
        echo "Idag är det torsdag.";
        break;

    case "Friday":
        echo "Idag är det fredag.";
        break;

    case "Saturday":
        echo "Idag är det lördag.";
        break;

    case "Sunday":
        echo "Idag är det söndag.";
        break;

    default:
        "Day does not exist, check code";
        break;
}
?>


<!-- NOTE: Include here -->



<?php include "includes/footer.php"; ?>
