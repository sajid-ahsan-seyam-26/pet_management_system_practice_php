<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pet_management_system';

try {
    $conn = new mysqli($host, $username, $password);
    $conn->set_charset('utf8mb4');

    $conn->query("CREATE DATABASE IF NOT EXISTS `$database`");
    $conn->select_db($database);

    $createTableSql = "
        CREATE TABLE IF NOT EXISTS pets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            pet_name VARCHAR(100) NOT NULL,
            pet_type VARCHAR(100) NOT NULL,
            breed VARCHAR(100) NOT NULL,
            age INT NOT NULL,
            owner_name VARCHAR(100) NOT NULL,
            owner_phone VARCHAR(30) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
    ";

    $conn->query($createTableSql);
} catch (mysqli_sql_exception $e) {
    die('Database connection failed: ' . $e->getMessage());
}
