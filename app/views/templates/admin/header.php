<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Halaman <?= $data['judul'] ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= BASEURL?>/css/dashboard.css" rel="stylesheet">
    
  </head>
  <body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?= BASEURL ?>/home">Web Film</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <nav class="navbar navbar-expand-lg bg-dark bg-warning">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
</header>

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
                <label for="genre" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" value=<?= $_SESSION['username']?> class="form-control" placeholder="Username" aria-label="Genre" name="username" aria-describedby="basic-addon1">   
                </div>
                <label for="genre" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input id="genre" type="password" class="form-control" placeholder="Password" aria-label="Genre" name="password" aria-describedby="basic-addon1">
                </div>
                <!-- Nama  -->
                <label for="genre" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" value=<?= $_SESSION['nama_lengkap']?> placeholder="Nama Lengkap" aria-label="Genre" name="nama_lengkap" aria-describedby="basic-addon1">
                </div>
                <!-- Foto  -->
                <label for="genre" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" value=<?= $_SESSION['foto_profile']?> placeholder="Foto" aria-label="Genre" name="foto_profile" aria-describedby="basic-addon1">
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