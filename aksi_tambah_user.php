<?php

require_once 'koneksi.php';

if (isset($_POST['tambah'])) {

    $nis      = $_POST['nis']      ?? '';
    $nama     = $_POST['nama']     ?? '';
    $kelas    = $_POST['kelas']    ?? '';
    $jk       = $_POST['jenis_kelamin'] ?? '';
    $username = trim($_POST['username']);
    $pass     = $_POST['password'];
    $role     = $_POST['role'];

    // Redirect kembali ke form yang sesuai jika terjadi kegagalan/berhasil
    $halaman_kembali = ($role == 'siswa') ? 'form.php' : 'form2.php';

    // Tambahkan data ke tabel users (pakai prepared statement, aman dari SQL Injection)
    $stmt = mysqli_prepare(
        $koneksi,
        "INSERT INTO users (id, username, password, role, created_at)
         VALUES (null, ?, ?, ?, now())"
    );
    // Sebaiknya password di-hash, bukan disimpan polos:
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $pass_hash, $role);
    $hasil = mysqli_stmt_execute($stmt);

    if ($hasil) {

        // Ambil ID user yang baru saja dibuat
        $last_insert_id = mysqli_insert_id($koneksi);

        if ($role == 'siswa') {

            // Tambahkan data ke tabel siswa
            $stmt2 = mysqli_prepare(
                $koneksi,
                "INSERT INTO siswa (id, nis, nama, kelas, jenis_kelamin, user_id)
                 VALUES (null, ?, ?, ?, ?, ?)"
            );
            mysqli_stmt_bind_param($stmt2, "ssssi", $nis, $nama, $kelas, $jk, $last_insert_id);
            $hasil = mysqli_stmt_execute($stmt2);
        }

        if ($hasil) {
            echo "<script>
                    alert('Data Berhasil ditambahkan!!!');
                    window.location.href='{$halaman_kembali}';
                  </script>";
        } else {
            echo "<script>
                    alert('Data siswa gagal ditambahkan!!!');
                    window.location.href='{$halaman_kembali}';
                  </script>";
        }

    } else {

        echo "<script>
                alert('Data user gagal ditambahkan!!!');
                window.location.href='{$halaman_kembali}';
              </script>";
    }

} else {

    echo "<script>
            alert('Tidak boleh langsung mengakses halaman ini!!!');
            window.location.href='form.php';
          </script>";
}