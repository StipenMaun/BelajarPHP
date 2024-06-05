<?php

$id_enc = $_SESSION["id_user"];
$id = base64_decode($id_enc);

$sql_where = mysqli_query($db, "SELECT * FROM tbl_users WHERE id=$id");
$data_user = mysqli_fetch_assoc($sql_where);

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                <h6>Form Edit User</h6>
            </div>
            <div class="card-body">
                <form action="aksi/update_user.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $data_user['id'] ?>">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="user">Username</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="user" value="<?= $data_user['username'] ?>"
                                required>
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
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <a class="btn btn-secondary" href="template/menu_setting.php?page=m_user">Cancel</a>
                            <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>