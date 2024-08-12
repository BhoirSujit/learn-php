<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    include "./header.php";

    echo '<div class="title">Strings</div>';
    echo `<div class="name">strlen('sujit')</div>`;

    echo strlen('sujit'); //return length of string
    echo str_word_count('hello world'); //return count of word in the string
    echo strpos('sujit bhoir', 'bhoir'); //return the position where first occurs
    
    //manipulation
    echo strtoupper('sujit'); //convert to upper case
    echo strtolower('sUjIt'); //convert to lower case
    echo str_replace('sujit', 'shreya', 'sujit bhoir'); //replace search, replace world, text
    echo strrev('sujit'); //reverse the string
    echo trim('    sujit     '); //trim whitespaces
    print_r( explode(' ', 'girl are sweet')); //split world in array

    echo '<hr>';
    echo 'Reverse the string';
    $name = 'sujit';
    $p = 'hello my name is sujit';

    function reverse($var1) {
        $reverse = '';
        for ($i = strlen($var1)-1; $i >= 0; $i--) 
            $reverse .= $var1[$i];
        
        return $reverse;
    }

    $p_arr = explode(' ',$p);
    $n_p = '';
    
    foreach ($p_arr as $d) {
        $n_p .= reverse($d).' ';
    }
    
    echo '<br>'.reverse($name);
    echo '<br> string is : '.$n_p;

    echo '<hr>slicing<br>';
    echo substr('sujit',0, -3);
    
    define('PORT', 8181);
    echo PORT;
    echo "<hr>Check if reference<br>";
    $x = 10;
    function myfun(&$x) {
        $x = 15;
    }
    myfun($x);

    echo $x;

    echo '<hr>Array<br>';
    $new = array();
    array_push($new, 'sujit');
    array_push($new, 'pratham');
    print_r($new);

    $msg = function() {
        echo 'i am a msg';
    };
    $new[2] = $msg;
    $new[2]();

    foreach($_SERVER as $key => $value) {
        echo $key.' : '.$value.'<br>';
    }

    htmlspecialchars()

    

?>
</body>
</html>