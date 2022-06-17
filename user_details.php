<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>
<body>

    <div>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        print_r($_SESSION);
    ?>
    </div>
    <div>
        <a href="http://localhost/INTRO_TO_APP/logout.php" >Logout.php</a>
    </div>
</body>
</html>