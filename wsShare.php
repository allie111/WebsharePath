<?php



$input = readline("Enter the Client Code: ");

function get_webSharepath($userInput, $array_lib){
    //connect to the array in lib_config.php file.
    include('lib_config_copy.php');
    if(strlen($userInput) == 5){
        foreach($ap_sessionsvr_array as $key => $value){
    
            //work from DB level contain client code start with  "0...." and "10.."
            // if($ap_sessionsvr_array[$key]['clientstr'] <= $input && $ap_sessionsvr_array[$key]['clientend'] >= $input){
            //     echo $ap_sessionsvr_array[$key]['wsshare'];
            // }
            //compare the user input and the client code in the array 
            if(substr($ap_sessionsvr_array[$key]['clientstr'],0,2 ) === substr($input,0, 2)){
                if($ap_sessionsvr_array[$key]['clientstr'] <= $input && $ap_sessionsvr_array[$key]['clientend'] >= $input){
                    //get the path
                    echo $ap_sessionsvr_array[$key]['wsshare'];
                }
            }
    
         }

    }
    else{
        $input = readline("Enter the Client Code: ");
    }


}

    




?>
