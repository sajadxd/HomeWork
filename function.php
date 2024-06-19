<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in php</title>
</head>
<?php
$Books =
[
[
    "Name" => "Dughter Of The Moon Goddes",
    "Author" => "Sue Lynn Tan",
    "Genres" => "Romace"
],
[
    "Name" => "Song Of The Ice And Fire",
    "Author" => "Geroge R.R. Martin",
    "Genres" => "Fantasy"
],
[
     "Name" => "The Lord of the Rings",
     "Author" => "John Ronald"
]
];
//----------------------------------------
function FilterAuthor($Books)
{
$FilterA = [];
foreach($Books as $book)
{
if ($book["Author"] === $_POST["FilterW"])
{
$FilterA [] = $book["Name"];
}
}
return $FilterA;
}
//------------------------------------------
function FilterGenres($Books)
{
$FilterA = [];
foreach($Books as $book)
{
if ($book["Genres"] === $_POST["FilterW"])
{
$FilterA [] = $book["Name"];
}
}
return $FilterA;
}
//------------------------------------------
function FilterName($Books)
{
$FilterA = [];
foreach($Books as $book)
{
if ($book["Name"] === $_POST["FilterW"])
{
$FilterA [] = $book["Name"];
}
}
return $FilterA;
}
//------------------------------------------
if (isset($_POST["A"]))
{
foreach(FilterAuthor($Books) as $book){
   
   //--
    echo $book.' '."</br>" ; 
}
}
//------------------------------------------
else if (isset($_POST["G"]))
{
foreach(FilterGenres($Books) as $book){
    echo $book.' '."</br>" ; 
}
}
//------------------------------------------
else if (isset($_POST["N"]))
{
foreach(FilterName($Books) as $book){
    echo $book.' '."</br>" ; 
}
}
?>
<body>
    <form method="POST" id="Filter" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<label>
    <input type ="text" name="FilterW" placeholder="Filter">
</label>
<input type="submit" value="Filter for Author" Name="A">
<input type="submit" value="Filter for Genres" Name="G">
<input type="submit" value="Filter for Name" Name="N"> 
    </form>
</body>
</html>