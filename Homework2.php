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
    <?php
    session_start();
    if(isset($_POST["True1"]))
    {
     echo $_SESSION["CNT"] += 0;
    }
    else
    {
     echo $_SESSION["CNTF"] += 0;
    }
    ?>
    <form method="post" id="Q&A" action="<?php  echo $_SERVER['PHP_SELF'] ?>">
<input type="submit" value="yes" name="True1">
<input type="submit" value="No" name="False1">
    </form>
</body>
</html>