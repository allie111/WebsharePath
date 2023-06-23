$array = array();
foreach($array_sample as $key){
    print_r(gettype($key));
   
    echo $key['clientstr'] . "HOOOOO";
    echo gettype($key['clientstr']);
    if($key['clientstr'] === '0AA00'){
        echo "FK MEEE";
        
    }
