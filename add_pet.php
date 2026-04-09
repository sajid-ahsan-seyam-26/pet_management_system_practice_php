<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container form-container">
        <h2>Add New Pet</h2>

        <form action="insert_pet.php" method="POST">
            <label for="pet_name">Pet Name</label>
            <input type="text" id="pet_name" name="pet_name" required>

            <label for="pet_type">Pet Type</label>
            <input type="text" id="pet_type" name="pet_type" required>

            <label for="breed">Breed</label>
            <input type="text" id="breed" name="breed" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="0" required>

            <label for="owner_name">Owner Name</label>
            <input type="text" id="owner_name" name="owner_name" required>

            <label for="owner_phone">Owner Phone</label>
            <input type="text" id="owner_phone" name="owner_phone" required>

            <button type="submit" class="btn save-btn">Save Pet</button>
        </form>

        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
