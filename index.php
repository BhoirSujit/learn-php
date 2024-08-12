<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Learn PHP</h1>
    <?php
    include './header.php';
    ?>
    
    <?php
    echo 'hello php<br>';
    echo 'author sujit bhoir<hr>';

    echo 'get type of variables<br>';
    var_dump(5);
    var_dump("John") ; 
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);
    echo '<hr>';

    $names = ['sujit'];
    $names[] = 'pratham';
    $names[] = 'pavan';
    $familys = ['sujit' => [
'father' => 'Jayvant',
        'mother' => 'Seema',
        'sister' => 'Apeksha'
    ],
    'pratham' => [
        'brother' => 'pavan',
        'father' => 'mohan'
    ]
        
    ];


    function Filter($items, $funk) {
        $filteritem = [];

        foreach($items as $item) {
            if($funk($item))
            {
                $filteritem[] = $item;
            }
        }

        return $filteritem;
    }


    ?>

    <?= 'Your Friends <br>' ?>
    <?php foreach($names as $name) : ?>
        <li><?= $name ?></li>

        <?php endforeach?>

        <?= '<br> Family <hr>' ?>
    <?php 
    foreach($familys as $key => $family) {
    ?>
    <div> <?= $key ?></div>
    <div>Father : <?= $family['father'] ?></div>

    
    

<?php } 





?>
<?= '<hr>'?>

<?php 

$n = filter($names, function ($item) {
    return str_starts_with($item, 'p');
});

print_r($n);

$k = array_filter($names, function($n) {
    return str_ends_with($n, 't');
});

print_r($k);


?>


</body>

</html>