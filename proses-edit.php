<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    if(empty($foto)) {
        // Lakukan proses update tanpa mengubah fotonya
        $sql = "UPDATE calon_siswa SET nis='$nis', nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
        $query = mysqli_query($db, $sql);
        // apakah query update berhasil?
        if($query) {
            // kalau berhasil alihkan ke halaman list-siswa.php
            header('Location: list-siswa.php');
        }
        else{
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    }
    else {

        $fotobaru = date('dmYHis').$foto;

        $path = "images/".$fotobaru;

        if(move_uploaded_file($tmp, $path)) {
            // buat query
            $sql = "SELECT foto FROM calon_siswa WHERE id=$id";
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($query);

            if(is_file("images/".$data['foto'])) // Jika foto ada
            unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

            $sql = "UPDATE calon_siswa SET nis='$nis', foto='$path', nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
            $query = mysqli_query($db, $sql);
        
            // apakah query simpan berhasil?
            if( $query ) {
                // kalau berhasil alihkan ke halaman index.php dengan status=sukses
                header('Location: index.php?status=sukses');
            } else {
                // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                header('Location: index.php?status=gagal');
            }
        }
    }



} else {
    die("Akses dilarang...");
}
