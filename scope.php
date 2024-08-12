<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './header.php';
    //3 type of variable scope
    //1. local
    //2. global
    //3. static

    $x = 5; //local scope

    function myTest() {
        global $x; //it used to get global variables in local scope
        echo "<p>x inside value is : $x </p>";// undefine error
        echo "<p> we can also access with $GLOBALS[x] </p>";
        $new_x = $GLOBALS['x']; // we can also get global value with GLOBALS keyword it store all global varibles in array
        echo $new_x;
    }
    myTest();

    echo "<p>x outside value is : $x </p>";// work fine 


    echo '<h2> Static keyword </h2>';
    
    function demo() {
        static $y = 0; //single copy of variable
        echo $y;
        $y++;
    }
    demo();
    demo();
    demo();
    ?>
</body>
</html>