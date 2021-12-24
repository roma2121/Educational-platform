<?php
require "logic/db.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body {
        padding: 20px;
    }
</style>  
<body>
<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" ><a class="navbar-brand" href="index.php"><img src="img/logo.png" width="334" height="100" alt=""></div></a>
            <div class="col-md-6 ">
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
                                <div class="row justify-content-centre">
                                    <button type="submit" class="btn btn-primary btn-lg active ">Войти</button>
                                    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#loginModal">Еще не зарегистрированы, зарегистрируйтесь</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg active" data-bs-toggle="modal" data-bs-target="#loginModal">Регистрация</button>
            <!-- Login Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Форма регистрации</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="logic/reg.php" method="post">
                                <p>Заполните поля для регистрации на сайте</p>
                                <p >Логин<br /><input type="text" name="login"></p>
                                <p>Пароль<br /><input type="password" name="pwd"></p>
                            <div class="modal-footer">
                                <div class="row justify-content-centre">
                                    <button type="submit" class="btn btn-primary btn-lg active">Зарегистрироваться</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
                    <div class="row justify-content-end">
                        <div class='col-6'>
                            <script async src="https://cse.google.com/cse.js?cx=c2160d55136594f7d"></script>
                            <div class="gcse-search"></div>
                        </div> 
                    </div>
                </div>
        </div>
    </div> 
<script src="logic/js/bootstrap.bundle.min.js"></script>
</nav>
</body>
</html>

