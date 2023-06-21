<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Genre</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <form action="<?=  BASEURL?>/Genre/ubah" method="post">
            <input type="hidden" name="id_genre" id="id_genre" value="<?= $data['detail']['id_genre'] ?>">
            <label for="genre" class="form-label">Genre</label>
            <div class="input-group mb-3">
                <input id="genre" type="text" value="<?= $data['detail']['nama_genre'] ?>" class="form-control" placeholder="Nama Genre" aria-label="Genre" name="nama_genre" aria-describedby="basic-addon1">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
        </div>
    </div>