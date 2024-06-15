<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
    <?php
    //-------------------------------
    $Books =[
     "Novel" => ["action" =>["01" => "The Hunger Game", "02" => "Ready Player One"], "fantasy" => ["11" => "The Song Of The Ice And Fire" ,"12" => "The Lord Of The Rings"]]
    ];
    print_r($Books);
    echo "<hr>";
    //or ------------------------------
    $Books2 = ["The Hunger Game","Ready Player One","The Song Of The Ice And Fire","The Lord Of The Rings"];
    foreach($Books2 as  $book2)
    {
    echo $book2."</br>";
    } 
    ?>
    </li>
</body>
</html>