<?php
require 'db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id <= 0) {
    die('Invalid pet ID.');
}

$stmt = $conn->prepare('SELECT * FROM pets WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$pet = $result->fetch_assoc();
$stmt->close();

if (!$pet) {
    die('Pet not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container form-container">
        <h2>Edit Pet</h2>

        <form action="update_pet.php" method="POST">
            <input type="hidden" name="id" value="<?= (int) $pet['id'] ?>">

            <label for="pet_name">Pet Name</label>
            <input type="text" id="pet_name" name="pet_name" value="<?= htmlspecialchars($pet['pet_name']) ?>" required>

            <label for="pet_type">Pet Type</label>
            <input type="text" id="pet_type" name="pet_type" value="<?= htmlspecialchars($pet['pet_type']) ?>" required>

            <label for="breed">Breed</label>
            <input type="text" id="breed" name="breed" value="<?= htmlspecialchars($pet['breed']) ?>" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="0" value="<?= (int) $pet['age'] ?>" required>

            <label for="owner_name">Owner Name</label>
            <input type="text" id="owner_name" name="owner_name" value="<?= htmlspecialchars($pet['owner_name']) ?>" required>

            <label for="owner_phone">Owner Phone</label>
            <input type="text" id="owner_phone" name="owner_phone" value="<?= htmlspecialchars($pet['owner_phone']) ?>" required>

            <button type="submit" class="btn save-btn">Update Pet</button>
        </form>

        <a href="view_pets.php" class="back-link">Back to List</a>
    </div>
</body>
</html>
