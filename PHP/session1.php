<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <h1><?php
    $_SESSION['counter'] +=1;
    echo($_SESSION['counter']);
    ?>
</body>
</html>