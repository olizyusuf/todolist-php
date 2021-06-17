<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Php mysql</title>
</head>

<body>
    <h1>Todo List PHP Native</h1>

    <a href="add.php">Add Task</a>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Task</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("config.php");
            $sql = "SELECT * FROM task";
            $query = mysqli_query($db, $sql);
            $number = 1;

            while ($task = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td> " . $number++ . "</td>";
                echo "<td> " . $task['task'] . "</td>";
                echo "<td> ";
                echo "<a href='deletetask.php?id=" . $task['id'] . "'>Selesai</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>