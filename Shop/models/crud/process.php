<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'sapnu_gaudykles') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$dydis = '';
$spalva = '';
$kaina = '';
$aprasymas = '';

if (isset($_POST['issaugoti'])) {
    $dydis = $_POST['dydis'];
    $spalva = $_POST['spalva'];
    $kaina = $_POST['kaina'];
    $aprasymas = $_POST['aprasymas'];

    $mysqli->query("INSERT INTO gaudykles(dydis, spalva, kaina, aprasymas) VALUES('$dydis', '$spalva', '$kaina', '$aprasymas')") or
    die($mysqli->error);

    $_SESSION['message'] = "Preke issaugota";
    $_SESSION['msg_type'] = "success";
    header("location: gaudykles.php");
}

if (isset($_GET['Istrinti'])) {
    $id = $_GET['Istrinti'];
    $mysqli->query("DELETE FROM gaudykles WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Preke istrinta";
    $_SESSION['msg_type'] = "danger";
    header("location: gaudykles.php");
}

if (isset($_GET['Keisti'])) {
    $id = $_GET['Keisti'];
    $update =true;
    $result = $mysqli->query("SELECT * FROM gaudykles WHERE id=$id") or die($mysqli->error());
    if ($result->num_rows) {
        $row = $result->fetch_array();
        $dydis = $row['dydis'];
        $spalva = $row['spalva'];
        $kaina = $row['kaina'];
        $aprasymas = $row['aprasymas'];
    }
}

if (isset($_POST['pakeisti'])) {
    $id = $_POST['id'];
    $dydis = $_POST['dydis'];
    $spalva = $_POST['spalva'];
    $kaina = $_POST['kaina'];
    $aprasymas = $_POST['aprasymas'];

    $mysqli->query("UPDATE gaudykles SET dydis = '$dydis', spalva = '$spalva', kaina = '$kaina', aprasymas = '$aprasymas' WHERE id = $id") or
    die($mysqli->error);
    $_SESSION['message'] = "Preke pakoreguota";
    $_SESSION['msg-type'] = "warning";

    header('location: gaudykles.php');
}

 ?>
