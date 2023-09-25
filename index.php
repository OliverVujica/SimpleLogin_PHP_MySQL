<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    $_SESSION;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Website</title>
</head>
<body>
    <h1>This is the main page</h1>
    <p>
        You succesfully logged in! 
        This website is created with PHP and MySQL.
        It was not meant to be a real, nice looking website, but a test website.
    </p>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
    <br> <br>
    <a href="logout.php">Logout</a>
</body>
</html>