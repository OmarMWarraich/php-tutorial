<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo("Hello World");
        echo("<hr></hr>");
        $phrase = "Hello World";
        echo strtoupper($phrase);
        echo("<hr></hr>");
        echo $phrase[0];
        echo("<hr></hr>");
        echo $phrase[1];
        echo("<hr></hr>");
        echo $phrase[2];
        echo("<hr></hr>");
        echo $phrase[3];
        echo("<hr></hr>");
        echo $phrase[4];
        echo("<hr></hr>");
        echo $phrase[6];
        echo("<hr></hr>");
        echo $phrase[7];
        echo("<hr></hr>");
        echo $phrase[8];
        echo("<hr></hr>");
        echo $phrase[9];
        echo("<hr></hr>");
        echo $phrase[10];
        echo("<hr></hr>");
        $phrase[0] = "B";
        echo strtoupper($phrase);
        echo("<hr></hr>");
        echo str_replace("llo", "Hello", $phrase);
        echo("<hr></hr>");
        echo str_replace("Bello", "Hello", $phrase);
        echo("<hr></hr>");
        echo substr($phrase, 6, 1);
    ?>

</body>
</html>