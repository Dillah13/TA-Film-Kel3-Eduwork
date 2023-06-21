
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Film</h1>
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
              <th scope="col">Nama Film</th>
              <th scope="col">Tahun Film</th>
              <th scope="col">Sutradara</th>
              <th scope="col">Gambar</th>
              <th scope="col">Rating Film</th>
              <th scope="col">Genre</th>
              <th scope="col">Daftar Pemain</th>
              <th scope="col">Sinopsis</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['film'] as $film) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $film['nama_film']?></td>
                <td><?= $film['tahun_film']?></td>
                <td>
                    <?php foreach ($data['sutradara'] as $sutradara) : ?>
                        <?php if ($film['id_sutradara'] == $sutradara['id_sutradara']) : ?>
                            <?= $sutradara['nama_sutradara'] ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><img width="100" src="<?= $film['gambar']?>" alt=""></td>
                <td><?= $film['rating_film']?></td>
                <td>
                    <?php foreach ($data['genre'] as $genre) : ?>
                        <?php if ($film['id_genre'] == $genre['id_genre']) : ?>
                            <?= $genre['nama_genre'] ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><?= $film['daftar_pemain']?></td>
                <td><?= $film['sinopsis']?></td>
                <td>
                    <a href="<?= BASEURL?>/Film/getubah/<?= $film['id_film']?>" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="<?= BASEURL?>/Film/hapus/<?= $film['id_film']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
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
              <form action="<?=  BASEURL?>/Film/tambah" method="post">
                <label for="genre" class="form-label">Nama Film</label>
                <input required type="text" class="form-control" id="genre" name="nama_film">

                <label for="sutradara" class="form-label">Sutradara</label>
                <select class="form-select" aria-label="Default select example" required name="id_sutradara">
                    <option value="">Pilih Sutradara</option>
                    <?php foreach ($data['sutradara'] as $sutradara) : ?>
                        <option value="<?= $sutradara['id_sutradara']?>"><?= $sutradara['nama_sutradara']?></option>
                    <?php endforeach; ?>
                </select>

                <label for="genre" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" required name="id_genre">
                    <option value="">Pilih Genre</option>
                    <?php foreach ($data['genre'] as $genre) : ?>
                        <option value="<?= $genre['id_genre']?>"><?= $genre['nama_genre']?></option>
                    <?php endforeach; ?>
                </select>

                <label for="tahun" class="form-label">Tahun</label>
                <input required type="text" class="form-control" id="tahun" name="tahun_film">

                <label for="rating" class="form-label">Rating</label>
                <input required type="hidden" class="form-control" value=0 id="rating" name="rating_film">
                            
                <label for="pemain" class="form-label">Pemain</label>
                <input required type="text" class="form-control" id="pemain" name="daftar_pemain">

                <label for="sinopsis" class="form-label">Sinopsis</label>
                <input required type="text" class="form-control" id="sinopsis" name="sinopsis">

                <label for="gambar" class="form-label">Gambar</label>
                <input required type="text" class="form-control" id="gambar" name="gambar">
                
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
                    <input required id="genre" type="text" class="form-control" placeholder="Nama Genre" aria-label="Genre" name="nama_genre" aria-describedby="basic-addon1">
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