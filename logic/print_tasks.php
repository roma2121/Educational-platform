<?php
require_once 'db.php';

$sql = 'SELECT tasks.id, tasks.title, tasks.duration, GROUP_CONCAT(genres.genre SEPARATOR ", ") AS genres
FROM tasks INNER JOIN tasks_genres
ON tasks.id = tasks_genres.task_id
INNER JOIN genres
ON tasks_genres.genre_id = genres.id
GROUP BY tasks.id, tasks.title, tasks.duration';

$result = $pdo->query($sql);

while( $task = $result->fetch(PDO::FETCH_OBJ) ):
?>
  <div class="task__container" id=<?php echo 'task_' . $task->id; ?> data-task-id=<?php echo $task->id; ?>>
    <h3 class="task__title"><?php echo $task->title; ?></h3>
    <h4 class="task__genre"><?php echo $task->genres; ?></h4>
    <h4 class="task__duration">Количество ответов: <?php echo $task->duration; ?></h4>

    <?php if( isset($_COOKIE['watched']) && array_key_exists($task->id, $_COOKIE['watched']) ): ?>
      <button class="task__watched task__watched_active">(Смотрел)</button>
    <?php else: ?>
      <button class="task__watched">(Не смотрел)</button>
    <?php endif; ?>

    <button type="button" class="task__del">Удалить</button>

  </div>
  <hr>
<?php endwhile; ?>