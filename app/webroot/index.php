<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>

    <a href="/create">Create New Item</a>

    <ul>
        <?php
        $items = get_all_items();
        foreach ($items as $item) {
            echo "<li>";
            echo "<h2>$item[name]</h2>";
            echo "<p>$item[description]</p>";
            echo "<a href='update?id=$item[id]'>Update</a>";
            echo "<a href='delete?id=$item[id]'>Delete</a>";
            echo "<a href='read?id=$item[id]'>Read</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>