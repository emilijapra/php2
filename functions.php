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
    writeText("yo");
    function writeText($text) {
        echo "<h1>" . $text . "</h1>";
    }
    
    //2uzd.
    writeTextTag("heyo",1);
    function writeTextTag($text, $tag) {
        if (1<= $tag && $tag <=6) {
            echo"<h" . $tag . ">" . $text . "</h" . $tag . ">";
            
        }
    }

    ?>
</body>
</html>