<?php
$array_sample = array();
$array_sample["DB05"]["webshare"] = "HELLO";
$array_sample["DB10"]["webshare"] = "ODFJEALEGJG";

echo "get the value" . $array_sample['DB10']["webshare"];


$DBlevel10_35 = array('A' => '10', 'B' => '11', 'C' => '12', 'D' => '13', 'E' => '14', 'F' => '15', 'G' => '16', 'H' => '17',
'I' => '18', 'J' => '19', 'K' => '20', 'L' => '21', 'M' => '22', 'N' => '23', 'O' => '24', 'P' => '25', 'Q' => '26',
 'R' => '27', 'S' => '28', 'T' => '29', 'U' => '30', 'V' => '31', 'W' => '32', 'X' => '33', 'Y' => '34', 'Z' => '35');
 
// echo $DBlevel10_35['A'];
// //print_r(array_keys($DBlevel10_35));
// //$arrayKeys = array_keys($DBlevel10_35);

// // if(array_key_exists('A', $DBlevel10_35)){
// //     echo "YESSS" . $DBlevel10_35['A'];
// // }
// //if(str_contains(array_keys($array_sample), "A")){

$arrayKeys = array_keys($array_sample);
print_r($arrayKeys);
$matching_key = preg_grep("/10/", $arrayKeys);
// $get_level = var_dump($matching_key);
// echo "whattt". $get_level;
// $get_output = $array_sample[$get_level]["webshare"];
print_r($matching_key);
foreach($matching_key as $element){
    echo $element;
    $getPath = $array_sample[$element]["webshare"];
    echo "pthhhhhhhh" . $getPath;
}

?>
