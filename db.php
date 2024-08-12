
<?php
require './header.php';


function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

$heading = 'Database Connection';


$host = 'localhost';
$port = 3307;
$dbname = 'PBCdata';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
//connect
try {
    $pdo = new PDO($dsn,'root','root');
}
catch(Exception $e) {
    echo $e;
    die();
}

$id = $_GET['id'];



$statement = $pdo->prepare('SELECT * FROM customer WHERE id = :id');
$statement->bindParam(':id', $id);

$statement->execute();


$data = $statement->fetchAll(PDO::FETCH_ASSOC);




require './views/db.view.php';
?>



