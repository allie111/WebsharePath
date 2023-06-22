
<?php 
    //the webshare function get the user's input and anylise the input to get the path from $ap_sessionsvr_array
    //$ap_sessionsvr_array['DB127']['wsshare']					= "\\\\prodsan-okc-h01-cltst.paycomhq.com\\QAWSSH$\\OKC\\DB127\\";
//     $ap_sessionsvr_array['DB129']['clientstr']					= "0PP00";
// $ap_sessionsvr_array['DB129']['clientend']					= "0PT99";
    
$input = readline('Please enter the Client Code (5-digit):');
    
    //check user's input if it is 5 digits for client code
    function check_input($cc_code){
        if($cc_code){
            //split the input and convert to array
            $client_code = preg_split('//', $cc_code, -1, PREG_SPLIT_NO_EMPTY);
            //check if the array has 5 elements.
            if(sizeof($client_code)== 5){
                echo "True";
                webshare($client_code);
            }
        else{
            echo " User input invalid.";
            $input = readline('Please enter the Client Code:');
            check_input($input);
            }
        }
        
        
    }

    function webshare(array $input_cc){
        
        $DBlevel10_35 = array('A' => '10', 'B' => '11', 'C' => '12', 'D' => '13', 'E' => '14', 'F' => '15', 'G' => '16', 'H' => '17',
         'I' => '18', 'J' => '19', 'K' => '20', 'L' => '21', 'M' => '22', 'N' => '23', 'O' => '24', 'P' => '25', 'Q' => '26',
          'R' => '27', 'S' => '28', 'T' => '29', 'U' => '30', 'V' => '31', 'W' => '32', 'X' => '33', 'Y' => '34', 'Z' => '35');
        
        
        if($input_cc){
            //include the array file to get the wspath
            include 'sample.php';
            print_r($input_cc);

            if($input_cc[0] == '0'){
                echo " it is 0 " .$input_cc;
                //check the second digit
                if(0 >= $input_cc[1] && $input_cc[1] <=9 ){
                    //echo "get the value" .$array_sample['DB']["webshare"];
                    
                }
                elseif(('A' >= $input_cc[1] && $input_cc[1] <='Z') && ('A' >= $input_cc[2] && $input_cc[2] <='Z')){
                    echo "get the LETTER1 value" .$array_sample['DB']["webshare"];
                    //check if the sencond digit is in the key of DB level 10-25 array
                    if(array_key_exists($input_cc[1], $DBlevel10_35)){
                        echo $DBlevel10_35[$input_cc]; //output the level
                        //find the path through given level
                        $arrayKeys = array_keys($array_sample);
                        $matching_key = preg_grep("/10/", $arrayKeys); //"DB10"
                        //got the path
                        foreach($matching_key as $element){
                            $getPath = $array_sample[$element]["webshare"];
                            echo "pthhhhhhhh" . $getPath;
                        }
                        
                    }
                }
            }
            elseif($client_code[0] == '1'){
                echo " it is 1 " .$input_cc;
            }
            else{
                $input = readline('Please enter the Client Code:');
                webshare($input_cc);
            }
    
        }else{
            return 0;
        }
    
    
    }
    //function check the second digit
   
    
    check_input($input);
    // webshare($input);
            
?> 
