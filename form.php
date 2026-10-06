<?php
require_once("navbar.php");
?>

<div class="container">
  <div class="row align-items-start">
    <div class="col-2"></div>

    <div class="col-8">
      <br>

      <div class="card">
        <div class="card-header">
          <h3>Form Tambah User (Siswa)</h3>
        </div>

        <div class="card-body">

          <form action="aksi_tambah_user.php" method="POST">

            <h3>Data Profil User</h3>

            <div class="mb-3">
              <label class="form-label">NIS:</label>
              <input type="text"
                     class="form-control"
                     name="nis"
                     placeholder="Nomor Induk Siswa"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Nama Lengkap:</label>
              <input type="text"
                     class="form-control"
                     name="nama"
                     placeholder="Nama Lengkap Siswa"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Kelas:</label>
              <input type="text"
                     class="form-control"
                     name="kelas"
                     placeholder="Contoh: XI-RPL-1"
                     required>
            </div>

            <h6>Jenis Kelamin:</h6>

            <div class="form-check">
              <input class="form-check-input"
                     type="radio"
                     name="jenis_kelamin"
                     value="L"
                     required>
              <label class="form-check-label">
                Laki-laki
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input"
                     type="radio"
                     name="jenis_kelamin"
                     value="P">
              <label class="form-check-label">
                Perempuan
              </label>
            </div>

            <hr>

            <h3>Data Kredensial Akun</h3>

            <div class="mb-3">
              <label class="form-label">Username:</label>
              <input type="text"
                     class="form-control"
                     name="username"
                     placeholder="Contoh: ujang123"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password Akun:</label>
              <input type="password"
                     class="form-control"
                     name="password"
                     placeholder="Contoh: password123"
                     required>
            </div>

            <!-- Role otomatis siswa -->
            <input type="hidden" name="role" value="siswa">

            <button type="submit"
                    name="tambah"
                    class="btn btn-primary">
              Simpan Data
            </button>

            <a href="form.php" class="btn btn-secondary">
              Kembali
            </a>

          </form>

        </div>
      </div>

    </div>

    <div class="col-2"></div>
  </div>
</div>

<?php require_once('footer.php'); ?>