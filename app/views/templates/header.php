<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.css">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark bg-warning">
    <div class="container">
        <a class="navbar-brand text-info" href="<?= BASEURL?>/home">film</a>
        <a class="navbar-brand text-light" href="<?= BASEURL?>/home">All Movies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (isset($data['genre'])) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genre
          </a>
          <ul class="dropdown-menu" style="max-height:200px;overflow: scroll;min-width:200px">
            <?php foreach($data['genre'] as $genre) : ?>
              <li><a class="dropdown-item" href="<?= BASEURL?>/home/filter/<?= $genre['id_genre']?>"><?= $genre['nama_genre']?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endif; ?>
        </ul>
        </div>
        <?php if (isset($_SESSION['login'])) : ?>
        <div class="dropdown">
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['nama_lengkap']?>
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            <li>
              <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#formModalProfile">
                <span data-feather="calendar"></span>
                Profile
              </a>
            </li>
            <li><a class="dropdown-item" href="<?= BASEURL?>/auth/logout">Logout</a></li>
          </ul>
        </div>
        <?php else : ?>
        <button type="button" class="btn btn-sm btn-outline-secondary m-2" data-bs-toggle="modal" data-bs-target="#formModalRegister">
          <span data-feather="calendar"></span>
          Register
        </button>
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#formModal">
          <span data-feather="calendar"></span>
          Login
        </button>
        <?php endif; ?>
      </div>
</nav>


      <!-- Modal Login  -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=  BASEURL?>/Auth/prosesLogin" method="post">
                <label for="username" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <input id="username" type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1">
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
          </div>
        </div>
      </div>

      <!-- Modal Register  -->
      <div class="modal fade" id="formModalRegister" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Register</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=  BASEURL?>/Auth/prosesRegister" method="post">
                <label for="username" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <input id="username" type="text" class="form-control" placeholder="Username" aria-label="username" name="username" aria-describedby="basic-addon1">
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="basic-addon1">
                </div>
                <!-- Nama  -->
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input id="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="nama_lengkap" name="nama_lengkap" aria-describedby="basic-addon1">
                </div>
                <!-- Foto  -->
                <label for="foto" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input id="foto" type="text" class="form-control" placeholder="Foto" aria-label="foto" name="foto_profile" aria-describedby="basic-addon1">
                </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
          </div>
        </div>
      </div>

      <!-- Modal Update  -->
      <div class="modal fade" id="formModalProfile" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Update Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=  BASEURL?>/Auth/updateProfile" method="post">
                <input type="hidden" name="id_user" value=<?= $_SESSION['id_user']?>>
                <label for="username" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <input id="username" type="text" value=<?= $_SESSION['username']?> class="form-control" placeholder="Username" aria-label="username" name="username" aria-describedby="basic-addon1">   
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="basic-addon1">
                </div>
                <!-- Nama  -->
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input id="nama_lengkap" type="text" class="form-control" value=<?= $_SESSION['nama_lengkap']?> placeholder="Nama Lengkap" aria-label="nama_lengkap" name="nama_lengkap" aria-describedby="basic-addon1">
                </div>
                <!-- Foto  -->
                <label for="foto" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input id="foto" type="text" class="form-control" value=<?= $_SESSION['foto_profile']?> placeholder="Foto" aria-label="foto" name="foto_profile" aria-describedby="basic-addon1">
                </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
          </div>
        </div>
      </div>