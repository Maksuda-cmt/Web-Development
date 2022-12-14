<DOCTYPE html>
<html>
<body>

<?php
class House {
    public $color;
    public $model;
    public function _construct($color , $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My house is a " . $this->color . " " . $this->model . " !";
    }
}

$myHouse = new House("black" , "MAKSUDA");
echo $myHouse -> message();
echo "<br>";
$myHouse = new House("red" , "BOJLUR RAHAMAN");
echo $myHouse -> message();
?>

</body>
</html>        