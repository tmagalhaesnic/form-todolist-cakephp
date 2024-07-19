<?php include '../functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Update Item</h1>

    <?php
    $id = $_GET['id'];
    $conn = connect_to_database();
    $query = "SELECT * FROM items WHERE id=$id";
    $result = $conn->query($query);
    $item = $result->fetch_assoc();
    ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $item['name']; ?>">

        <label for="description">Description:</label>
        <textarea name="description" id="description"><?php echo $item['description']; ?></textarea>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Update">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        update_item($id, $name, $description);
        header('Location: /');
        exit;
    }
    ?>
</body>
</html>