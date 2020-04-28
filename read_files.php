<?php 
$filename = 'myfile.txt';

// Open a file for reading
$myfile = fopen ($filename, 'r' ) or die( 'unable to open the file' );

// Read the entire file
echo fread( $myfile, filesize( $filename ) ) . "<br>";

// Read a single line form the file
// echo fgets( $myfile ) . "<br>";

// Check if end of the file
// echo feof( $myfile ) . "<br>";

// Read a single character from the file
// echo fgetc( $myfile );

// Close the file
fclose ( $myfile );

// Write to a file
// $myfile = fopen( $filename, 'w' ) or die( 'unable to open the file' );
// $mytext = "Well, this is happy news!\n";
// fwrite ($myfile, $mytext);
// $mytext = "It sure is.\n";
// fwrite ( $myfile, $mytext );
// fclose ( $myfile );

// Append a file
// $myfile = fopen( $filename, 'a' ) or die( 'unable to open the file');
// $mytext = "Hey can I come to the party?\n";
// fwrite ($myfile, $mytext);
// fclose ( $myfile );

// Create if not exists
// $myfile = fopen ( $filename, 'x' ) or die( 'unable to open file');

// Read changes
$myfile = fopen ( $filename, 'r' ) or die( 'unable to open the file' );
echo fread( $myfile, filesize( $filename ) ) . "<br>";
fclose( $myfile );


?>