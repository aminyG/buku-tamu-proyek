<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Data Tamu</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="./store.php" method="POST">
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
                    <option value="">--Pilih--</option>
                    <option value="kepsek">Kepala Sekolah</option>
                    <option value="humas">Waka Humas</option>
                    <option value="kurikulum">Waka Kurikulum</option>
                    <option value="ketenagaan">Waka Ketenagaan</option> 
                    <option value="sarana">Waka Sarana dan Prasarana</option>
                    <option value="tu">Tata Usaha</option> 
                    <option value="lainnya">Lainnya</option>
                  </select>
                </td>
              </tr>
              
              <tr>
                <td>Keperluan</td>
                <td><input class="form-control" type="text" name="keperluan" size="20" required></td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
                  <input class="btn btn-primary" type="submit" name="publish" value="Publish">
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>

<script>
  // Inisialisasi Summernote pada elemen dengan kelas 'summernote'
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 150, // Tentukan tinggi editor teks
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  });
</script>
