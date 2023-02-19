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
<html>

<head>
    <title>Login Admin</title>
    <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.all.min.css">
    <style>
        body {
            background: url(https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fget.wallhere.com%2Fphoto%2Flandscape-white-black-monochrome-cityscape-architecture-symmetry-bridge-light-shape-line-darkness-track-urban-area-black-and-white-monochrome-photography-29098.jpg&f=1&nofb=1) no-repeat fixed;
            -webkit-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -o-background-size: 100% 100%;
            background-size: 100% 100%;
        }

        .bg-loader {
            background-color: #eee;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-loader .loader {
            width: 100px;
            height: 100px;
            border: 3px solid #fff;
            border-radius: 50%;
            border-top-color: #232323;
            border-right-color: #232323;
            border-bottom-color: #232323;
            animation: muter-muter .7s linear infinite;
        }

        @keyframes muter-muter {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body style="margin-top: 40px;">
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <div class="row mx-auto justify-content-center">
        <div class="col-lg-8 text-center" style=" padding-right: 10%; padding-left: 10%;
    padding-bottom: 20px; padding-top: 35px; background-color: #ffffff10; 
    backdrop-filter: blur(11px); -webkit-backdrop-filter: blur(11px);">
            <h3 class="text-white text-center mb-4">Create A New Account</h3>
            <?php echo !empty($statusPsn) ? '<p class="' . $jenisStatusPsn . '">' . $statusPsn . '</p>' : ''; ?>
            <form action="akunuser.php" method="post">
                <div class="form-floating">
                    <input style="font-weight: 500; border-radius: 15px; height: 60px;" type="text" class="form-control" name="username" placeholder="Username" required="">
                    <label style="font-weight: 500;" for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input style="font-weight: 500; border-radius: 15px;" type="email" class="form-control mt-2" name="email" placeholder="Email" required="">
                    <label style="font-weight: 500;" for="email">Email Address</label>
                </div>
                <div class="form-floating">
                    <input style="font-weight: 500; border-radius: 15px;" type="text" class="form-control mt-2" name="telp" placeholder="Phone Number" required="">
                    <label style="font-weight: 500;" for="telp">Phone Number</label>
                </div>
                <div class="form-floating">
                    <input style="font-weight: 500; border-radius: 15px;" type="password" class="form-control mt-2" name="password" placeholder="Password" required="">
                    <label style="font-weight: 500;" for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input style="font-weight: 500; border-radius: 15px;" type="password" class="form-control mt-2" name="confirm_password" placeholder="Confirm Password" required="">
                    <label style="font-weight: 500;" for="confirm_password">Confirm Password</label>
                </div>
                <input style="width: 60%;" class="btn-lg btn btn-primary mt-4" type="submit" name="daftarSubmit" value="Create Account"><br>
            </form>
            <p class="mt-3 mb-3 text-white">Copyright &copy 2022 - Cahaya Cerdas | All Rights Reserved</p>
        </div>
    </div>

    <script type="text/javascript" src="admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>
</body>

</html>