<?php
require_once 'db.php';
$task_answer = getNakedInput($_POST['newTask__answer']);
$task_title = getNakedInput($_POST['newTask__title']);
if( empty($task_answer) || empty($task_title) || !isset($_POST['newTask__genres']) ){
  die('Пожалуйста, заполните все поля');
}
try{
  $pdo->beginTransaction();
  $sql_task = 'INSERT INTO tasks(title, answer) VALUES(:title, :answer)';
  $params = [
    ':title' => $task_title,
    ':answer' => $task_answer
  ];
  $stmt_task = $pdo->prepare($sql_task);
  $stmt_task->execute($params);
  $last_id = $pdo->lastInsertId();
  $genre_param = [];
  $rows = [];
  foreach($_POST['newTask__genres'] as $genre){
    array_push($genre_param, $last_id, $genre);
    $str = '(?, ?)';
    array_push($rows, $str);
  }
  $sql_genres = 'INSERT INTO tasks_genres(task_id, genre_id) VALUES' . implode($rows, ',') ;
  $stmt_genres = $pdo->prepare($sql_genres);
  $stmt_genres->execute($genre_param);
  $pdo->commit();
  echo 'Новое задание успешно добавлено!';
}catch(PDOException $e){
  echo 'Во время добавления задания произошла ошибка: ' . $e->getMessage();
  $pdo->rollBack();
}
function getNakedInput($input){
  return htmlentities(trim($input));
}