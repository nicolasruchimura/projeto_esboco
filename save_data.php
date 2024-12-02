<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    $sql = "INSERT INTO expenses (category, amount, description) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$category, $amount, $description]);

    echo json_encode(['success' => true]);
}
?>
