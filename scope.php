<?php
$variable_in_global_scope = 'Hi, I am global yo';

function my_func() {
    global $variable_in_global_scope;
    $variable_in_local_scope = 'Drat, I am just local';

    echo $variable_in_global_scope;
    echo $variable_in_local_scope;
}

my_func();

// echo $variable_in_local_scope;


?>