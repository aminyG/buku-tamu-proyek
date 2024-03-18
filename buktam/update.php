<?php
session_start();
require_once '../helper/connection.php';

$id_buktam = $_POST['id_buktam'];
$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$hp = $_POST['hp'];
$menemui = $_POST['menemui'];
$keperluan = $_POST['keperluan'];

// Prepared statement
$stmt = $connection->prepare("UPDATE buktam SET nama = ?, instansi = ?, hp = ?, menemui = ?, keperluan = ? WHERE id_buktam = ?");
$stmt->bind_param("sssssi", $nama, $instansi, $hp, $menemui, $keperluan, $id_buktam);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION['info'] = [
        'status' => 'success',
        'message' => 'Berhasil mengubah data'
    ];
    header('Location: ./index.php');
} else {
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => $stmt->error
    ];
    header('Location: ./index.php');
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>
