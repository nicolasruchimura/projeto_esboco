<?php
include 'config.php';

$sql = "SELECT category, SUM(amount) as total FROM expenses GROUP BY category";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
