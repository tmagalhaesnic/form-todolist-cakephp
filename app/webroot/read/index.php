<?php include '../functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List Items</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>To-Do List Items</h1>

    <ul>
        <?php
        $items = get_all_items();
        foreach ($items as $item) {
            echo "<li>";
            echo "<h2>$item[name]</h2>";
            echo "<p>$item[description]</p>";
            echo "<p>$item[concluded]</p>";
            echo "</li>";
        }
        ?>
    </ul>

    <a href="../">Back to Index</a>
</body>
</html>