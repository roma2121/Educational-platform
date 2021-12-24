<?php
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'parts/head.php'; ?>
</head>
<body>
<div class="container mt-4">
<div class="row">
<div class="col">
<center>
<h1>Добро пожаловать на наш сайт!</h1>
</center>
</div>
</div>
</div>
<div class="container">
    <div class="row g-4">
        <h4>В форме обратной связи Вы можете написать нам вопросы и предложения</h4>
        <form name="MyForm" action="http://gdzotromana/mail.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваше имя:</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Электронная почта:</label>
                <input type="text" name="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Тема сообщения:</label>
                <input type="text" name="sub" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Текст сообщения:</label>
                <textarea type="text" class="form-control" name="body" cols="1" rows="5"></textarea>
            </div>
                <p class="mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Отправить</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<?php require ('parts/footer.php') ?>