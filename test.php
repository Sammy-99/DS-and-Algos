<?php

/** Algo to rewerse the string word without using inbuilt functions */

// ---------------------------------------------------- problem ==> 1 ---------------------------------------------------------

$str = 'my name is ravi kumar';
$i = 0;
$newStr = '';
$res = '';

while(isset($str[$i])){
    $i++;
}

for($j = 0; $j < $i; $j++){
    $newStr .= $str[$j];

    if($str[$j] == ' ' || $j == $i-1){
        $res = ' '. $newStr . $res;
        $newStr = '';
    }
}

// second method with single loop ==>

while(isset($str[$i])){

    $newStr .= $str[$i];

    if(isset($str[++$i]) === false){
        $res = ' '. $newStr . $res;
        $newStr = '';
    }
    elseif($str[$i] == ' '){
        $res = ' '. $newStr . $res;
        $newStr = '';
    }
}


/** Algo to iterate the letters with no of repeatation continuously */

// ---------------------------------------------------- problem ==> 2 ---------------------------------------------------------

$string = "aabbbbccab";     // a2b4c2a1b1
$letter = '';
$lastNumber = 0;
$result = '';

for($i=0; $i <= strlen($string); $i++){
    
    if($i == strlen($string)){
            $diff = $i - $lastNumber;
            $lastNumber = $i;
            $result .= $diff;
    }else{
        if($letter != $string[$i]){
            $letter = $string[$i];
    
            if($i != $lastNumber){
                $diff = $i - $lastNumber;
                $lastNumber = $i;
                $result .= $diff;
            }
            $result .= $letter; 
        }
    }
}

echo $result;