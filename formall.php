<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $username = $_POST['username'];
    $password = $_POST['password'];
}
?>

<h2>Data Profil User 2</h2>

<form method="post">
NIS:<br>
<input type="text" name="nis" placeholder="Nomor Induk Siswa | Contoh: 123"><br>

Nama Lengkap:<br>
<input type="text" name="nama" placeholder="Nama Lengkap Siswa | Contoh: Rayist"><br>

Kelas:<br>
<input type="text" name="kelas" placeholder="Kelas Siswa | Contoh: XI-RPL-4"><br>

Jenis Kelamin:<br>
<input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
<input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

<hr>

<h2>Data Kredensial Akun</h2>

Username:<br>
<input type="text" name="username" placeholder="Username Akun | Contoh: rayist"><br>

Password Akun:<br>
<input type="password" name="password" placeholder="Password Akun | Contoh: 231"><br>

<input type="submit" name="simpan" value="Simpan Data">
<a href="script.php">Kembali</a>
</form>