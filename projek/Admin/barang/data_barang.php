<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>Tabel Barang</h6>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mod_barang">Tambah Data
                    Barang</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Satuan</th>
                            <th>QTY</th>
                            <th>Waktu Input</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        $kode = getKodeBaru($db, "tbl_barang", "id_barang", "BR");
                        $data = mysqli_query($db, "SELECT * FROM tbl_barang");
                        while ($hasil = mysqli_fetch_assoc($data)):
                            $id = $hasil["id_barang"];
                            ?>
                            <tr>
                                <td><?= $hasil["id_barang"] ?></td>
                                <td><?= $hasil["nama_barang"] ?></td>
                                <td><?= $hasil["harga_satuan"] ?></td>
                                <td><?= $hasil["qty"] ?></td>
                                <td><?= $hasil["created_at"] ?></td>
                                <td>
                                    <a href="template/menu_setting.php?page=m_barang_edit&id=<?= $id ?>">Edit </a><b>|</b>
                                    <a href="aksi/delete_barang.php?id=<?= $id ?>"
                                        onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal User Add -->
<div class="modal fade" id="mod_barang" tabindex="-1" role="dialog" aria-labelledby="mod_userLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mod_userLabel">Form Tambah Data Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="aksi/insert_barang.php" method="post">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="id">ID Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="id" id="id" value="<?= $kode ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="nama">Nama Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="harga">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="harga" id="harga" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="qty">QTY</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="qty" id="qty" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>