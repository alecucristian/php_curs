<?php
// Syntax
function echo_stuff() {
    echo 'Hey boss!';
    echo '<br>';
} 

echo_stuff();

// Function arguments
function my_name ( $name ) {
    echo $name;

}

echo '<br>';
my_name('John');
my_name( 'Jane' );
my_name( 'Jeff' );

// Default arguments
function full_name( $firstname = 'John', $lastname = 'Morris' ) {
    echo $firstname . $lastname;

}

full_name();
echo '<br>';

// Return values
function multiply( $number, $multiplier ) {
    return $number * $multiplier;

}


echo multiply(3, 43);
echo '<br>';
echo multiply(41561561, 46546456456);


?>