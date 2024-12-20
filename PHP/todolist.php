<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
</head>
<body>
<h1>To-Do List</h1>
    <form method="get">
        <input type="text" name="task" placeholder="Enter a new task"><br><br>
        <button type="submit" name="add">Add Task</button><br><br>
        <button type="submit" name="search">Search Task</button><br><br>
        <button type="submit" name="delete">Delete Task</button><br><br>
    </form>
    <?php
        $conn =new mySQLi('localhost','root','','to_do_list');
        if(!$conn){
            echo("Connection failed");
        }
        else{
            echo("Connection Established");
        }
    ?>
    <!-- Creating Database -->
    <?php
    /*
    $sql="CREATE DATABASE to_do_list";
    if($conn->query($sql)===true)
    {
        echo("DataBase Created");
    }
    else{
        echo("DataBase not created");
    }*/
    ?>
     <!-- Creating Table -->
    <?php
    /*
    $sql="CREATE TABLE tasks(ID INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL)";
    if($conn->query($sql)===true)
    {
        echo("Table Created");
    }
    else{
        echo("Table not created");
    }*/
    ?>
    <h1>Adding Task</h1>
    <?php
    
    if (isset($_GET['add'])) {
    $task = $_GET['task'];
    if (!empty($task)) {
        $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
    }
}
?>
<h1>Deleting Task</h1>
<?php
if (isset($_GET['delete'])) {
    $delete = $_GET['task'];
    $delete = $conn->real_escape_string($delete);
    $result = $conn->query("DELETE FROM tasks WHERE task = '$delete'");

    if ($result) {
        echo "Task '$delete' deleted successfully.";
    } else {
        echo "Error: Could not delete task.";
    }
}
?>
<h1>Searching task</h1>
<?php
if (isset($_GET['search'])) {
    $search = $_GET['task'];
    $result = $conn->query("SELECT * FROM tasks WHERE task LIKE '%$search%'");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo($row['task'])."<br>";
        }
    } else {
        echo "No tasks found matching your search.";
    }
}
?>
</body>
</html>