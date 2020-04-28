<?php
// Session contents are stored on the server and determined by PHP's
// session.save.path. Usually this is /tmp. You use phpinfo() to view your 
// specific settings. Each session is identified by a session-id which is
// Stored on the client (browser) and sent with each request. Usually the
// session-id is stored in a cookie but can also be appended to URLs.

// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <p>Session variables to start</p>
    <?php print_r( $_SESSION ); ?>
    <?php
    // Set session variables
    $_SESSION['name'] = 'John';
    $_SESSION['status'] = 'is dope';
    ?>
    <p>Session variables set. <a href="sessions_2.php">Click here to check</a></p>
    <p><?php print_r( $_SESSION ); ?></p>

    
</body>
</html>