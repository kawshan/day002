<?php
$name =$_GET['txtname']
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<form>-->
<!---->
<!--    <label for="txtName">enter your name</label>-->
<!--    <input name="txtname">-->
<!--    <input type="reset" value="clear">-->
<!--    <input type="submit" value="submit">-->
<!---->
<!--</form>-->
<h1>my name is <?php echo($name);?></h1>
</body>
</html>