<?php
//  $input_cc = readline("ENTER: ");
// if($input_cc[0] == '0'){
//     echo " it is 0 " .$input_cc;
//     //check the second digit
//     //if 2nd digit contains only number 
//     if (is_numeric((int)$input_cc)){
       
//         echo gettype((int)$input_cc);
//     }
//     if(0 <= (int)$input_cc && (int)$input_cc <=9999 ){
//         echo "NUMBER!";

        
//     }
//}



$array_sample = array();
$array_sample["DB05"]["webshare"] = "HELLO";
$array_sample["DB10"]["webshare"] = "\\\\prodsan-okc-m\\QAWSSH$\\OKC\\DB91\\";
$array_sample["DB10"]["clientstr"] = "0FK00";
$array_sample["DB11"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB91\\";
$array_sample["DB11"]["clientstr"] = "0AA00";

// // echo "get the value" . $array_sample['DB10']["webshare"];
echo $array_sample["DB11"]["webshare"];
// echo gettype($array_sample["DB11"]["clientstr"]);

// echo "get the value" . $array_sample['DB10']["webshare"];
// $level = $array_sample["DB11"]["clientstr"];
// echo gettype($array_sample["DB11"]["clientstr"]);



// $client_code = preg_split('//', $input_cc, -1, PREG_SPLIT_NO_EMPTY);
// if(array_map("is_numeric", $client_code)){

//     echo " TRUE NUMBER!";
// print_r( $array_sample);
// //$key = array_search('0FK00', array_column($array_sample, 'clientstr'));
// print_r(array_column($array_sample, "clientstr"));
///print_r(array_filter($array_sample, '0AA00'));
//print_r(array_keys($array_sample,'0AA00'));
$array = array();
foreach($array_sample as $key => $array_sample){
    print_r(gettype($key));
    array_push($array, $key);
    if(is_array($innerArray)){
        foreach ($innerArray as $value){
            echo $value;
        }
    }
        else{
            echo $innerArray;
        }
//    if($array_sample[$key]['clientstr'] === '0AA00'){
//     echo "GHEEEEEE";
//    }
}
echo gettype($array_sample["DB11"]["webshare"]);
print_r($array);
foreach($array as $keys){
    echo "jjjjjjjjjjjjjjj". $keys;
    echo gettype($keys);
   
    }
    // print_r($array_sample[$keys]['clientstr']);
    // echo $array_sample[$keys]['clientstr'];
    // if($array_sample[$keys]['clientstr'] ='0AA00'){
    //     echo "jflajlakjfjsa" .$array_sample[$keys]['clientstr'];
    //     //echo $keys;
    //     echo gettype($keys);
    //     //get path 
    //     // $array_sample[$keys]["webshare"];
    //     return $keys;

    // }
//}
//$key = array_search('0AA00', array_filter(array_combine(array_keys($array_sample, array_column($array_sample, 'clientstr')))));
echo $key . "um ba laaaa";
//     $key_level = "DB".$client_code[0].$client_code[1];
//     echo $key_level;
//     echo gettype($key_level);
//     if(array_key_exists($key_level, $array_sample)){
//         //echo $DBlevel10_35[$input_cc]; //output the level
//         //find the path through given level
//       // $arrayKeys = array_keys($array_sample);
//         //if(array_key_exists($input_cc[1], $DBlevel10_35)){
//            // $level_number = $DBlevel10_35[$input_cc[1]]; //output the level
//            // $match_level = str_contains($level_number, $arrayKeys);
//            //$matching_key = array_key_exists($key_level, $arrayKeys);
//            echo "get the value WOOHOO from 0 - 9999" . $array_sample[$key_level]["webshare"];
//         }
        
//     }

    

?>
