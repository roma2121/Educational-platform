<?php 
require_once 'header.php';
require_once 'logic/db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'parts/head.php'; ?>
</head>
<body>
<center>
<a  href="https://vk.com/21roma2121"><img src="img/kartinka.png" width="1000" height="230" class="img-fluid"></a>
</center>
<center>
<h1>Данный раздел содержит готовые варианты решения к заданиям,<br> которые оставили до вас другие студенты</h1>
</center>
  <?php include_once 'logic/print_tasks.php'; ?>
</body>
</html>
<?php require ('parts/footer.php')?>