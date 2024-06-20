<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in php</title>
</head>
<body>
    <form method="POST" id="Filter" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<label>
    <input type ="text" name="Filtermin" placeholder="from">
</label>
<label>
    <input type ="text" name="Filtermax" placeholder="to">
</label>
<input type="submit" value="Filter" Name="A">
    </form>
    <?php
$Books =
[
[
    "Name" => "Dughter Of The Moon Goddes",
    "Author" => "Sue Lynn Tan",
    "Genres" => "Romace",
    "rdate" => "2011"
],
[
    "Name" => "Song Of The Ice And Fire",
    "Author" => "Geroge R.R. Martin",
    "Genres" => "Fantasy",
    "rdate" => "2000"
],
[
     "Name" => "The Lord of the Rings",
     "Author" => "John Ronald",
     "Genres" => "Fantasy",
     "rdate" => "1998"
]
];
//----------------------------------------
$BooksFilter = Array_Filter($Books,function($book)
{
return $book["rdate"] >= $_POST["Filtermin"]  && $book["rdate"] <=$_POST["Filtermax"] ;
});
//------------------------------------------
if (isset($_POST["A"]))
{
foreach($BooksFilter as $book)
{
echo $book["Name"]." "."</br>"; 
}

}
?>
</body>
</html>