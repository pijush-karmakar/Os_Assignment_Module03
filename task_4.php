<?php 
// Task 4: Multidimensional Array

$stdGrades = [
    "std1"=>["Math"=>89,"English"=>80,"Science"=>87],
    "std2"=>["Math"=>79,"English"=>68,"Science"=>80],
    "std3"=>["Math"=>69,"English"=>60,"Science"=>77]

];

function avgGrade($stdGrades){

foreach($stdGrades as $key=>$value){ 
    $average = array_sum($value) / count($value);
    // echo "$key = ".$average."\n";
    printf("%s average grade = %.2f\n",$key,$average);

    }

}

avgGrade($stdGrades);





















?>