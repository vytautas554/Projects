<?php

include('models/cars.php');

$visosCars = getCars();
$car = mysqli_fetch_assoc($visosCars);

while ($car == true) {
    echo "<a href='template-cars.php?aa=$car[id]'> $car[number]
    $car[year_made] $car[model] </a><br>";
    $car = mysqli_fetch_assoc($visosCars);
}
?>
