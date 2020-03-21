<?php

session_start();

$prisijungimas = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($prisijungimas, 'sapnu_gaudykles');

$vartotojas = $_POST['vartotojas'];
$slaptazodis = $_POST['slaptazodis'];

$select = "SELECT * FROM registracija WHERE vartotojas = '$vartotojas'";
$rezultatai = mysqli_query($prisijungimas, $select);
$number = mysqli_num_rows($rezultatai);

if ($number == 1) {
    echo "Toks vartotojo vardas jau egzistuoja";
}else {
    $registration = "INSERT INTO registracija(vartotojas, slaptazodis) VALUES ('$vartotojas', '$slaptazodis')";
    mysqli_query($prisijungimas, $registration);
    echo "Registracija pavyko";
}


 ?>
