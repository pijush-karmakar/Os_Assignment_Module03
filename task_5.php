<?php 

// Task 5: Password Generator

function generatePassword( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; 
    $password = substr( str_shuffle( $chars ), 0, $length );
    echo "Password: ".$password;
}
generatePassword(12) ;












?>
