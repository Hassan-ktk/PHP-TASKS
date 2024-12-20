<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with PHP</title>
</head>
<body>
    <h1>CRUD with PHP</h1>
    <?php
    $conn =new mySQLi('localhost','root','','student_data');
    if(!$conn){
        echo("Connection failed");
    }
    else{
        echo("Connection Established");
    }
    ?>
    <h2>Creating Database</h2>
   
    
<?php
    $sql="CREATE TABLE Students(ID int,
    FirstName varchar(255),
    LastName varchar(255),
    Program varchar(255),
    Semester int)";
    if($conn->query($sql)===true){
        echo("Table Created");
    }
    else{
        echo("Table not created");
    }
    ?> 
    <h1>Insering Data</h1>
    
    
    <h1>Reading Data</h1>
    <?php
   $sql = "SELECT * FROM Students";
   $table=$conn->query($sql);
   $row =$table->fetch_assoc();
   echo($row[ID].''.$row['FirstName']);
   echo($row[ID].''.$row['LastName']);

    ?>

<h1>Deleting Data</h1>
    <?php
     $sql = "DELETE FROM Students WHERE ID =1 * FROM Students";
    if($conn->query($sql)==true){
        echo("Data with ID 1 deleted!");
    }
    ?>
</body>
</html>