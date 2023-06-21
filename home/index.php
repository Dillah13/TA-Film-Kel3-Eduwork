<div class='container'>

    
    
<h1 class='mt-4'>Fav Film</h1>   
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
  <!-- <?php foreach ($data['film'] as $film) : ?>
    <div class="carousel-item active" style="max-height:500px;">
      <img src="https://source.unsplash.com/random/900×700/?fruit" class="d-block w-100" style="overflow:hidden;" alt="...">
    </div>
    <?php endforeach; ?> -->
    <div class="carousel-item active" style="max-height:500px;">
      <img src="https://source.unsplash.com/random/900×400/?movies" class="d-block w-100" style="overflow:hidden;" alt="...">
    </div>
    <div class="carousel-item active" style="max-height:500px;">
      <img src="https://source.unsplash.com/random/900×700/?netflix" class="d-block w-100" style="overflow:hidden;" alt="...">
    </div>
    <div class="carousel-item active" style="max-height:500px;">
      <img src="https://source.unsplash.com/random/900×700/?movie" class="d-block w-100" style="overflow:hidden;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1 class='mt-4'>List Film</h1>   
    <div class='row mt-3'>
        <div class='col-lg-6'>
            <?php Flasher::flash(); ?>
        </div>
    </div> 
    <div class='row'>
        <?php foreach ($data['film'] as $film) : ?>
            <div class='col-lg-3 col-md-6 mb-5'>
                
            <a href="<?= BASEURL ?>/home/detail/<?= $film['id_film']?>" style="text-decoration:none;">
                <div class="card" style="width: 18rem;cursor:pointer;">
                    <img height="400" src="<?= $film['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <!-- Genre  -->
                        <?php foreach($data['genre'] as $genre) : ?>
                            <?php if($film['id_genre'] == $genre['id_genre']) : ?>
                                <p class="card-text"><?= $genre['nama_genre']; ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <p class="card-text">⭐<?= $film['rating_film']; ?></p>
                    </div>
                </div>
            </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>