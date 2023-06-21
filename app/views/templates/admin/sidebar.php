

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?= $data['active'] == 'film' ? 'active' : '' ?>" aria-current="page" href="<?= BASEURL ?>/Film">
              <span data-feather="home"></span>
              Film
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['active'] == 'genre' ? 'active' : '' ?>" href="<?= BASEURL ?>/Genre">
              <span data-feather="file"></span>
              Genre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['active'] == 'sutradara' ? 'active' : '' ?>" href="<?= BASEURL ?>/Sutradara">
              <span data-feather="shopping-cart"></span>
              Sutradara
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['active'] == 'komentar' ? 'active' : '' ?>" href="<?= BASEURL ?>/Komentar">
              <span data-feather="shopping-cart"></span>
              Komentar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['active'] == 'user' ? 'active' : '' ?>" href="<?= BASEURL ?>/User">
              <span data-feather="shopping-cart"></span>
              User
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
