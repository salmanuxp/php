
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
</body>
</html>


<?php

    echo "Before logout- ";
    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    session_unset();

    echo "After logout- ";

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

?>

<div>
    
</div>
