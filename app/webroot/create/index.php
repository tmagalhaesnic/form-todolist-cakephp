<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

    <h1>Create New Item</h1>

    <form action="/create/" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <input type="submit" value="Create">
        <a href="../" class="cancel-button">Cancel</a>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        create_item($name, $description);
        header('Location: /');
        exit;
    }
    ?>
</body>
</html>
