<?php
// session_start();
// if(isset($_SESSION['login'])){
//    header('Location: dashboard/admin.php');
// }else{
//   header('Location: ./login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Buku Tamu</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>BUKU TAMU SMKN 2 PROBOLINGGO</p>
            </div>
        </nav>

        
        <table width="80%">
            <tr>
                <td class="column">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Nama">
                        <i class="bx bx-user"></i>
                    </div>
                </td>
                <td class="column">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Asal instansi">
                        <i class="bx bx-building"></i>
                    </div>
                </td>
            </tr>
            <tr><td class="column"><div class="input-box">
                <input type="text" class="input-field" placeholder="Nomor HP/WA">
                <i class="bx bx-phone"></i>
            </div>
        </td><td class="column"><div class="input-box">
            <select class="input-field" id="menemuiDropdown" onchange="handleChange(this)">
                <option value="" disabled selected>Menemui</option>
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Waka Humas">Waka Humas</option>
                <option value="Waka Kurikulum">Waka Kurikulum</option>
                <option value="Waka Ketenagaan">Waka Ketenagaan</option>
                <option value="Waka Sarana Prasarana">Waka Sarana Prasarana</option>
                <option value="Tata Usaha">Tata Usaha</option>
                <option value="Lainnya">Lainnya</option>
            </select>
            <input type="text" class="input-field" id="lainnyaInput" placeholder="Menemui" style="display: none;">
            <i class="bx bx-user-circle"></i>
        </div>
        </td>
    </tr>
            <tr><td colspan='2'><div class="input-box">
                <textarea class="input-field" placeholder="Keperluan"></textarea>
                <i class="bx bx-note"></i>
            </div></td></tr>
            <tr><td colspan='2'><div class="input-box">
                <input type="submit" class="submit" value="Kirim">
            </div>
            </div></td></tr>
        </table>


        <!-- Form box -->
                <div class="form-box">
                    <div class="form-container" id="form">
                        <div class="top">
                            <header>Selamat Datang</header>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Nama">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Asal instansi">
                            <i class="bx bx-building"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Nomor HP/WA">
                            <i class="bx bx-phone"></i>
                        </div>
                        <div class="input-box">
                            <select class="input-field" id="menemuiDropdown" onchange="handleChange(this)">
                                <option value="" disabled selected>Menemui</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Waka Humas">Waka Humas</option>
                                <option value="Waka Kurikulum">Waka Kurikulum</option>
                                <option value="Waka Ketenagaan">Waka Ketenagaan</option>
                                <option value="Waka Sarana Prasarana">Waka Sarana Prasarana</option>
                                <option value="Tata Usaha">Tata Usaha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <input type="text" class="input-field" id="lainnyaInput" placeholder="Menemui" style="display: none;">
                            <i class="bx bx-user-circle"></i>
                        </div>                               
                        <div class="input-box">
                            <textarea class="input-field" placeholder="Keperluan"></textarea>
                            <i class="bx bx-note"></i>
                        </div>
                        <div class="input-box">
                            <input type="submit" class="submit" value="Kirim">
                        </div>
                    </div>
                </div>
            </div>                 
<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>
    
    function form() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function handleChange(select) {
    const inputField = document.getElementById("lainnyaInput");
    if (select.value === "Lainnya") {
        inputField.style.display = "inline-block";
        inputField.placeholder = "Tulis Nama";
        inputField.style.marginTop = "40px";
    } else {
        inputField.style.display = "none";
        inputField.placeholder = "Menemui";
    }
}

</script>

</body>
</html>
