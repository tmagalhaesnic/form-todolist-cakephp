<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        .form-create {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 0 auto;
        }
        
        .form-create label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .form-create input[type="text"],
        .form-create textarea,
        .form-create select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box; /* Para incluir padding e border no width */
        }
        
        .form-create input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .form-create input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .cancel-button {
            background-color: #ccc;
            color: #333;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-left: 10px;
        }
        
        .cancel-button:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

    <h1>Create New Item</h1>

    <form class="form-create" action="/create/" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="priority">Prioridade:</label>
        <select id="priority" name="priority">
            <option value="Leve">Leve</option>
            <option value="Normal">Normal</option>
            <option value="Urgente">Urgente</option>
        </select>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <input type="submit" value="Create">
        <a href="../" class="cancel-button">Cancel</a>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
        create_item($name, $description, $priority);
        header('Location: /');
        exit;
    }
    ?>

</body>
</html>
