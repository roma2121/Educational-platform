<?php
require_once 'db.php';
$sql = 'SELECT tasks.id, tasks.title, tasks.answer, GROUP_CONCAT(genres.genre SEPARATOR ", ") AS genres
FROM tasks INNER JOIN tasks_genres
ON tasks.id = tasks_genres.task_id
INNER JOIN genres
ON tasks_genres.genre_id = genres.id
GROUP BY tasks.id, tasks.title, tasks.answer';
$result = $pdo->query($sql);
while( $task = $result->fetch(PDO::FETCH_OBJ) ):
?>
<div class="container mt-5 d-flex h-100 justify-content-center align-items-center p-0">
  <div class="task__container" id=<?php echo 'task_' . $task->id; ?> data-task-id=<?php echo $task->id; ?>>
    <div class="card border-secondary mb-3" style="max-width: 40rem;">
      <div class="card-header"><h4 class="task__genre"><?php echo $task->genres; ?></h4></div>
      <div class="card-body text-secondary">
        <h5 class="card-title"><h3 class="task__title"><?php echo $task->title; ?></h3></h5>
        <p class="card-text"><h4 class="task__answer">Ответ: <?php echo $task->answer; ?></h4></p>
      </div>
    </div>
  </div>
  </div>
  <hr>
<?php endwhile; ?>