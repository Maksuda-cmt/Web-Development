<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fullName($fname, $lname){
    echo $fname . " " . $lname . "<br>";
    }
    fullName("Maksuda" , "Akter");
    // associative array
    $person = array("Maksuda" => 600, "Tani" => 100, "Nahida" => 300);
     echo $person["Maksuda"] ;
     echo "<br>";
     // count

     $cars = array("Volvo", "Bmw", "Toyota");
     echo count($cars);
     echo "<br>";
     for($x = 0; $x < count($cars); $x++){
        echo $cars[$x] . "<br>";
     }
     // super global
     var_dump($_SERVER);
     echo "<br>";
     echo $_SERVER["HTTP_HOST"];
     // form
     
    ?>
</body>
</html>