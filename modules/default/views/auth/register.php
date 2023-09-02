<?php
$this->view("include/header");
?>
  <body>
    <?php $this->view("include/menus") ?>
      <form action="register-action" method="post">
        <div class="mb-3 col-3">
          <label for="first_name" class="form-label">Adiniz</label>
          <input type="text" name="first_name" class="form-control" id="first_name"
          placeholder="Adiniz">
          <?= Flash::get("first_name") ?>
        </div>
        <div class="mb-3 col-3">
          <label for="last_name" class="form-label">Soyadiniz</label>
          <input type="text" name="last_name" class="form-control" id="last_name"
          placeholder="Soyadiniz">
          <?= Flash::get("last_name") ?>
        </div>
        <div class="mb-3 col-3">
          <label for="email" class="form-label">Email adresiniz</label>
          <input type="email" name="email" class="form-control" id="email"
          placeholder="name@example.com">
          <?= Flash::get("email") ?>
        </div>
        <div class="mb-3 col-3">
          <label for="birthday" class="form-label">Doğum tarixiniz</label>
          <input type="date" name="birthday" class="form-control" id="birthday">
          <?= Flash::get("birthday") ?>
        </div>
        <div class="mb-3 col-3">
          <label for="password" class="form-label">Parol</label>
          <input type="password" name="password" class="form-control" id="password"
          placeholder="*******">
          <?= Flash::get("password") ?>
        </div>
        <div class="mb-3 col-3">
          <label for="password_confirmation" class="form-label">Təkrar parol</label>
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
          placeholder="*******">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Qeydiyyatdan kec</button>
      </form>
    <?php $this->view("include/script") ?>
  </body>
</html>
