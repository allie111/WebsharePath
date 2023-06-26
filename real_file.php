<?php

$array_sample = array();
$array_sample["DB05"]["webshare"] = "\\\\prodsan-okc-m\\QAWSSH$\\OKC\\DB05\\";
$array_sample["DB05"]["clientstr"] = "0A100";
$array_sample["DB10"]["webshare"] = "\\\\prodsan-okc-m\\QAWSSH$\\OKC\\DB91\\";
$array_sample["DB10"]["clientstr"] = "0FK00";
$array_sample["DB11"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB91\\";
$array_sample["DB11"]["clientstr"] = "0AA00";
$array_sample["DB12"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB12\\";
$array_sample["DB12"]["clientstr"] = "0BE00";
$array_sample["DB13"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB13\\";
$array_sample["DB13"]["clientstr"] = "0DJ00";
$array_sample["DB14"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB14\\";
$array_sample["DB14"]["clientstr"] = "0FF00";
$array_sample["DB15"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB15\\";
$array_sample["DB15"]["clientstr"] = "0QX14";

$array_sample["DB65"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB65\\";
$array_sample["DB65"]["clientstr"] = "10000";
$array_sample["DB65"]["clientend"] = "10299";

$array_sample["DB64"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB64\\";
$array_sample["DB64"]["clientstr"] = "10300";
$array_sample["DB64"]["clientend"] = "10599";

$array_sample["DB66"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB66\\";
$array_sample["DB66"]["clientstr"] = "10600";
$array_sample["DB66"]["clientend"] = "10899";

$array_sample["DB67"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB66\\";
$array_sample["DB67"]["clientstr"] = "10900";
$array_sample["DB67"]["clientend"] = "10B99";


$array_sample["DB68"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB68\\";
$array_sample["DB68"]["clientstr"] = "11900";
$array_sample["DB68"]["clientend"] = "11B99";

$array_sample["DB69"]["webshare"] = "\\\\p.paycomhq.com\\QAWSSH$\\OKC\\DB69\\";
$array_sample["DB69"]["clientstr"] = "11C00";
$array_sample["DB69"]["clientend"] = "11E99";

$input_cc = readline("ENTER: ");
if($input_cc[0] == '0'){
    echo " it is 0 " .$input_cc;
    //check the second digit
    //if 2nd digit contains only number 
    if (is_numeric($input_cc)){
       
        echo gettype($input_cc);
    }
    elseif(!(is_numeric($input_cc))){
        
        
        echo "not all number" . gettype($input_cc);
        $array_str = str_split($input_cc, 1);
        $array_letter =array();
        
        foreach($array_str as $letter => $get_letter){
            echo $get_letter ;
            echo "- ";
            if(!(is_numeric($get_letter))){
                echo $get_letter;
                // echo $letter; thisi is the postion 
                echo "this is letter";
                array_push($array_letter, $get_letter); 
            }
            
        }
        print_r($array_letter);
        $oneLetter = implode($array_letter);
        echo $oneLetter;
        // //use for one letter 
        if(sizeof($array_letter) == 1){
            //$oneLetter = implode($array_letter);
            foreach($array_sample as $key => $value){
                //echo $key;
                foreach($value as $subkey => $cc_code){
                  //echo $subkey;
                  if($cc_code[1] === $oneLetter && !('A' <= $cc_code[2] && $cc_code[2] <='Z') ){
                    //echo $cc_code;
                    //echo "HElloo dummy" . $key;
                    echo $array_sample[$key]["webshare"];
                  }
                }
              }
        }
        //start with 0 and 2 letters
        elseif(sizeof($array_letter) >= 2){
            foreach($array_sample as $key => $value){
                //echo $key;
                foreach($value as $subkey => $cc_code){
                  //echo $subkey;
                  //if(('A' <= $cc_code[1] && $cc_code[1] <='Z') && ('A' <= $cc_code[2] && $cc_code[2] <='E')  ){
                    //use oneLetter to find the DBlevel
                    if(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[A-Ea-e]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                    //echo $cc_code;
                    //echo "HElloo dummy" . $key;
                        echo $array_sample[$key]["webshare"];
                    }
                    elseif(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[F-Jf-j]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                        
                            echo $array_sample[$key]["webshare"];
                    }
                    elseif(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[K-Ok-o]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                        
                            echo $array_sample[$key]["webshare"];
                    }
                    elseif(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[P-Tp-t]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                        
                        echo $array_sample[$key]["webshare"];
                    }
                    elseif(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[U-Wu-w]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                        
                        echo $array_sample[$key]["webshare"];
                    }
                    elseif(preg_match('/^[A-Za-z]+$/', $cc_code[1]) && preg_match('/^[X-Zx-z]+$/', $cc_code[2]) && $cc_code[1] === $oneLetter[0] && $cc_code[2] === $oneLetter[1] ){
                        
                        echo $array_sample[$key]["webshare"];
                }
                }
              }
        }
        
    }
}
elseif($input_cc[0] >=1){
    //check if input is numeric string without letter.
    if (preg_match('/^[0-9]+$/', $input_cc)){
       //DB level divide 300 clients for each level 0 ->299 for digit 2-5, 0-1 need to compare
       foreach($array_sample as $key => $value){
        //echo $key;
        foreach($value as $subkey => $cc_code){
          //echo $subkey;
          $substr_3lastdigit = substr($input_cc, 2, 3); //234
          $substr_2firstdigit = substr($input_cc, 0, 2);//10
          //check if the first 2 numeric are the same and if the last 3 numeric in range of 0 -299
            if($substr_2firstdigit  === substr($cc_code, 0, 2) && ('0' <= substr($cc_code, 2, 5) && substr($cc_code, 2, 5) <=' 299') && ('0' <= $substr_3lastdigit && $substr_3lastdigit <=' 299')) {

                echo $array_sample[$key]['webshare'];
            
             }
            elseif($substr_2firstdigit  === substr($cc_code, 0, 2) && ('300' <= substr($cc_code, 2, 5) && substr($cc_code, 2, 5) <=' 599') && ('300' <= $substr_3lastdigit && $substr_3lastdigit <=' 599')) {

                echo $array_sample[$key]['webshare'];
            
            }
            elseif($substr_2firstdigit  === substr($cc_code, 0, 2) && ('600' <= substr($cc_code, 2, 5) && substr($cc_code, 2, 5) <=' 899') && ('600' <= $substr_3lastdigit && $substr_3lastdigit <=' 899')) {

                echo $array_sample[$key]['webshare'];
                
            }
            elseif($substr_2firstdigit  === substr($cc_code, 0, 2) && ('900' <= substr($cc_code, 2, 5) && substr($cc_code, 2, 5) <=' B99') && ('900' <= $substr_3lastdigit && $substr_3lastdigit <=' B99')) {

                echo $array_sample[$key]['webshare'];
                
            }
        }
      }
       // echo gettype($input_cc);
    }
    else{
        $substr_3rddigit = $input_cc[2]; //ge the middle letter
        $substr_2firstdigit = substr($input_cc, 0, 2);//10
        foreach($array_sample as $key => $value){
            //echo $key;
            foreach($value as $subkey => $cc_code){
              //echo 10B45
              if(preg_match('/^[C-Ec-e]+$/', $cc_code[2]) && preg_match('/^[C-Ec-e]+$/', $substr_3rddigit)){
                if($substr_2firstdigit === substr($cc_code, 0, 2)){
                    echo $array_sample[$key]["webshare"];
                }
               
    
             }
            }
          }
    }
    }

else{

    }





?>
