<?php 

function palindrome($str){
    if(strrev($str)==$str){
        return 1;
    }else{
        return 0;
    }
}

$str = 'IBU RATNA ANTAR UBI';
if(palindrome($str)){
    echo "INI PALINDROME";
}else{
    echo "INI BUKAN PALINDROME";
}

?>