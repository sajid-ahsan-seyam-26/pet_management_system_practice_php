<?php
require 'db.php';

$result = $conn->query('SELECT * FROM pets ORDER BY id DESC');
$message = $_GET['message'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container table-container">
        <div class="header-row">
            <h2>All Pets</h2>
            <a href="add_pet.php" class="btn small-btn">+ Add Pet</a>
        </div>

        <?php if ($message !== ''): ?>
            <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pet Name</th>
                        <th>Pet Type</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Owner Name</th>
                        <th>Owner Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= (int) $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['pet_name']) ?></td>
                                <td><?= htmlspecialchars($row['pet_type']) ?></td>
                                <td><?= htmlspecialchars($row['breed']) ?></td>
                                <td><?= (int) $row['age'] ?></td>
                                <td><?= htmlspecialchars($row['owner_name']) ?></td>
                                <td><?= htmlspecialchars($row['owner_phone']) ?></td>
                                <td class="actions">
                                    <a href="edit_pet.php?id=<?= (int) $row['id'] ?>" class="btn action-btn">Edit</a>
                                    <a href="delete_pet.php?id=<?= (int) $row['id'] ?>" class="btn danger-btn" onclick="return confirm('Are you sure you want to delete this pet?');">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="empty-state">No pet records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
