  <?php include '/opt/lampp/htdocs/beybala/auth_task/modules/default/views/include/header.php'; ?>
  <body>
    <?php include 'modules/default/views/include/menus.php' ?>
    <form action="register" method="post">
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Adiniz</label>
        <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1"
        placeholder="Adiniz">
      </div>
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Soyadiniz</label>
        <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1"
        placeholder="Soyadiniz">
      </div>
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Email adresiniz</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
        placeholder="name@example.com">
      </div>
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Doğum tarixiniz</label>
        <input type="date" name="birthday" class="form-control" id="exampleFormControlInput1"
        placeholder="name@example.com">
      </div>
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Parol</label>
        <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
        placeholder="*******">
      </div>
      <div class="mb-3 col-3">
        <label for="exampleFormControlInput1" class="form-label">Təkrar parol</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput1"
        placeholder="*******">
      </div>
      <button type="submit" name="submit" class="btn btn-success">Qeydiyyatdan kec</button>
    </form>
    <?php include '/opt/lampp/htdocs/beybala/auth_task/modules/default/views/include/script.php'; ?>
  </body>
</html>
