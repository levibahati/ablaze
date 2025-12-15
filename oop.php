<?php
//Fruit program

/*class fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
        return $this->name;
    }
}

$apple = new fruit();
$banana = new fruit();

$apple->set_name("apple");
$banana->set_name("banana");

echo $apple->get_name();

//Constructor function
class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new fruit("apple", "red");
$banana = new fruit("banana", "yellow");


echo $apple->get_name();
echo "<br>";
echo $banana->get_color();

//destructor Function
class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }

    function __destruct(){
        echo "The Fruit is {$this->name} and it's color is {$this->color}";
    }
}

$apple = new fruit("apple", "red");


//Inheritance
class fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
        echo "This is a {$this->name} which is {$this->color} in color.";
    }
}

class Cherry extends fruit{
    public function message(){
        echo "Is {$this->name} a fruit or a berry?";
    }
}

$Cherry = new Cherry("Cherry", "red");
$Cherry->message();
$Cherry->intro();
*/

?>