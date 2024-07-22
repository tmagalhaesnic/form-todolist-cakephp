<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>
    <div class="create-item">
        <a href="/create">New Item</a>
        <a href='read?id=$item[id]'>Read</a>
    </div>
    <ul class="todo-list">
        <?php
        $items = get_all_items();
        foreach ($items as $item) {
            echo "<li>";
            echo "<h2>$item[name] - $item[concluded]</h2>";
            echo "<h2>$item[priority]</h2>"; 
            echo "<p>$item[description]</p>"; 
            echo "<div class='actions'>";
            echo "<a href='update?id=$item[id]'>Update</a>";
            echo "<a href='delete?id=$item[id]'>Delete</a>";
            echo "<a href='done?id=$item[id]'>Done</a>";
            echo "</div>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>
