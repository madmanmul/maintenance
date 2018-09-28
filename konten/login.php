<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysql_query("select * from user
                      where username='$username'
                      and password=sha1('$password')");
  $available = mysql_num_rows($query);
  if($available > 0) {
    $sesi = mysql_fetch_assoc($query);
    $_SESSION['username'] = $sesi[username];
    $_SESSION['uid'] = $sesi[uid];
    $_SESSION['hak'] = $sesi[hak];


    header('Location: index.php');
  } else {
    $pesan = "<div class='alert alert-danger'>LOGIN GAGAL T_T</div>";
  }
}
 ?>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4 text-center">
          <div class="card">
            <div class="card-header" style="background-color: teal;">
              <h1 class="h3 mb-3 font-weight-normal text-light">Silakan masuk.</h1>
            </div>

            <div class="card-body">
              <?php print $pesan; ?>
              <form action="" method="post" class="form-login">
            <div class="form-group">
              <input class="form-control" type="text" name="username" placeholder="Username" requied autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <button name="login" type="submit" class="btn btn-xs btn-twice">MASUK</button>
            </div>
          </form>
            </div>
          </div>

        </div>
      </div>
  </div>
  </section>
