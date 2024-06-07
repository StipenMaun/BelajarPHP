<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>List Transaksi</h6>
            </div>
            <div class="card-body">
                <!-- <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mod_d_trans"></a> -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <tr align="center">
                            <th>ID Transaksi</th>
                            <th>ID User</th>
                            <th>ID Barang</th>
                            <th>Tanggal Transaksi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        $data = mysqli_query($db, "SELECT * FROM tbl_h_trans INNER JOIN tbl_d_trans ON tbl_h_trans.id_transaksi = tbl_d_trans.id_transaksi");
                        while ($hasil = mysqli_fetch_assoc($data)):
                            $id = $hasil["id_transaksi"];
                            ?>
                            <tr align="center">
                                <td><?= $hasil["id_transaksi"] ?></td>
                                <td><?= $hasil["id_user"] ?></td>
                                <td><?= $hasil["id_barang"] ?></td>
                                <td><?= $hasil["tanggal_trans"] ?></td>
                                <td>
                                    <?php if ($hasil["status"] == 0) { ?>
                                        <span class="bg-warning text-white fw-bold p-2 rounded">Belum Terbayar</span>
                                    <?php } elseif ($hasil["status"] == 1) { ?>
                                        <span class="bg-success text-white fw-bold p-2 rounded">Terbayar</span>
                                    <?php } else { ?>
                                        <span class="bg-danger text-white fw-bold p-2 rounded">Batal</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($hasil["status"] == 0) { ?>
                                        <a href="template/menu_setting.php?page=trans_edit&id=<?= $id ?>">Validasi</a>
                                    <?php } else { ?>
                                        <a href="template/menu_setting.php?page=trans_detail&id=<?= $id ?>">Detail</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>