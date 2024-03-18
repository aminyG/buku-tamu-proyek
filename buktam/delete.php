<?php
session_start();
require_once '../helper/connection.php';

$id_buktam = $_GET['id_buktam'];

$result = mysqli_query($connection, "DELETE FROM buktam WHERE id_buktam='$id_buktam'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
