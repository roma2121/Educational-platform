<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shourtcut.icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4" ><img src="../../img/logo.png" width="334" height="100" alt=""></div>
                <div class="col-md-8">
                    <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Главная</a>
                    <a href="about.php"  class="btn btn-primary btn-lg active">О нас</a>
                    <a href="tasks.php"  class="btn btn-primary btn-lg active">Решения</a> 
                    <?php if( isset($_SESSION['user_login']) ): ?>
        <a href="control.php"  class="btn btn-primary btn-lg active">Добавить задание</a> 
     
        <a href="logic/logout.php"  class="btn btn-primary btn-lg active">Выйти</a>



        
    <?php else: ?>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg active" data-bs-toggle="modal" data-bs-target="#exampleModal">Вход</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Форма авторизации</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="logic/auth.php" method="post">
                                <p>Заполните поля для входа на сайт</p>
                                <p >Логин<br /><input type="text" name="login"></p>
                                <p>Пароль<br /><input type="password" name="pwd"></p>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-lg active">Войти</button>  Еще не зарегистрированы,  </br><a href= "signup.php">зарегистрируйтесь</a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<a href="signup.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Регистрация</a>






    <?php endif; ?>

                </div>

            </div>
        </div> 

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>