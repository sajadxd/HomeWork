<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 2</title>
</head>
<body>
    <h1>
    <?php echo "do you read song of ice and fire ? "?>
    </h1>
    <form method="post" id="Q&A" action="<?php  echo $_SERVER['PHP_SELF'] ?>">
<input type="submit" value="yes" name="True1">
<input type="submit" value="No" name="False1">
    </form>
    <?php
    session_start();
    if(isset($_POST["True1"]))
    {
     $_SESSION["CNT"] += 1;
    }
    else if(isset($_POST["False1"]))
    {
      $_SESSION["CNTF"] += 1;
    }
    echo "The number of user who read the Song of the ice and fire " .' '. $_SESSION["CNT"];
    echo"</br>";
    echo "The number of user who did not read the Song of the ice and fire " .' '. $_SESSION["CNTF"];
    ?>
</body>
</html>