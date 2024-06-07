<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>Validasi Transaksi</h6>
            </div>
            <div class="card-body row">
                <div class="col-md-6">
                    <?php
                    $id = $_SESSION["id_transaksi"];
                    $data = mysqli_query($db, "SELECT * FROM tbl_h_trans INNER JOIN tbl_d_trans ON tbl_h_trans.id_transaksi = tbl_d_trans.id_transaksi LEFT JOIN tbl_barang ON tbl_d_trans.id_barang = tbl_barang.id_barang LEFT JOIN tbl_users ON tbl_d_trans.id_user = tbl_users.id WHERE tbl_h_trans.id_transaksi = '$id'");
                    while ($hasil = mysqli_fetch_assoc($data)): ?>
                        <div class="row">
                            <div class="col-md-6">ID Transaksi</div>
                            <div class="col-md-6">: <?= $hasil["id_transaksi"] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Nama User</div>
                            <div class="col-md-6">: <?= $hasil["username"] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Nama Barang</div>
                            <div class="col-md-6">: <?= $hasil["nama_barang"] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Jumlah Barang</div>
                            <div class="col-md-6">: <?= $hasil["qty"] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Total Harga</div>
                            <div class="col-md-6">: Rp. <?= number_format($hasil["total_harga"], 0, "", ".") ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-md-6 text-center">
                    <form action="aksi/validasi_trans.php" method="post">
                        <button type="submit" class="btn btn-primary">Validasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>