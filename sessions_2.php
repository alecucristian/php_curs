<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2</title>
</head>
<body>
    <p><?php print_r( $_SESSION ); ?></p>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>Status: <?php echo $_SESSION['status'] ?></p>
    <p><a href="sessions_3.php">Click here to destroy session</a></p>
    
</body>
</html>