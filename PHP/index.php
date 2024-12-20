<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="first"/><br><br>
        <input type="text" name="last"/><br><br>
        <input type="submit" name="sub"/><br><br>
        <?php
            if(isset($_GET['sub']))
            {
                echo($_GET['first'].'<br>');
                echo($_GET['last'].'<br>');
            }
        ?>
</body>
</html>
