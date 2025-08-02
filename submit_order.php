<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $items = isset($_POST['items']) ? implode(', ', $_POST['items']) : '';
    $pickup_date = $_POST['pickup_date'];

    $stmt = $pdo->prepare("INSERT INTO orders (name, email, phone, items, pickup_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $items, $pickup_date]);

    header("Location: index.php?success=1");
    exit;
} else {
    header("Location: index.php");
    exit();
}
