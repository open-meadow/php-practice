<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class Dog
    {
        public $name;
        public $birthday;
        protected $attendance = 0;

        function __construct($name, $birthday)
        {
            $this->name = $name;
            $this->birthday = $birthday;
        }

        function getAge()
        {
            return $this->calcAge();
        }

        function calcAge()
        {
            return date("Y/m/d") - $this->birthday;
        }

        function bark()
        {
            echo "Woof";
        }

        abstract function updateAttendance();


    }

    class HerdingDog extends Dog
    {
        function bark()
        {
            echo "Waah";
        }
        // method override
        function herd()
        {
            echo "Stay Together!";
        }
        function updateAttendance($x)
        {
            $this->attendance + $x;
        }
    }

    $hdog = new HerdingDog("coco", "2000/05/10");
    $hdog->bark();

    $rufus = new HerdingDog("Rufus", "2/1/2017");
    $rufus->updateAttendance(0);
    $rufus->updateAttendance(5);

        ?>
</body>

</html>