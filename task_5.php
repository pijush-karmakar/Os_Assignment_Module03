<?php 

// Task 5: Password Generator

// function generatePassword($length){



// }

// generatePassword($length);

// function generatePassword($length) {
//     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//     $count = mb_strlen($chars);

//     for ($i = 0, $result = ''; $i < $length; $i++) {
//         $index = rand(0, $count - 1);
//         $result .= mb_substr($chars, $index, 1);
//     }

//     echo $result;
// }

// generatePassword(12);



function generatePassword( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; 
    $password = substr( str_shuffle( $chars ), 0, $length );
    echo "Password: ".$password;
}
generatePassword(12) ;












?>