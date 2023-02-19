<?php
require_once("koneksi.php");
?>

<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "cahayacerdas";

global $koneksi;
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


//jika tombol save di klik
if (isset($_POST['bsave'])) {
  //data akan disimpan baru
  $simpan = mysqli_query($koneksi, "INSERT INTO pesan (namadepan, namabelakang, email, phone, pesan)
										  VALUES ('$_POST[tfnama]',
                           '$_POST[tlnama]', 
										  		 '$_POST[temail]',
                           '$_POST[tphone]', 
										  		 '$_POST[tpesan]')
										 ");
  if ($simpan) {
    echo "<script>
					alert('Pesan Telah Terkirim');
					document.location='index.php#mes'
				 </script>";
  } else {
    echo "<script>
					alert('Gagal Mengirim Pesan');
					document.location='index.php#mes'
				 </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">
  <title>Cahaya Cerdas</title>
  <link rel="shortcut icon" type="image/jpg" href="upload/logocc.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="./style.css">

<body>
  <div class="bg-loader">
    <div class="loader"></div>
  </div>
  <!-- partial:index.partial.html -->
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
  <header>
    <div class="header-left">
      <div class="header-row">
        <div class=header-row-center>
          <h3 class="header-row-title">Scroll Down</h3>
        </div>
        <div class="header-row-bottom">
          <button class="button-down">
            <i class="fas fa-arrow-down"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="header-right">
      <div class="header-img-wrapper">
        <div class="header-title-wrapper">
          <h1>Cahaya Cerdas</h1>
        </div>
        <div class="header-img-overlay"></div>
        <div class="player-button-wrapper">
          <a href='#' class='play-but'>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="213.7px" height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
              <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 " />
              <circle class='circle' id="XMLID_17_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="video-modal-wrapper">
    <iframe class="video-modal" src="#" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="krd">
    <div class="container center">
      <div class="card">
        <div class="imgBx">
          <img src="img/Gambar2.png" alt="img1">
        </div>
        <div class="contentBx">
          <div class="content">
            <h2>About Cahaya Cerdas</h2>
            <p>Toko Cahaya Cerdas beralamat di <strong>Jl.Pamugaran No.23 Rt01 / Rw05 Sampang, Cilacap, Jawa Tengah</strong>.
              Toko Cahaya Cerdas menyediakan berbagai jenis produk kasur mulai dari Spring Bed, Kasur Busa, Kasur Lantai, Kasur Kapuk, dll
              yang dapat dipesan dengan ukuran tertentu (custom).
            </p>
            <p>Tidak hanya produk kasur, toko Cahaya Cerdas juga menyediakan berbagai produk lain seperti Seprei, Sarung Bantal
              dan Guling, Karpet Lantai, Permadani, Busa, Kapuk, dan Alat-alat Jok.
            </p>
            <p>Produk yang dijual 100 persen merupakan produk original dan berkualitas bahkan untuk brand brand tertentu
              di sertai garansi resmi hingga 25 tahun sebagai jaminan kualitas dan keasliannya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main class="scroll1">
    <div class="container">
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>01</h2>
            <h3>Central</h3>
            <p>Central Spring Bed dirancang dengan ahli untuk menggabungkan teknologi mutakhir pada tingkat presisi yang sempurna, diDesain sempurna untuk beradaptasi dengan fisik, bentuk, berat dan suhu kulit Anda.</p>
            <a href="404.php">See More</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="box">
          <div class="content">
            <h2>02</h2>
            <h3>Royal Foam</h3>
            <p>Kasur busa pertama dan satu-satunya di Indonesia yang diproduksi dengan teknologi Sanitized®. Dengan lisensi ahli mikroba dari Swiss, Royal Foam menjamin produknya higienis, anti bakteri, dan bebas tungau.</p>
            <a href="404.php">See More</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="box">
          <div class="content">
            <h2>03</h2>
            <h3>Inoac</h3>
            <p>INOAC berdedikasi untuk meneliti dan mengembangkan bahan baru yang membantu melindungi lingkungan dan berkontribusi pada realisasi kekayaan alam dengan menyediakan produk dengan solusi nilai baru</p>
            <a href="404.php">See More</a>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="box">
          <div class="content">
            <h2>04</h2>
            <h3>Elite</h3>
            <p>Kami memahami pentingnya tidur yang nyaman dan berkomitmen untuk mewujudkannya bagi semua orang. Diproduksi dengan teliti dan tepat guna, kasur Elite Spring Bed berkualitas premium namun terjangkau.</p>
            <a href="404.php">see More</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="event__search__floater">
    <div class="search__anchor">
      <form id="event-search-form" action="index.php#bla">
        <input type="text" class="search__bar" placeholder="Search" name="search" aria-label="Search">
        <input class="search__submit" type="submit" value="search">
        <div class="search__toggler"></div>
      </form>
    </div>
  </div>

  <div class="tit" id="bla">
    <h2 class="background"><span>Our Product</span></h2>
  </div>

  <div class="pro">
    <?php
    include("koneksi.php");
    if (isset($_GET['search'])) {
      $search = $_GET['search'];
    ?>
      <div class="tit"><?php echo "<h2 style='color: white; font-size: 20px; text-align: center;'>Hasil Pencarian : " . $search . "<h2>" ?></div>
    <?php
    }
    ?>
    <section id="products">
      <?php
      if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE br_nm like '%" . $search . "%' OR ket like '%" . $search . "%'");
      } else {
        $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY br_id ASC limit 30");
      }
      while ($data = mysqli_fetch_array($sql)) {
      ?>
        <div class="card">
          <div class="img">
            <img src="<?php echo "upload/" . $data['br_gbr1']; ?>" alt="Watch">
          </div>
          <div class="text">
            <h3><?php echo $data['br_nm']; ?></h3>
            <h5>Rp.<?php echo number_format($data['br_hrg'], 2, ",", "."); ?></h5>
          </div>
          <div class="btn">
            <a href="./detail.php?kd=<?php echo $data['br_id']; ?>">
              <button>View Detail</button>
            </a>
          </div>
        </div>
      <?php
      }
      ?>
    </section>
  </div>

  <div class="co">
    <section>
      <div class="container">
        <div class="contactInfo">
          <div>
            <h2>Contact Info</h2>
            <ul class="info">
              <li>
                <span><img src="https://i.ibb.co/cbnfrDF/location.png" /></span>
                <span>
                  Jl.Pamugaran No.23 Rt01/Rw05, Sampang, Cilacap
                </span>
              </li>
              <li>
                <span><img src="https://i.ibb.co/rbbwDkP/mail.png" /></span>
                <span>cahayacerdas.sampang@gmail.com</span>
              </li>
              <li>
                <span><img src="https://i.ibb.co/DGGjsW7/call.png" /></span>
                <span>0853-2722-8234</span>
              </li>
            </ul>
          </div>
          <ul class="sci">
            <li><a href=""><img src="https://i.ibb.co/vxjnyw0/1.png" /></a></li>
            <li><a href=""><img src="https://i.ibb.co/xsXK3zW/2.png" /></a></li>
            <li><a href=""><img src="https://i.ibb.co/5jFR49X/3.png" /></a></li>
            <li><a href=""><img src="https://i.ibb.co/1Msgr4S/4.png" /></a></li>
            <li><a href=""><img src="https://i.ibb.co/GtnC2C8/5.png" /></a></li>
          </ul>

        </div>
        <form method="POST" action="index.php#mes">
          <div class="contactForm">
            <h2 id="mes">Send a Message</h2>
            <div class="formBox">
              <div class="inputBox w50">
                <input type="text" name="tfnama" value="<?= @$vfnama ?>" required>
                <span>First Name</span>
              </div>
              <div class="inputBox w50">
                <input type="text" name="tlnama" value="<?= @$vlnama ?>" required>
                <span>Last Name</span>
              </div>
              <div class="inputBox w50">
                <input type="email" name="temail" value="<?= @$vemail ?>" required>
                <span>Email Address</span>
              </div>
              <div class="inputBox w50">
                <input type="text" name="tphone" value="<?= @$vphone ?>" required>
                <span>Mobile Number</span>
              </div>
              <div class="inputBox w100">
                <textarea name="tpesan" required></textarea>
                <span>Write Your Massage Here...</span>
              </div>
              <div class="inputBox w100">
                <input type="submit" name="bsave" value="Send">
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
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
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li><a href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li><a href="#">
            <ion-icon name="logo-instagram"></ion-icon>
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