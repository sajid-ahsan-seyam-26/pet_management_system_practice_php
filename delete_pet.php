<?php
require 'db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id <= 0) {
    die('Invalid pet ID.');
}

$stmt = $conn->prepare('DELETE FROM pets WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();

header('Location: view_pets.php?message=Pet deleted successfully');
exit();
