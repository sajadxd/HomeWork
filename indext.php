<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork</title>
</head>
<body>
    <h1>
        <?php
        echo "hellow world";
        echo"<br>";
        print "hellow world";
        echo"<br>";
        //or-----------------------
             $part1 = "Hellow";
             $part2 = "World";
             print $part1.' '.$part2;
             echo"<br>";
             //or ------------------
             $array = array
                 (
                  "text" => ["test"=>["part1" => $part1,"part2" =>$part2]]
                 );
                    echo $array["text"]["test"]["part1"].' '.$array["text"]["test"]["part2"]; // we can also use indexed arrays
        ?>
    </h1>
</body>
</html>