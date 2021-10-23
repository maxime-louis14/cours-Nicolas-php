<?php

function couperMot($mot)
{
    return str_split($mot);
}


$tbl =  couperMot($argv[1]);
$motEclate = array();


foreach (array_count_values($tbl) as $key => $mot) {
    $motEclate[$key] = $mot;
}
sort($motEclate);


foreach ($motEclate as $key => $mot) {
    echo $key . ' -->  ' . $mot . PHP_EOL;
}

?>