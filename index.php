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
    
$name = "Will";
$lastname = "Smith";
echo "<h1>" . " " . $name . " " . $lastname . "</h1>";

echo "<h1>" . $lastname . "</h1>";


//2uzd.
$name = "Will";
echo " ";

echo strtoupper ($name);


$lastname = "Smith";
echo " ";
// echo "<p>".strtolower ($lastname). "</p>";
echo strtolower ($lastname);
echo "<br>";


//3uzd.
$words = array(
    'Will Smith',
    );
    echo " ";
echo "<br>";
    
$initials = implode('/', array_map(function ($name) { 
    preg_match_all('/\b\w/', $name, $matches);
    return implode('', $matches[0]);
}, $words));
echo $initials;
echo "<br>";


//4uzd.

$name = "Will"; 

echo "<br>";
$lastname = "Smith";

echo $name;
echo $lastname;
echo "<br>";


echo "<br>";
echo substr("Will", -3);
echo "<br>";
echo substr("Smith", -3);
echo "<br>"; 



//5uzd.
echo "<br>";

$txt = " An American in Paris";
echo $txt;
echo "<br>";

echo str_replace("A", "*", str_replace("a", "*", $txt));
echo "<br>";

//$res = preg_replace("/a/i", "*", $txt );
//echo $res;

echo"<br>"


?>




    
</body>
</html>