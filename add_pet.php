<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container from-cointer">
        <h2>Add new pet</h2>
        <from action="insert_pet.php" method="POST">
            <label> pet name </label>
            <input type="text" name="pet_name" required>
            <label>Pet Type</label>
            <input type="text" name="pet_type" required>
            <label> Bread </label>
            <input type="text" name="breed" required>
            <label>Age </label>
            <input type="number" name="age" required>
            <label>owner name </label>
            <input type="text" name="owner_phone" required>
            <button type="submit" class="btn save-btn">Save Pet</button>
    </form>

    <a href="index.php" class="back-link">Back to Home</a>
</div>
</body>
</html>
            