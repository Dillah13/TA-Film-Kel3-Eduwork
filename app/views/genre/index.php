<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Genre</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#formModal">
            <span data-feather="calendar"></span>
            Tambah
          </button>
        </div>
      </div>
      <!-- <h2>Section title</h2> -->
      <div class='row mt-3'>
            <div class='col-lg-6'>
                <?php Flasher::flash(); ?>
            </div>
        </div>
      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Genre</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['genre'] as $genre) : ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= $genre['nama_genre']?></td>
              <td>
                <a href="<?= BASEURL?>/Genre/getubah/<?= $genre['id_genre']?>" class="btn btn-warning btn-sm">Ubah</a>
                <a href="<?= BASEURL?>/Genre/hapus/<?= $genre['id_genre']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=  BASEURL?>/Genre/tambah" method="post">
                <label for="genre" class="form-label">Genre</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Nama Genre" aria-label="Genre" name="nama_genre" aria-describedby="basic-addon1">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="formModalUbah" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=  BASEURL?>/Genre/tambah" method="post">
                <label for="genre" class="form-label">Genre</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Nama Genre" aria-label="Genre" name="nama_genre" aria-describedby="basic-addon1">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
          </div>
        </div>
      </div>