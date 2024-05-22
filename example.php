<?php

// function to add 2 numbers
function add($a, $b) {
    return $a + $b;
}

function alphabetize_by_last_name( array $names ) {
    usort( $names, function( $a, $b ) {
        $a = explode( ' ', $a );
        $b = explode( ' ', $b );
        return strcasecmp( end( $a ), end( $b ) );
    } );
    return $names;
}

// validate email address 
function validate_email($email) {
  // regex validate email address
  return preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email);
}
