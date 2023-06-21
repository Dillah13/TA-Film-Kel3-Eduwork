<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Sutradara</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <form action="<?=  BASEURL?>/Sutradara/ubah" method="post">
            <input type="hidden" name="id_sutradara" id="id_sutradara" value="<?= $data['detail']['id_sutradara'] ?>">
            <label for="sutradara" class="form-label">Sutradara</label>
            <div class="input-group mb-3">
                <input id="sutradara" type="text" value="<?= $data['detail']['nama_sutradara'] ?>" class="form-control" placeholder="Nama Sutradara" aria-label="Sutradara" name="nama_sutradara" aria-describedby="basic-addon1">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
        </div>
    </div>
</div>

