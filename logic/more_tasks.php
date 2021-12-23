<?php
require_once 'db.php';

$offset = (int) $_POST['last_shown_task'];

$sql = 'SELECT id, title FROM tasks ORDER BY id DESC LIMIT :lastShown, 1';
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':lastShown', $offset, PDO::PARAM_INT);

$stmt->execute();

$task = $stmt->fetch(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($task);