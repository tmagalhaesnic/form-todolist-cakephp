<?php include '../functions.php'; ?>

<?php
$id = $_GET['id'];
delete_item($id);
header('Location: ../index.php');
exit;
?>