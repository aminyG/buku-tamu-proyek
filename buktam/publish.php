<?php
session_start();
require_once '../helper/connection.php';

if (isset($_POST['publish'])) {
    $berita_id = $_POST['berita_id'];
    $rubrik = $_POST['rubrik'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name']; // Mengambil nama file gambar
    $gambar_tmp = $_FILES['gambar']['tmp_name']; // Mengambil path sementara file gambar
    $creator = $_POST['creator'];

    // Pindahkan file gambar dari tempat penyimpanan sementara ke folder yang diinginkan
    move_uploaded_file($gambar_tmp, "../path/to/your/upload/directory/$gambar");

    // Query untuk memasukkan artikel ke dalam tabel artikel_published
    $query = mysqli_query($connection, "INSERT INTO berita (berita_id, rubrik,url, judul, isi, gambar, creator) VALUES ('$berita_id', '$url', '$rubrik', '$judul', '$isi', '$gambar', '$creator')");

    if ($query) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Artikel berhasil dipublish'
        ];
        header('Location: ../artikel/publish.php'); // Redirect ke halaman publish
        exit();
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ../artikel/publish.php'); // Redirect kembali ke halaman publish jika terjadi kesalahan
        exit();
    }
} else {
    header('Location: ../artikel/publish.php'); // Redirect kembali ke halaman publish jika tombol "Publish" tidak ditekan
    exit();
}
?>
