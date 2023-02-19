<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maps Pin Drop</title>
    <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    <nav id="navbar">
        <div class="navbar-left">
            <button id="navbar-btn" class="navbar-button">
                <div id="nav-icon3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
        <div class="navbar-right">
        </div>
    </nav>
    <div class="menu">
        <ul class="menu-items">
            <li class="menu-item-wrapper"><i class="fas fa-home"></i><a class="menu-item" href="./index.php">Home</a></li>
            <li class="menu-item-wrapper"><i class="fas fa-map"></i><a class="menu-item" href="./maps.php">Maps</a></li>
            <li class="menu-item-wrapper"><i class="fas fa-book"></i><a class="menu-item" href="./index.php#bla">Product</a></li>
        </ul>
        <div class="menu-bc"></div>
    </div>
    <!-- partial:index.partial.html -->
    <div class="h">
        <h1>Our Store Location</h1>
    </div>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.1530746996713!2d109.19842704186237!3d-7.564733073357218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65427e0c116ae5%3A0x2e070ccd862118b4!2s%22Cahaya%20Mas%22%20KASUR%20%26%20KARPET!5e0!3m2!1sen!2sid!4v1663238621350!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="fut">
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social_icon">
                <li><a href="#">
                        <ion-icon name="logo-facebook"></i></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-twitter"></i></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-instagram"></i></ion-icon>
                    </a></li>
            </ul>

            <p>Copyright &copy 2022 - Cahaya Cerdas | All Rights Reserved</p>
        </footer>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="./script.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>

</body>

</html>