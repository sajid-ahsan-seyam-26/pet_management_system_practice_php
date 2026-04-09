<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: add_pet.php');
    exit();
}

$pet_name = trim($_POST['pet_name'] ?? '');
$pet_type = trim($_POST['pet_type'] ?? '');
$breed = trim($_POST['breed'] ?? '');
$age = (int) ($_POST['age'] ?? 0);
$owner_name = trim($_POST['owner_name'] ?? '');
$owner_phone = trim($_POST['owner_phone'] ?? '');

if ($pet_name === '' || $pet_type === '' || $breed === '' || $owner_name === '' || $owner_phone === '' || $age < 0) {
    die('Invalid form data. Please go back and fill all fields correctly.');
}

$stmt = $conn->prepare('INSERT INTO pets (pet_name, pet_type, breed, age, owner_name, owner_phone) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param('sssiss', $pet_name, $pet_type, $breed, $age, $owner_name, $owner_phone);
$stmt->execute();
$stmt->close();

header('Location: view_pets.php?message=Pet added successfully');
exit();
