<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="color: #fff; background-color: #444444;">Tambah Buku</div>
            <div class="card-body">


                <form method="post" action="p_tambah.php" enctype="multipart/form-data" name="form1">

                    <div class="mb-3 mt-3 form-group">
                        <label for="namabarang" class="form-label">nama barang</label>
                        <input type="text" max="55" class="form-control" id="namabarang" placeholder=" masukan nama barang buku" name="namabarang" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="harga" class="form-label">harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="masukan harga" name="harga" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="stok" class="form-label">stok</label>
                        <input type="text" class="form-control" id="stok" placeholder="masukan jumlah stok" name="stok" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="satuan" class="form-label">satuan</label>
                        <input type="text" class="form-control" id="satuan" placeholder="pilih satuan" name="satuan" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="gambar1" class="form-label">Gambar1</label>
                        <input class="form-control" type="file" id="gambar1" name="gambar1" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="gambar2" class="form-label">Gambar2</label>
                        <input class="form-control" type="file" id="gambar2" name="gambar2" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="gambar3" class="form-label">Gambar3</label>
                        <input class="form-control" type="file" id="gambar3" name="gambar3" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="gambar4" class="form-label">Gambar4</label>
                        <input class="form-control" type="file" id="gambar4" name="gambar4" required>
                    </div>

                    <div class="mb-3 mt-3 form-group">
                        <label for="keterangan" class="form-label">keterangan</label>
                        <textarea type="text" max="100" class="form-control" id="keterangan" placeholder="masukan keterangan" name="keterangan" required></textarea>
                    </div>



                    <input style="width: 100%" class="btn btn-success" type="submit" name="Submit" value="Submit"></td>
            </div>
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->