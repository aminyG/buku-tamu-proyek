<?php 
// Include the database configuration file 
include_once 'dbConfig.php'; 
 
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "file/berita"; // Ubah ke direktori yang sesuai dengan kebutuhan Anda
 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["gambar"]["gambar"])){ 
        $fileName = basename($_FILES["gambar"]["gambar"]); 
        $targetFilePath = $file/berita . $gambar; 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$gambar."', NOW())"); // Sesuaikan dengan nama tabel dan atribut yang sesuai dengan struktur database Anda
                if($insert){ 
                    $statusMsg = "The file ".$gambar. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
