   <!-- <div class="container"> -->
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Komentar</h1>
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
              <th scope="col">Nama</th>
              <th scope="col">Rating</th>
              <th scope="col">Isi Komentar</th>
              <th scope="col">Tanggal Komentar</th>
              <th scope="col">Nama Film</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['komentar'] as $komentar) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $komentar['nama_komentar']?></td>
                <td><?= $komentar['rating']?></td>
                <td><?= $komentar['isi_komentar']?></td>
                <td><?= $komentar['tanggal_komentar']?></td>
                <td>
                    <?php foreach ($data['film'] as $film) : ?>
                        <?php if ($komentar['id_film'] == $film['id_film']) : ?>
                            <?= $film['nama_film'] ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <a href="<?= BASEURL?>/Komentar/hapus/<?= $komentar['id_komentar']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
   <!-- </div> -->