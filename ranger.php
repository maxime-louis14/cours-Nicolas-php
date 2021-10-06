<?php

var_dump($argv);

sort($argv);

array_shift($argv);

var_dump($argv);

$json = json_encode($argv);
$create = file_put_contents("contenu.json", $json);
?>