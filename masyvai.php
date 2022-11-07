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
    //1uzd.
       $array = [];//cia masyvas tuscias
    for ($i=0; $i < 30; $i++) { 
        $array[] = rand(5,25);    //cia i masyva idedam random skaiciu.
}
    print_r($array);
    echo "<br>";

     //2uzd.a.
   //echo count($array)
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) { 
      if  ($array[$i] > 10) {
        $sum++;
        
      }
    }

    echo $sum;
    echo "<br>";

     //2uzd.b
echo (max($array));
echo "<br>";

//2uzd.c
print_r(array_sum($array));
echo "<br>";


//2uzd.d

$array_index = [];
for ($k=0; $k < count($array); $k++) { 
  $array_index[] = $array[$k] - $k;
}
print_r($array_index);
echo "<br>"


//2uzd.e
$array = [];
for ($e=0; $e < 40; $e++) { 
    $array[] = rand(5,25);    
}

    


    ?>
</body>
</html>