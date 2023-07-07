<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro();
    }

    class Audi extends Car {
        public function intro() {
            return "I'm a $this->name";
        }
    }
    class Volvo extends Car {
        public function intro() {
            return "I'm a $this->name";
        }
    }

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    ?>
</body>
</html>