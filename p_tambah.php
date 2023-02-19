<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $namabarang   = $_POST['namabarang'];
  $harga     = $_POST['harga'];
  $stok    = $_POST['stok'];
  $satuan    = $_POST['satuan'];
  $gambar1 = $_FILES['gambar1']['name'];
  $gambar2 = $_FILES['gambar2']['name'];
  $gambar3 = $_FILES['gambar3']['name'];
  $gambar4 = $_FILES['gambar4']['name'];
  $keterangan = $_POST['keterangan'];
//cek dulu jika ada gambar produk jalankan coding ini
if($gambar1 != "" && $gambar2 != "" && $gambar3 != "" && $gambar4 != "") {
  $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
  $x1 = explode('.', $gambar1); //memisahkan nama file dengan ekstensi yang diupload
  $x2 = explode('.', $gambar2); 
  $x3 = explode('.', $gambar3); 
  $x4 = explode('.', $gambar4); 
  $ekstensi = strtolower(end($x1));
  $file_tmp1 = $_FILES['gambar1']['tmp_name']; 
  $file_tmp2 = $_FILES['gambar2']['tmp_name'];
  $file_tmp3 = $_FILES['gambar3']['tmp_name'];
  $file_tmp4 = $_FILES['gambar4']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru1 = $angka_acak . '-' . $gambar1;
  $nama_gambar_baru2 = $angka_acak . '-' . $gambar2;
  $nama_gambar_baru3 = $angka_acak . '-' . $gambar3;
  $nama_gambar_baru4 = $angka_acak . '-' . $gambar4; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp1, 'upload/'.$nama_gambar_baru1); //memindah file gambar ke folder gambar
                move_uploaded_file($file_tmp2, 'upload/'.$nama_gambar_baru2);
                move_uploaded_file($file_tmp3, 'upload/'.$nama_gambar_baru3);
                move_uploaded_file($file_tmp4, 'upload/'.$nama_gambar_baru4);
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO barang (br_nm, br_hrg, br_stok, br_satuan, br_gbr1, br_gbr2, br_gbr3, br_gbr4, ket) VALUES ('$namabarang', '$harga', '$stok', '$satuan', '$nama_gambar_baru1', '$nama_gambar_baru2', '$nama_gambar_baru3', '$nama_gambar_baru4', '$keterangan')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  }else {
                    //tampil alert dan akan redirect ke halaman daftar.php
                    //silahkan ganti daftar.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='daftar.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
            }
} else {
   $query = "INSERT INTO barang (br_nm, br_hrg, br_stok, br_satuan, br_gbr1, br_gbr2, br_gbr3, br_gbr4, ket) VALUES ('$namabarang', '$harga', '$stok', '$satuan', '$nama_gambar_baru1', '$nama_gambar_baru2', '$nama_gambar_baru3', '$nama_gambar_baru4', '$keterangan')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman daftar.php
                    //silahkan ganti daftar.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='daftar.php';</script>";
                  }
}