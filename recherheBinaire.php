<?php



$json = file_get_contents("annuaire.json");
$parsed_json = json_decode($json);
// var_dump($parsed_json[0]);



$val="";

function binarySearch($argv, $parsed_json)
{
    $min = 0;
    $max = count($parsed_json);
    $milieu = ($min+$max)/2;
    $milieu2 = intval($milieu);
    $tableau = $parsed_json;
    $step = 0;
    $bidule = 0 ;
  

    while($bidule == 0 && $min<$max ){    

       if($argv == $parsed_json[$milieu2]->{'name'}){
        $bidule == 1;
        break;
       }else if ($argv < $parsed_json[$milieu2]->{'name'}){
        $max = $milieu2 - 1;
        $step = $step + 1;
       }else if($argv > $parsed_json[$milieu2]->{'name'}){
        $min = $milieu2 +1 ;
        $step = $step +1;
       }
        $milieu2 = intval(($min + $max)/2);

    }


    if($argv == $parsed_json[$milieu2]->{'name'}){
        echo ($parsed_json[$milieu2]->{'num'}) ;
        echo PHP_EOL;
        echo $milieu2;
        echo PHP_EOL;
        echo $step;
        echo PHP_EOL;
        echo 'gagné';
    }else{
        echo 'perdu';
    }
   





    //var_dump($max);
  // var_dump($parsed_json[1] -> {'name'});
}

// $a = "a";
// $b = "b";
// if($a>$b){
//     echo 'true';
// }else{
//     echo 'false';
// }

binarySearch($argv[1], $parsed_json);