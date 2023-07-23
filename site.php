<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[1] = "Dwight";
        echo $friends[1];
        echo ("<br>");
        echo count($friends);
        echo ("<br>");
        $friends[4] = "Angela";
        echo count($friends);
    ?>
   
</body>
</html>