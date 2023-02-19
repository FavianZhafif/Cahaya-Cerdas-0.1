<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Detail Product</title>
  <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <div class="bg-loader">
    <div class="loader"></div>
  </div>
  <!-- partial:index.partial.html -->
  <div class="container-fluid">
    <div class="cart">
      <div class="back"><a href="./index.php#bla"><i class="fa fa-arrow-left"></i></a></div>
      <div class="row row1">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE br_id='$_GET[kd]'");
        $data  = mysqli_fetch_array($query);
        ?>
        <div class="col-md-5">
          <img src="<?php echo "upload/" . $data['br_gbr1']; ?>" width="100%" id="ProductImg">
          <div class="small-imgs">
            <img src="<?php echo "upload/" . $data['br_gbr1']; ?>" width="100%" class="small-img">
            <img src="<?php echo "upload/" . $data['br_gbr2']; ?>" width="100%" class="small-img">
            <img src="<?php echo "upload/" . $data['br_gbr3']; ?>" width="100%" class="small-img">
            <img src="<?php echo "upload/" . $data['br_gbr4']; ?>" width="100%" class="small-img">
          </div>
        </div>
        <div class="col-md-7">
          <h1 class="product-title"><?php echo $data['br_nm']; ?></h1>
          <div class="price">
            <span>Rp.<?php echo number_format($data['br_hrg'], 2, ",", "."); ?></span>
          </div>
          <div id="product" class="product-inf">
            <ul>
              <li class="active"><a href="#Description">Product Description</a></li>
              <li><a href="#Details">Product Details</a></li>
            </ul>
            <div class="tabs-content">
              <div id="Description">
                <p><?php echo $data['ket']; ?></p>
              </div>
              <div id="Details">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque sequi eaque quisquam corrupti reprehenderit exercitationem iusto asperiores quae commodi quo?</p>
              </div>
            </div>
          </div>
          <div class="buttons">
            <div class="row">
              <div class="col-md-12">
                <?php
                if (isset($_POST['kirim3'])) {
                  echo "<script>window.location = 'https://api.whatsapp.com/send?phone=+6285327228234&text=Order%20*$data[br_nm]*%20Dengan%20Harga%20*$data[br_hrg]*%20Sejumlah%20*1*%0A%0ASilahkan%20Isi%20Kelengkapan%20dibawah%20ini%0ANama%20%20%20%20%20%3A%0AAlamat%20%20%20%3A%0ANo%20Telp%20%20%3A%0ABank%20%20%20%20%20%3A%0ANama%20Rek%20%3A%0ANo%20Rek%20%20%20%3A%0A%0A_*Note%3A%20apabila%20ada%20tambahan%20bisa%20di%20tuliskan%20di%20atas%20form_%20&source=&data='</script>";
                }
                ?>
                <form method="post" action="">
                  <button class="custom-btn" name="kirim3" type="submit">Order Via <i class="fa fa-whatsapp"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  <!-- BOOTSTRAP JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>

  <script src="script.js"></script>
  <!-- partial -->
  <script src="./script.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>

</body>

</html>