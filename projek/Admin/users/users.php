<?php

// include "../../database.php";
// session_start();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>Tabel Users</h6>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mod_user">Tambah Data
                    User</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Tanggal Daftar</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        $data = mysqli_query($db, "SELECT * FROM tbl_users");
                        while ($hasil = mysqli_fetch_assoc($data)):
                            $id = base64_encode($hasil["id"]);
                            ?>
                            <tr>
                                <td><?= $hasil["username"] ?></td>
                                <td>
                                    <?php
                                    if ($hasil["level"] == 1) {
                                        echo "Admin";
                                    } elseif ($hasil["level"] == 2) {
                                        echo "User";
                                    } else {
                                        echo "Owner";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($hasil["status"] == 1) {
                                        echo "Aktif";
                                    } else {
                                        echo "Non Aktif";
                                    }
                                    ?>
                                </td>
                                <td><?= $hasil["created_at"] ?></td>
                                <td>
                                    <a href="template/menu_setting.php?page=m_user_edit&id=<?= $id ?>">Edit </a><b>|</b>
                                    <a href="aksi/delete_user.php?id=<?= $id ?>"
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
<div class="modal fade" id="mod_user" tabindex="-1" role="dialog" aria-labelledby="mod_userLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mod_userLabel">Form Tambah Data User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="aksi/insert_user.php" method="post">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="user">Username</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="user" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="pswd">Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="pswd" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="level">Level</label>
                        </div>
                        <div class="col-md-8">
                            <select name="level" id="level" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                                <option value="3">Owner</option>
                            </select>
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