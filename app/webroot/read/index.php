<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="todo-list">
    <h1>To-Do List Items</h1>
    <ul class = "form-create">
        <?php
        $items = get_all_items();
        foreach ($items as $item) {
            echo "<li>";
            echo "<h2>$item[name] - $item[concluded]</h2>";
            echo "<p>$item[description]</p>";
            echo "</li>";
        }
        ?>
        <a href="../">Back to Index</a>
    </ul>
</div>

</body>
</html>