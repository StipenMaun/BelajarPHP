<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-danger text-white fw-bold">
                Detail Profil Admin
            </div>
            <div class="card-body row">
                <div class="col-md-6 table-responsive">
                    <table class="table table-hover table-info text-black rounded" width="100%">

                        <tr class="table-borderless">
                            <th width="30%">Username</th>
                            <td width="70%"><?= $profil['username'] ?></td>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <td><?= ($profil['level'] == 1) ? "Administrator" : "" ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><span class="bg-success text-white fw-bold p-2 rounded">Aktif</span></td>
                        </tr>
                        <tr>
                            <th>Tanggal Dibuat</th>
                            <td><?= date_format(date_create($profil['created_at']), "d-m-Y") ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center mb-2">
                        <?php if (!empty($profil['foto'])) { ?>
                            <img class="rounded border border-primary" src="../assets/img/profil/<?= $profil['foto'] ?>"
                                width="30%">
                        <?php } else { ?>
                            <img class="rounded border border-primary" src="../assets/img/no_photo.svg" width="30%">
                        <?php } ?>
                    </div>
                    <p class="text-danger text-center fw-bold">Ekstensi yang diperbolehkan .png | .jpg | .jpeg
                        | .gif</p>
                    <p class="text-danger text-center fw-bold">Maksimum ukuran foto adalah 1mb</p>
                    <form class="form" action="aksi/upload_foto.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $_SESSION['THIS_ID'] ?>">
                        <div class="row">
                            <div class="col-md-10">
                                <input class="form-control" type="file" name="foto" id="foto" required>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-primary" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>