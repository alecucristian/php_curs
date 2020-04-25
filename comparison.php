<?php 
echo '<h1>Comparison Operators</h1>';

// Equal ==
echo '1. ';
if ( 1 == 2) {
    echo 'true<br>';

} else {
    echo 'false<br>';
}


//  Not equal
echo '2. ';
if ( 1 != 2 ) {
    echo 'true<br>';

} else {
    echo 'false<br>';
}

// Identical
echo '3. ';
if ( 1 === '1') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

// Not Identical
echo '4. ';
if ( 1 !== '1') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

// COMPARISONS

// Greater than , less than
echo '5. ';
if ( 1 < 2) {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

// Greater than, less than or equal
echo '6. ';
if ( 1 <= '1') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

// Not equal after type juggling
echo '7. ';
if ( 1 <> '1') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

// Spaceship, new in PHP 7
// An interger less than, equal to, or greater than zero when $a is respectively
//  less than, equal to, or greater than $b, Available as of PHP 7
// Trinary. Runs 3 comparison, Can return three values
echo '8. ';
if ( 1 <=> '1') {
    echo 'true<br>';
} else {
    echo 'false<br>';

}

// Null coalesce, New in PHP 7
// Reading from left to right, the first value which exists and is not null
// is the value that will be returned.
// $a has not been set
$b = 12;

echo '9. ';
echo $a ?? 1;
echo '<br>10. ';
echo $a ?? $b ?? 3;

// echo '<br>11. ';
// if ( ! is_null( $a ) ) {
//     echo $a;

// } else {
//     echo 1;
// }

echo '<h1>Logical Operators</h1>';

// And &&, Both are true
echo '12. ';
if ( 1 == '1' && 2 < 4) {
    echo 'true<br>';

} else {
    echo 'false<br>';
}

// Or ||, Either is true
echo '13. ';
if ( 1 == '1' || 2 < 4) {
    echo 'true<br>';

} else {
    echo 'false<br>';
}

// Not ! 
$var0 = 0;
$var1 = 1;
$var2 = false;
$var3 = true;

if ( ! $var0 ) {
    echo '14. true<br>';
}

if ( ! $var1 ) {
    echo '15. true<br>';
}
if ( ! $var2 ) {
    echo '16. true<br>';
}
if ( ! $var3 ) {
    echo '17. true<br>';
}


?>