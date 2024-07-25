<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="todo-list-read">
    <h1>Items</h1>
        <?php
        $items = get_all_items();
        foreach ($items as $item) {

            echo "<li>";

            $concluded_class = '';
            switch ($item['concluded']) {
                case 'pendente':
                    $concluded_class = 'pendente';
                    break;
                case 'concluido':
                    $concluded_class = 'concluido';
                    break;
            }

            echo "<h2>$item[name] - <span class='$concluded_class'>$item[concluded]</span></h2>";

            $priority_class = '';
            switch ($item['priority']) {
                case 'Leve':
                    $priority_class = 'priority-leve';
                    break;
                case 'Normal':
                    $priority_class = 'priority-normal';
                    break;
                case 'Urgente':
                    $priority_class = 'priority-urgente';
                    break;
                default:
                    $priority_class = '';
                    break;
            }

            echo "<h2 class='$priority_class'>$item[priority]</h2>";
            echo "<p>$item[description]</p>";
            echo "<div class='actions'>";
            echo "</li>";
        }
        ?>
        <a href="../">Back to Index</a>
</div>

</body>
</html>