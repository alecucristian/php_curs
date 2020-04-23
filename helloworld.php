<?php
echo 'Hello World';

$variable = "\nHello World" . " yes";

$number = 22;

$number *= 4;

$a = "number";

echo "\nMy age is " . $$a;

// Arrays

$array = array('name', 'email', 'address');
print_r($array);
echo $array[0];

$array2[] = "salad";
$array2[] = "bowl";
print_r($array2);

$array3 = array(
    'name' => 'John',
    'age' => 35,
    'email' => 'email@email.com',
);

print_r($array3);

// If, else, switch
$number= 1;
$number2 = 1;
$number3 = 3;
if($number === $number2 || $number === $number3) {
    echo 'true';
} else {
    echo 'false';
}

switch($number) {
    case $number2:
        echo 'equal';
        break;
    case 1: 
        echo 'True';
        break;
    case 2:
        echo 'False';
        break;
    default:
        echo 'no idea';
        break;


}

// For foreach
echo "<br>";
for($i=1;$i<=10;$i++){
    echo "$i<br>";

}
$array = array("name", "email", "address");
foreach($array as $key=>$value) {
    echo "Key $key: $value</br>";

}

// While loops
echo "<br>";
$i = 1;

// $array = array('name', 'email', 'adress');
// while ($array[$i]) {
    // echo "$array[$i] <br>";
    // $i++;

// }

// $_GET Variables
if (isset($_GET['s'] ) ) {
    echo '<p>Your search term is:</p>' . $_GET['s'];

}
// print_r($_GET);


//  $_POST Variables

if (isset($_POST['s'] ) ) {
    echo '<p>Your search term is:</p>' . $_POST['s'];

}

?>
<form method="get" action=""
    <label>Enter search term g</label>
    <input type="search" name="s" value="<?php
     if( isset($_GET['s'] ) ){
         echo $_GET['s']; 

     }
     ?>">
</form>
<form method="post" action=""
    <label> Enter search term p </label>
    <input type="search" name="s" value="<?php
     if( isset($_POST['s'] ) ){
         echo $_POST['s']; 

     }
     ?>">
</form>








