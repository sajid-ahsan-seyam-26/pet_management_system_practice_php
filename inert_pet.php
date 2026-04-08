<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_name = mysqli_real_escape_string($conn, $_POST['pet_name']);
    $pet_type = mysqli_real_escape_string($conn, $_POST['pet_type']);
    $breed = mysqli_real_escape_string($conn, $_POST['breed']);
    $age = (int) $_POST['age'];
    $owner_name = mysqli_real_escape_string($conn, $_POST['owner_name']);
    $owner_phone = mysqli_real_escape_string($conn, $_POST['owner_phone']);
        $sql = "INSERT INTO pets (pet_name, pet_type, breed, age, owner_name, owner_phone)
            VALUES ('$pet_name', '$pet_type', '$breed', '$age', '$owner_name', '$owner_phone')";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_pets.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
    