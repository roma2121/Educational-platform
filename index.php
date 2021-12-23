<?php
require_once 'header.php'; // подключаем шапку проекта
 // подключаем файл для соединения с БД
?>

<div class="container mt-4">
<div class="row">
<div class="col">
<center>
<h1>Добро пожаловать на наш сайт!</h1>
</center>
</div>
</div>
</div>

<!-- Если авторизован выведет приветствие -->
<!-- <?php if(isset($_SESSION['user_login'])) : ?>
	Привет, <?php echo $_SESSION['user_login']; ?></br>
        <a href="control.php">Добавить</a> -->

<!-- Пользователь может нажать выйти для выхода из системы -->
<!-- <a href="logic/logout.php">Выйти</a> файл logout.php создадим ниже -->
<!-- <?php endif ?> -->

<div class="content">
        <h2>Текст</h2>
        <h3>Текст</h3>
</div>


<?php require ('parts/footer.php') ?>