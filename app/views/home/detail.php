<div class="container">
    <!-- Detail Film  -->
    <div class="row mt-4">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
    <div class="row mt-3">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h3 class="display-6 fw-bold"><?= $data['film']['nama_film']?></h3>
            <!-- <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
            <div class="row justify-content-between">
                <div class="col-4">
                    <img width="400" src="<?= $data['film']['gambar']?>" alt="">
                </div>
                <div class="col-6 col align-self-start">
                    <table class="table">
                        <tr>
                            <td>Tahun Film</td>
                            <td><?= $data['film']['tahun_film']?></td>
                        </tr>
                        <tr>
                            <td>Sutradara</td>
                            <td>
                                <?php foreach ($data['sutradara'] as $sutradara) : ?>
                                    <?php if ($data['film']['id_sutradara'] == $sutradara['id_sutradara']) : ?>
                                        <?= $sutradara['nama_sutradara'] ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Rating Film</td>
                            <td>⭐ <?= $data['film']['rating_film']?></td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>
                                <?php foreach ($data['genre'] as $genre) : ?>
                                    <?php if ($data['film']['id_genre'] == $genre['id_genre']) : ?>
                                        <?= $genre['nama_genre'] ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Daftar Pemain</td>
                            <td><?= $data['film']['daftar_pemain']?></td>
                        </tr>
                        <tr>
                            <td>Sinopsis</td>
                            <td><?= $data['film']['sinopsis']?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-1 align-self-end">
                <a href="<?= BASEURL?>/home" class="btn btn-primary">Kembali</a>
                </div>
        </div>
        </div>
    </div>
</div>

<div class="container" style="max-width:70%;">
    <!-- Detail Film  -->
    <div class="row mt-3">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h3 class="display-8 fw-bold">Komentar</h3>
            <form action="<?= BASEURL ?>/Komentar/tambah" class="justify-content-end" method="post">
                <input type="hidden" name="id_film" value="<?= $data['film']['id_film']?>">
                <!-- <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_komentar" required>
                </div> -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <!-- star rating  -->
                    <div class="rating">
                        <input type="radio" name="rating" value="1" id="rating-1" required>
                        <label for="rating-1">⭐1</label>
                        <input type="radio" name="rating" value="2" id="rating-2">
                        <label for="rating-2">⭐2</label>
                        <input type="radio" name="rating" value="3" id="rating-3">
                        <label for="rating-3">⭐3</label>
                        <input type="radio" name="rating" value="4" id="rating-4">
                        <label for="rating-4">⭐4</label>
                        <input type="radio" name="rating" value="5" id="rating-5">
                        <label for="rating-5">⭐5</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Komentar</label>
                    <textarea class="form-control" id="isi" name="isi_komentar" min="50" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="row justify-content-between mt-5">
                <!-- Looping data komentar  -->
                <?php foreach($data['komentar'] as $komentar):?>
                    <?php if($komentar['id_film'] == $data['film']['id_film']):?>
                    
                    <div class="card bg-light m-2">
                        <div class="card-body">
                        <p class="fw-bold fs-5"><?= $komentar['nama_komentar']?> / <?= $komentar['rating']?></p>
                        <p class="fs-8"><?= $komentar['isi_komentar']?></p>
                    </div>
                    </div>
                    <?php endif;?>

                <?php endforeach; ?>





        </div>
        </div>
    </div>
</div>