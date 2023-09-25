<?php 

// Task 2: Array Manipulation

$numbers = [1,2,3,4,5,6,7,8,9,10];

function even($numbers){
    return $numbers%2==0;
}

$evenNumbers = array_filter($numbers,'even');
echo "Even Numbers:\n";
print_r($evenNumbers);







// ------------------- Another way using loop

/*
$numbers = array(1,2,3,4,5,6,7,8,9,10); 

function even($numbers){
    echo "Even Numbers: ";
    for ($i = 0; $i < count($numbers); $i++) 

        { 
            if ($numbers[$i]%2 ==0)
            echo $numbers[$i]." ";
        }
}

even($numbers); */
















?>