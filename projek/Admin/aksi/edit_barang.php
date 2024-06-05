<?php

$id = $_SESSION["id_barang"];

$sql_where = mysqli_query($db, "SELECT * FROM tbl_barang WHERE id_barang='$id'");
$data_barang = mysqli_fetch_assoc($sql_where);

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>Form Edit User</h6>
            </div>
            <div class="card-body">
                <form action="aksi/update_barang.php" method="post">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="id">ID Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="id" id="id"
                                value="<?= $data_barang['id_barang'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="nama">Nama Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="<?= $data_barang['nama_barang'] ?>" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="harga">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="harga" id="harga"
                                value="<?= $data_barang['harga_satuan'] ?>" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="qty">QTY</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="qty" id="qty"
                                value="<?= $data_barang['qty'] ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <a class="btn btn-secondary" href="template/menu_setting.php?page=m_barang">Cancel</a>
                            <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>