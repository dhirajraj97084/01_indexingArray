<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexing array</title>
</head>
<body>
    <h1>Indexing Array In php (Hypertext Processor)</h1>
    <?php
     $colour=["red","blue","black"];
    //  access the array key in simple method
     echo $colour[0];
     echo "<br>";
     echo $colour[1];
     echo "<br>";
     echo $colour[2];  
    // access the array key in the help of for loop  
    echo "<br> access the array key in the help of for loop ";    
    for($i=0;$i<3;$i++){
        echo "<br>";
        echo $colour[$i];
    }
    ?>
</body>
</html>