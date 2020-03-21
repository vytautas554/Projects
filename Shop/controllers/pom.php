<?php
include ("prisijungimas.php");

function deleteSG($nr){
    $manoSQL = "DELETE FROM pom WHERE id = '$nr' LIMIT 1";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko istrinti sapnu gaudykles nr: $nr <br>";
    }
}
// deleteDoctor(3); //kad veiktu reikia perkraut svetaine, tada issitrina is serverio


/* i DB irasysim nauja gydytoja
$nr - id numeris Duomenu Bazeje
$vardas - gydytojo vardas
$pavarde - gydytojo pavarde
$zona - gyd. zona kurioje aptarnauja pacientus
*/

function createSG($dydis, $spalva, $kaina, $aprasymas){
    $manoSQL = "INSERT INTO pom VALUES(NULL, '$dydis', '$spalva', '$kaina', '$aprasymas')";
    $arIsikele = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko prideti sapnu gaudykles: $dydis, $spalva, $kaina, $aprasymas <br>";
    }
}
//test
// createDoctor('Jurgis', 'Jurgaitis', 'A3');
// createDoctor('Tadas', 'Tadauskas', 'B1');

function getFotos($id) {
    $manoSQL = "SELECT sg_nuotraukos.prekes_id, sg_nuotraukos.id, sg_nuotraukos.pavadinimas FROM sg_nuotraukos INNER JOIN gaudykles ON sg_nuotraukos.prekes_id = gaudykles.id WHERE sg_nuotraukos.id = $id";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti: $id <br>";
    }
    return $rezultatas;
}

function editSG($dydis, $spalva, $kaina, $aprasymas){
    $manoSQL = "UPDATE pom SET
                                dydis = '$dydis',
                                spalva = '$spalva',
                                kaina = '$kaina',
                                aprasymas = '$aprasymas'
                                WHERE id = ''
                                LIMIT 1
        ";
    $arPasikeite = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPasikeite) {
        echo "ERROR nepavyko prideti sapnu gaudykles: $nr, $dydis, $spalva, $kaina, $aprasymas <br>";
    }
}
// test
// editDoctor(6, 'Petras', 'Petraitis', 'B3');


/*
    paima gydytoja is // DB
    $nr - gydytojo id is DB
    return - (type: ARRAY)
    */
function getSG($nr){
    $manoSQL = "SELECT * FROM pom WHERE id = '$nr'";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r($rezultataiOBJ);
        //is objekto paimam viena eilute ir paverciam i asociatyvu array
        $rezultARRAY = mysqli_fetch_assoc($rezultataiOBJ);
        // print_r($rezultARRAY);//test
        return $rezultARRAY;
    }else {
        echo "Atleiskite, tokios sapnu gaudykles nera";
        return NULL;
    }

}
//test
// $gyd1 = getDoctor(1);
// print_r($gyd1);
//SGS- sapnu gaudykles!!!!!!!!!
function getSGS(){
    $manoSQL = "SELECT * FROM pom";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visosSG = getSGS();
// // is Mysqli objekto paima viena eilute ir pavercia i array:
// $SG = mysqli_fetch_assoc($visosSG);
// // $gydytojas2 = mysqli_fetch_assoc($visiGydytojaiOBJ);
// // $gydytojas13 = mysqli_fetch_assoc($visiGydytojaiOBJ);
// //test
// // print_r($gydytojas1);
// // echo "<hr>";
// // print_r($gydytojas2);
// //-------------
// while($SG){
//     echo "<h2>". $SG['dydis']. " ". $SG['spalva']. "</h2>";
//     $SG = mysqli_fetch_assoc($visosSG);
// }


//
