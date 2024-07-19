<?php
function connect_to_database() {
    $host = 'localhost';
    $user = '';
    $password = '';
    $database = '';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    return $conn;
}

function get_all_items() {
    $conn = connect_to_database();
    $query = 'SELECT * FROM items';
    $result = $conn->query($query);
    $items = [];

    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }

    return $items;
}

function create_item($name, $description) {
    $conn = connect_to_database();
    $query = "INSERT INTO items (name, description) VALUES ('$name', '$description')";
    $conn->query($query);
}

function update_item($id, $name, $description) {
    $conn = connect_to_database();
    $query = "UPDATE items SET name='$name', description='$description' WHERE id=$id";
    $conn->query($query);
}

function delete_item($id) {
    $conn = connect_to_database();
    $query = "DELETE FROM items WHERE id=$id";
    $conn->query($query);
}

function concluded_item($id) {
    $conn = connect_to_database();
    $concluded = 'concluido';
    $query = "UPDATE items SET concluded = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $concluded, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>