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
  <?php include_once 'logic/print_tasks.php'; ?>
</body>
</html>
<?php require ('parts/footer.php')?>