<?php 
// Task 3: Array Sorting  

$grades = [85, 92, 78, 88, 95];

function sortGrades($grades){
 
        rsort($grades);
        print_r($grades);
}
sortGrades($grades);
























//-------------------------------- Using sort() & loop
/*
$grades = [85, 92, 78, 88, 95];

function sortGrades($grades){
    
 echo "Sorted Grades in descending order:\n";
 for($i=count($grades);$i>0;$i--){ 
        sort($grades);
        echo $grades[$i-1]."\n";
    }
}
sortGrades($grades);
*/

























?>