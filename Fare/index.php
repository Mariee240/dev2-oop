<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="age" id="age" placeholder="Age" min="10" max="80" style="width: 60px;"><br>
        <input type="number" name="distance" id="distance" placeholder="Distance (km)" min="1" style="width: 160px;"><br>
        <button type="submit" name="btn_compute">Compute</button>
    </form>
</body>
</html>

<?php
include_once "Fare.php";

if (isset($_POST['btn_compute'])) {
    // $age = $_POST['age'];
    // $distance = $_POST['distance'];
    $transpo = new Fare;

    // $transpo->setAge($age);
    // $transpo->setDistance($distance);
    $transpo->setAge($_POST['age']);
    $transpo->setDistance($_POST['distance']);
    $transpo->setFare();

    echo "Age: ".$transpo->getAge()." years old<br>";
    echo "Distance: ".$transpo->getDistance()." km<br>";
    echo "Fare: ".$transpo->getFare();
}

?>