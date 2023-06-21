<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#formModalRegister">
            <span data-feather="calendar"></span>
            Tambah Admin
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
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Username</th>
              <th scope="col">Photo Profile</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['user'] as $user) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $user['nama_lengkap']?></td>
                <td><?= $user['username']?></td>
                <td><img width="100" src="<?= $user['photo_profile']?>" alt=""></td>
                <td><?= $user['role']?></td>
                <td>
                    <a href="<?= BASEURL?>/User/hapus/<?= $user['id_user']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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
              <form action="<?=  BASEURL?>/Auth/prosesRegisterAdmin" method="post">
                <label for="genre" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Username" aria-label="Genre" name="username" aria-describedby="basic-addon1">
                </div>
                <label for="genre" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Password" aria-label="Genre" name="password" aria-describedby="basic-addon1">
                </div>
                <!-- Nama  -->
                <label for="genre" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Genre" name="nama_lengkap" aria-describedby="basic-addon1">
                </div>
                <!-- Foto  -->
                <label for="genre" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input id="genre" type="text" class="form-control" placeholder="Foto" aria-label="Genre" name="foto_profile" aria-describedby="basic-addon1">
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