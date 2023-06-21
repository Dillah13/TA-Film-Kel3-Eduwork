
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Film</h1>

    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="col-lg-6">
        <form action="<?=  BASEURL?>/Film/ubah" method="post">
            <input type="hidden" name="id_film" id="id_film" value="<?= $data['detail']['id_film'] ?>">
            <label for="judul" class="form-label">Judul</label>
            <div class="input-group mb-3">
                <input id="judul" type="text" value="<?= $data['detail']['nama_film'] ?>" class="form-control" placeholder="Judul" aria-label="Judul" name="nama_film" aria-describedby="basic-addon1">
            </div>
            <label for="sutradara" class="form-label">Sutradara</label>
            <div class="input-group mb-3">
                <select class="form-select" id="sutradara" name="id_sutradara" aria-label="Sutradara">
                    <?php foreach ($data['sutradara'] as $sutradara) : ?>
                        <?php if ($sutradara['id_sutradara'] == $data['detail']['id_sutradara']) : ?>
                            <option value="<?= $sutradara['id_sutradara'] ?>" selected><?= $sutradara['nama_sutradara'] ?></option>
                        <?php else : ?>
                            <option value="<?= $sutradara['id_sutradara'] ?>"><?= $sutradara['nama_sutradara'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="genre" class="form-label">Genre</label>
            <div class="input-group mb-3">
                <select class="form-select" id="genre" name="id_genre" aria-label="Genre">
                    <?php foreach ($data['genre'] as $genre) : ?>
                        <?php if ($genre['id_genre'] == $data['detail']['id_genre']) : ?>
                            <option value="<?= $genre['id_genre'] ?>" selected><?= $genre['nama_genre'] ?></option>
                        <?php else : ?>
                            <option value="<?= $genre['id_genre'] ?>"><?= $genre['nama_genre'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for ="tahun" class="form-label">Tahun</label>
            <div class="input-group mb-3">
                <input id="tahun" type="text" value="<?= $data['detail']['tahun_film'] ?>" class="form-control" placeholder="Tahun" aria-label="Tahun" name="tahun_film" aria-describedby="basic-addon1">
            </div>
            <!-- Rating  -->
            <label for="rating" class="form-label">Rating</label>
            <div class="input-group mb-3">
                <input id="rating" type="text" value="<?= $data['detail']['rating_film'] ?>" class="form-control" placeholder="Rating" aria-label="Rating" name="rating_film" aria-describedby="basic-addon1">
            </div>
            <!-- Pemain  -->
            <label for="pemain" class="form-label">Pemain</label>
            <div class="input-group mb-3">
                <input id="pemain" type="text" value="<?= $data['detail']['daftar_pemain'] ?>" class="form-control" placeholder="Pemain" aria-label="Pemain" name="daftar_pemain" aria-describedby="basic-addon1">
            </div>
            <!-- Sinopsis  -->
            <label for="sinopsis" class="form-label">Sinopsis</label>
                            
            <div class="input-group mb-3">
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"><?= $data['detail']['sinopsis'] ?></textarea>
            </div>
            <!-- Gambar   -->
            <label for="gambar" class="form-label">Gambar</label>
            <div class="input-group mb-3">
                <input id="gambar" type="text" value="<?= $data['detail']['gambar'] ?>" class="form-control" placeholder="Gambar" aria-label="Gambar" name="gambar" aria-describedby="basic-addon1">
            </div>
            <img src="<?= $data['detail']['gambar'] ?>" width="200" alt="">

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mb-5">Update Data</button>
            </div>
        </form>
        </div>
    </div>
</div>
