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

    class Car {
        public $color;

        public function __construct($color) {
            $this->color = $color;
        }

        public function start() {
            print "brum brum brum bruuuuuuuuuuuuuuuuuuuuuu bruuuuuu bruuuuu.....";
        }
    }

    $car1 = new Car('red');
    $car1->start();


    $h = hash('sha256', 'sujit');
    echo $h;

    echo $h === hash('sha256', 'sujit')? 'same'  : 'no same';


?>
</body>
</html>