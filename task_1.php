<?php 

// Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function strMani($text){
   $textLower = strtolower($text);
   $textReplace = str_ireplace('brown','red',$text);

   echo "Lowecase string: ".$textLower."\n";
   echo "Replaced string: ".$textReplace;

   
}

strMani($text);















?>