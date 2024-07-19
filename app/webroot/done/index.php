<?php include '../functions.php'; ?>

<?php
$id = $_GET['id'];
concluded_item($id);
header('Location: ../index.php');
exit;
?>