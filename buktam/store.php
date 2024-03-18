<?php
session_start();
require_once '../helper/connection.php';

// Ambil data dari formulir upload
$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$hp = $_POST['hp'];
$menemui = $_POST['menemui'];
$keperluan = $_POST['keperluan'];

// Gabungkan direktori dengan nama file
$targetFilePath = $targetDir . $targetFileName;

// Pindahkan file yang diunggah ke lokasi penyimpanan
if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)){
    // Jika file berhasil diunggah, masukkan data ke database
    $query = mysqli_query($connection, "INSERT INTO buktam (nama, instansi, hp, menemui, keperluan) VALUES ('$nama', '$instansi', '$hp', '$menemui', '$keperluan')");
    if ($query) {
        // Jika query berhasil, arahkan ke halaman index dengan status sukses
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: ./index.php');
    } else {
        // Jika query gagal, arahkan ke halaman index dengan status gagal dan pesan error
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ./index.php');
    }
} else {
    // Jika terjadi kesalahan saat mengunggah file, arahkan ke halaman index dengan pesan error
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => 'Gagal mengunggah file, silakan coba lagi.'
    ];
    header('Location: ./index.php');
}
?>
