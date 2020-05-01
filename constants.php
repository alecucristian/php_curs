<?php
// Case sensitive
define ('NAME', 'John' );


// Case insensitive
define( 'LAST', 'Morris', true );

// Scope
echo NAME . '<br>';
echo LAST . '<br>';

function my_func () {
    echo NAME . LAST;
}

my_func();

?>