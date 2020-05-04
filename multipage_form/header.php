<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('config.php');
require_once('functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Page Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" aria-pressed="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="navbar navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="page2.php">Page 2</a></li>
                    <li><a href="page2.php">Page 3</a></li>
                </ul>
            </div>
        </div>

    </nav>
    
</body>
</html>

