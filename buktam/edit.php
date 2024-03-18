<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_buktam = $_GET['id_buktam'];
$query = mysqli_query($connection, "SELECT * FROM buktam WHERE id_buktam='$id_buktam'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Edit Data Tamu</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id_buktam" value="<?= $row['id_buktam'] ?>">
              <table cellpadding="8" class="w-100">
              <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" size="20" required></td>
              </tr>

              <tr>
                <td>Asal Instansi</td>
                <td><input class="form-control" type="text" name="instansi" size="20" required></td>
              </tr>

              <tr>
                <td>Nomor HP</td>
                <td><input class="form-control" type="text" name="hp" size="20" required></td>
              </tr>

                <tr>
                  <td>Menemui</td>
                  <td>
                    <select class="form-control" name="menemui" id="menemui" required>
                      <option value="kepsek" <?php if ($row['menemui'] == "kepsek") {
                                              echo "selected";
                                            } ?>>Kepala Sekolah</option>
                      <option value="humas" <?php if ($row['menemui'] == "humas") {
                                                echo "selected";
                                              } ?>>Waka Humas</option>
                      <option value="kurikulum" <?php if ($row['menemui'] == "kurikulum") {
                                                echo "selected";
                                              } ?>>Waka Kurikulum</option>
                      <option value="ketenagaan" <?php if ($row['menemui'] == "ketenagaan") {
                                                echo "selected";
                                              } ?>>Waka Ketenagaan</option>
                      <option value="sarana" <?php if ($row['menemui'] == "sarana") {
                                                echo "selected";
                                              } ?>>Waka Sarana Prasarana</option>
                      <option value="tu" <?php if ($row['menemui'] == "tu") {
                                                echo "selected";
                                              } ?>>Tata Usaha</option>
                      <option value="lainnya" <?php if ($row['menemui'] == "lainnya") {
                                                echo "selected";
                                              } ?>>Lainnya</option>
                    </select>
                  </td>
                </tr>

                <tr>
                <td>Keperluan</td>
                <td><input class="form-control" type="text" name="keperluan" size="20" required></td>
              </tr>
                
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                    <input class="btn btn-primary" type="submit" name="publish" value="Publish">
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>