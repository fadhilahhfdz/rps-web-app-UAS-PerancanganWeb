<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="../login/login.css">
    <style>
    .card {
        width: 500px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    </style>
  </head>
  <body class="bg-primary">
    <div class="container d-md-flex position-absolute top-50 start-50 translate-middle justify-content-center">
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="card-title pt-2 pb-2 text-center"><strong>Register</strong></h4>
          <img src="../img/amikom.png" alt="" width="200px" class="mx-auto d-block">
          <hr>
          <?php echo form_open('login/register'); ?>
            <div class="mb-3">
              <label for="username" class="form-label">Username :</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password :</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password :</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" value="Register" class="btn btn-primary">Register</button>
            </div>
            <p class="text-center mt-2">Sudah punya akun? silahkan <a href="<?php echo base_url('index.php/login/login') ?>">Login</a></p>
            <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </body>
</html>