<?php
require_once 'db.php';

$sql = 'SELECT id, title FROM tasks ORDER BY id DESC LIMIT 1';
$result = $pdo->query($sql);
$task = $result->fetch(PDO::FETCH_OBJ);
?>

<h4>
  <a href=<?php echo 'tasks.php#task_' . $task->id; ?> ><?php echo $task->title; ?></a>
</h4>