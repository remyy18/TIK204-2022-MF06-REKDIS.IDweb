<!-- <?php
session_start();
require_once '../functions/MY_model.php';
require_once '../functions/config.php';

$url = 'http://localhost/master/';
if (isset($_SESSION['user'])) {
  echo '<script>document.location.href="' . $url . '"</script>';
  exit;
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

  if (mysqli_num_rows($query) === 1) {
    $row = mysqli_fetch_assoc($query);

    if (password_verify($password, $row['password'])) {
      $_SESSION['user'] = $row;
      echo '<script>document.location.href="' . $url . '"</script>';
      exit;
    }
  }
}
?> -->


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Login Page</title>
  <link rel="apple-touch-icon" href="../../assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/vendors/css/vendors.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/colors.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/themes/dark-layout.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/themes/semi-dark-layout.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/pages/authentication.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <!-- END: Custom CSS-->

  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, input, button {
    font-family: Poppins, sans-serif;
}
.content {
  display: flex ;
  justify-content: center;
  align-items: center;
}

.inputan {
  width: 100%;
}
form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
form span {
    border: 1px solid rgb(134, 134, 134);
    padding: 0.5rem 1rem;
    border-radius: 6px;
    display: flex;
    gap: 1rem;
    align-items: center;
}
form span i {
    color: rgb(134, 134, 134);
}
form input {
    border: none;
    width: 100%;
    outline: none;
    padding: 4px;
    font-size: 1rem;
}
form button {
    padding: 0.5rem 1rem;
    cursor: pointer;
    border-radius: 6px;
    border: none;
    background-color: #6DAFA7;
    font-weight: bold;
    font-size: 1rem;
    color: #fff;
    box-shadow: 2px 2px 8px 0px #4d7c77;
    transition: 0.3s;
}
form button:hover {
    opacity: 0.8;
}

@media (max-width: 450px) {
    .gambar {
        display: none;
    }
    .registrasi {
        width: 100%;
    }
    form {
        width: 80%;
    }
}
  </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
              <div class="row m-0 content">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                  <img src="assets/y.png" alt="branding logo" width="600">
                </div>
                <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2 inputan">
                    <div class="card-header pb-1">
                      <div class="card-title">
                        <h4 class="mb-0" style="margin-bottom: 18px;font-size:26px">Login</h4>
                      </div>
                    </div>
                    <p class="px-2" style="margin-bottom: 10px;">Selamat datang di REKDIS.ID</p>
                    <div class="card-content">
                      <div class="card-body pt-1">
                        <form action="" method="post">
                          <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input type="text" name="username" class="form-control" id="user-name" placeholder="Username" required>
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </fieldset>

                          <fieldset class="form-label-group position-relative has-icon-left">
                            <input type="password" class="form-control" name="password" id="user-password" placeholder="Password" required>
                            <div class="form-control-position">
                              <i class="feather icon-lock"></i>
                            </div>
                          </fieldset>
                          <!-- <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> -->
                          <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
  <!-- END: Content-->


  <!-- BEGIN: Vendor JS-->
  <script src="../../assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../assets/js/core/app-menu.js"></script>
  <script src="../../assets/js/core/app.js"></script>
  <script src="../../assets/js/scripts/components.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>