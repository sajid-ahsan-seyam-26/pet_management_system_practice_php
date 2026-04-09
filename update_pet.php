<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: view_pets.php');
    exit();
}

$id = (int) ($_POST['id'] ?? 0);
$pet_name = trim($_POST['pet_name'] ?? '');
$pet_type = trim($_POST['pet_type'] ?? '');
$breed = trim($_POST['breed'] ?? '');
$age = (int) ($_POST['age'] ?? 0);
$owner_name = trim($_POST['owner_name'] ?? '');
$owner_phone = trim($_POST['owner_phone'] ?? '');

if ($id <= 0 || $pet_name === '' || $pet_type === '' || $breed === '' || $owner_name === '' || $owner_phone === '' || $age < 0) {
    die('Invalid update data.');
}

$stmt = $conn->prepare('UPDATE pets SET pet_name = ?, pet_type = ?, breed = ?, age = ?, owner_name = ?, owner_phone = ? WHERE id = ?');
$stmt->bind_param('sssissi', $pet_name, $pet_type, $breed, $age, $owner_name, $owner_phone, $id);
$stmt->execute();
$stmt->close();

header('Location: view_pets.php?message=Pet updated successfully');
exit();
