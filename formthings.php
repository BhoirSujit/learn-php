<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./header.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo 'your name is : '.$_POST['name'];
        echo '<br> your email is : '.$_POST['email'];
    }
    
    

?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <input type="text" name="name" id="name" placeholder="enter your name">
    <input type="email" name="email" id="email" placeholder="enter your name">
    <input type="submit" value="submit">
</form>
</body>
</html>