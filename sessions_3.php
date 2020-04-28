<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 3</title>
</head>
<body>
   <p><?php print_r( $_SESSION ); ?></p>
   <p><a href="sessions.php">Click here to start over</a></p>
    
</body>
</html>