<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
  $statusPsn = $sesiData['status']['msg'];
  $jenisStatusPsn = $sesiData['status']['type'];
  unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Admin</title>
  <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="./style2.css">
</head>

<body>
  <section class="ftco-section" style="max-height: 100vh !important; ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="wrap">
            <?php
            if (!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])) {
              include 'user.php';
              $user = new User();
              $kondisi['where'] = array(
                'id' => $sesiData['userID'],
              );
              $kondisi['return_type'] = 'single';
              $userData = $user->getRows($kondisi);
              header("Location:daftar.php");
            ?>
            <?php } else { ?>
              <div class="img" style="background-image: url(images/bg-1.jpg);"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Sign In</h3>
                  </div>
                </div>
                <?php echo !empty($statusPsn) ? '<p class="text-white"' . $jenisStatusPsn . '">' . $statusPsn . '</p>' : ''; ?>
                <form action="akunuser.php" method="post" class="signin-form">
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" required>
                    <label class="form-control-placeholder" for="email">Email</label>
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="password" required>
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <button value="Login" name="loginSubmit" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                  </div>
                </form>
              </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>