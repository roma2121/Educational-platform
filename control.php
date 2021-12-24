<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'parts/head.php'; ?>
</head>
<body>
  <?php include_once 'header.php'; ?>
  <?php if( isset($_SESSION['user_login']) ): ?>
    <div class="container mt-4">
<div class="row">
<div class="col">
<center>
<h1>Добавить задание</h1>
</center>
</div>
</div>
</div>
<div class="container">
<div class="row g-2">
  <form name="newTask">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Описание задания:</label>
      <textarea type="text" class="form-control" name="newTask__title" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Ответ:</label>
      <input type="text" name="newTask__answer" class="form-control" id="exampleFormControlInput1">
    </div>
    <div>
    <select class="form-select" name="newTask__genres[]" aria-label="Default select example">
      <option selected>Нажмите для выбора предмета<?php include_once 'logic/get_genres.php'?></option>
    </select>
    </div>
    <p class="mt-3">
    <button type="submit" class="btn btn-primary btn-lg">Добавить</button>
  </p>
  </form>
</div>
  <?php else: ?>
    <?php include_once 'parts/not_auth.php'; ?>
  <?php endif; ?>
</body>
</html>
<?php require ('parts/footer.php') ?>