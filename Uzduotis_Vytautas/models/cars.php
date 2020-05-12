<?php

define('DB_HOST', 'localhost'); 
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root'); 
define('DB_NAME', 'uzduotis');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);

if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}
function getPrisijungimas() {
    global $prisijungimas; 
    return $prisijungimas;
}

function getCar( $nr ) {
    $manoSQL = "SELECT * FROM cars  WHERE id = '$nr'";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio automobilio nera";
        return NULL;
    }

}

function getCars() {
    $manoSQL = "SELECT * FROM cars";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}

