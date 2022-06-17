<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-1</title>
</head>
<body>

<div>
    <form action="welcome.php" method="POST">
        <label for="name" >Enter your name: </label>
        <input type="text" name="name" placeholder="Your Name Here">
        <label>Enter your roll: </label>
        <input type="text" name="roll" placeholder="Your Roll Here">

        <button type="submit" >Submit</button>

    </form>
</div>

    <div>
        <a href="get_method.php/?name=salman&roll=22">Click to view data</a>
    </div>


</body>
</html>





