<?php
require "logic/db.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body {
        padding: 20px;
    }
</style>  
<body>
<nav>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6" ><a class="navbar-brand" href="index.php"><img src="img/logo.png" width="334" height="100" alt=""></div></a>
            <div class="col-md-6">
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
            <!-- Login Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(111 202 203);">
                            <h5 class="modal-title" id="loginModal">Login Here</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="partials/_handleLogin.php" method="post">
                                <div class="text-left my-2">
                                    <b><label for="username">Username</label></b>
                                    <input class="form-control" id="loginusername" name="loginusername" placeholder="Enter Your Username" type="text" required>
                                </div>
                                <div class="text-left my-2">
                                    <b><label for="password">Password</label></b>
                                    <input class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Your Password" type="password" required data-toggle="password">
                                </div>
                                 <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            <p class="mb-0 mt-1">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up now</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            </div> 
            </div>
            </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="logic/js/bootstrap.bundle.min.js"></script>
</nav>
</body>
</html>

