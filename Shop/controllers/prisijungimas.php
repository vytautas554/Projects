<?php

//prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //konstanta - nekintantis elementas
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');
define('DB_NAME', 'sapnu_gaudykles');
$prisijungimas = mysqli_connect(DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
if ($prisijungimas) {
    // echo "pavyko prisijungimas prie DB <br>";
}else {
    echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error($prisijungimas);
}

function getPrisijungimas(){
    //isvardinti globalius kinamuosius, kuriuos nori naudoti f-jos viduje
    global $prisijungimas;  //!! sioje eiluteje globaliu kint. negalima keisti, bet galima zemiau
    return $prisijungimas;
}



 ?>
