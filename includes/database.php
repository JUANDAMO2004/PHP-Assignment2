<?php
global $conn;
try {
    $conn = new PDO("mysql:host=localhost;dbname=assignment2", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>


