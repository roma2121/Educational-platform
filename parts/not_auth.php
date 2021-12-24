<h1>У вас нет доступа к этой странице.</h1>
<h2>Пожалуйста,  <button type="button" class="btn btn-primary btn-lg active" data-bs-toggle="modal" data-bs-target="#exampleModal">
  войдите
</button>
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
              <button type="submit" class="btn btn-primary btn-lg active">Войти</button>  
          Еще не зарегистрированы,  </br><a href= "signup.php">зарегистрируйтесь</a>
      </form>
      </div>
    </div>
  </div>
</div>
</div></a> в свой аккаунт или <a href="signup.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">зарегистрируйтесь</a>