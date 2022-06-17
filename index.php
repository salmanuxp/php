<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $author = "Salman";
    $str = "Hello from MIST";
    $students = [
        'faisal'=> 22,
        'khandak'=> 100,
        'rushil'=>1 
    ]
    
?>


<h1>  
    <?php 
        echo "Hello from". ' ' .$author.'</br>';
        echo 'Length:'. strlen($str). '</br>';
        echo 'Word count: '. str_word_count($str). '</br>';
        echo "</br></br>";
        foreach( $students as $name=>$roll ){
            echo "name: ". $name . " roll: " . $roll . '</br>';
        }
    ?>
    </h1>
</h1>


<div>
    <!-- Form with method as POST -->
    
<form action="action.php" method="POST">
    <label for="name" >Enter your name: </label>
    <input type="text" name="name" placeholder="Your Name Here">
    <label>Enter your age: </label>
    <input type="text" name="age" placeholder="Your Age Here">

    <button type="submit" >Submit</button>

</form>

</div>



<!-- php date time -->

<?php 
    date_default_timezone_set('Asia/Dhaka');
    echo date('Y-M-D h:m:sa');
?>


<!-- Footer of the page included here -->

<?php require('footer.php') ?>

</body>
</html>





