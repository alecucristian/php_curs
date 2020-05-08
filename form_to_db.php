<?php

if ( ! empty ( $_POST ) )  {
    // Post data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    // Check for valid mail
    if ( ! $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ) {
        die('Invalid mail');
    }


    // Database credentials

    $db_user = 'root';
    $db_pass = '';
    $db_name = 'php101';
    $db_host = 'localhost';

    $query = "INSERT INTO users (user_name, user_email) VALUES (?,?)";

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();

    } else {
        echo 'Connected';
    }

    $users_table = 
    "CREATE TABLE IF NOT EXISTS users (
        ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        user_name text NOT NULL,
        user_email text NOT NULL,
        PRIMARY KEY (ID)

        )";

    if ($mysqli->query($users_table) === TRUE) {
        printf("Table objects succesfully created.\n");
    }

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $name, $email);

    // Run the query
    $stmt->execute();

    // Get ID of row we just inserted
    $id = $mysqli->insert_id;

    // Get the data we just submitted
    $result = $mysqli->query("SELECT user_name, user_email FROM users WHERE ID = {$id}");
    $user = $result->fetch_object();

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 10px;
            background:#208fe5;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        .form {
            background: #ffffff;
            border-radius: 5px;
            padding: 20px;
            max-width: 480;
            margin: 15px auto;
        }
        .form,
        .text,
        .email,
        .submit {
            display: block;
            box-sizing: border-box;
            width: 100%;

        }
        .text,
        .email,
        .submit {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form h3 {
            line-height: 1.2;
            font-size: 14px;
            margin-top: 5px;
            font-weight: normal;
        }
        .submit {
            border: none;
            background: #FEBB13;
            color: #222;
            font-size: 24px;
            
        }
    </style>
    <title>Form to Database</title>
</head>
<body>
    <form action="" method="POST" class="form">
        <?php if ( $user ) : ?>
            <h3>Here's the data you submitted:</h3>
            <p>Name: <?php echo htmlspecialchars($user->user_name, ENT_COMPAT, 'UTF-8'); ?></p>
            <p>Email: <?php echo htmlspecialchars($user->user_email, ENT_COMPAT, 'UTF-8'); ?></p>
        <?php endif; ?>

        <h3>Enter your name and email address below:</h3>
        <p><input type="text" name="name" class="text" placeholder="Enter your full name"></p>
        <p><input type="email" name="email" class="email" placeholder="Enter your email address"></p>
        <p><input type="submit" class="submit" value="Submit"></p>
    </form>
    
</body>
</html>