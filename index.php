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

</body>
</html>





