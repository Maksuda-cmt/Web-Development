<!DOCTYPE html>
<html>
<body>


<h1>My first PHP page</h1>

<?php
// variable
/*
malti line comment
*/
$color = "Maksuda Akter";
echo $color . "<br>";

$txt = "text";
echo "this is $txt". "<br>";
// variable concat
$txt2 = "this is text two,";
echo "this is text one," . $txt2 . "this is text three". "<br>";

// variable addition
$x = 5;
$y = 10;
echo $x + $y;

// array
$cars =array("BW","VOLVO","TOYOTA");
var_dump($cars);

// class
class car {
    public $model = "MERCEDES";
    public $color = "BLACK";

    public function getCarInformation(){
        return "model : " . $this->model . "color : " .$this->color;
    }
}
$car1 = new car();

echo $car1->getCarInformation();


?>

</body>
</html>