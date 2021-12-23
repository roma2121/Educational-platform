

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'parts/head.php'; ?>
</head>
<body>
  <?php include_once 'header.php'; ?>

  <?php if( isset($_SESSION['user_login']) ): ?>

    <h1>Добавить задание</h1>
    <form name="newTask">
      <label>Описание задания</label>
      <input type="text" name="newTask__title" value="">
      <br>
      <label>Количество ответов</label>
      <input type="number" name="newTask__duration" value="">
      <br>
      <label>Раздел задания</label>
      <select name="newTask__genres[]" multiple>
        <?php include_once 'logic/get_genres.php'; ?>
      </select>
      <br>
      <button type="submit">Добавить</button>
    </form>

  <?php else: ?>
    <?php include_once 'parts/not_auth.php'; ?>
  <?php endif; ?>


</body>
</html>

<?php require ('parts/footer.php') ?>