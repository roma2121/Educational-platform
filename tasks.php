<?php  
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'parts/head.php'; ?>
</head>
<body>

  <?php if( isset($_SESSION['user_login']) ): ?>

    <h3>Всего просмотрено заданий: <span id="watched-count">
      <?php
        if( isset($_COOKIE['watched']) ):
          echo count($_COOKIE['watched']);
        else:
          echo 0;
        endif;
      ?>
    </span></h3>

    


  <?php endif; ?>


  <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text"><section id='tasks-sec'>
      <?php include_once 'logic/print_tasks.php'; ?>
    </section></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<section id='tasks-sec'>
      <?php include_once 'logic/print_tasks.php'; ?>
    </section>

</body>
</html>

<?php require ('parts/footer.php')?>