<?php

session_start();


$id = 0;

  $db = mysqli_connect("localhost","root","","authentication");

if(isset($_POST['update_btn'])){
    
    $orang = $_POST['orang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];
    $nomor = $_POST['nomor'];
    $deskripsi = $_POST['deskripsi'];
    $id = $_POST['id'];

    $target = "update_images/" .basename($_FILES['photo']['name']);
    $image = $_FILES['photo']['name'];

    $update_profile = "UPDATE jualan SET orang='$orang',nama='$nama',harga='$harga',lokasi='$lokasi',nomor='$nomor',deskripsi='$deskripsi',image='$image' WHERE id='$id'";
    
    $run_profile = mysqli_query($db,$update_profile);

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
    if($run_profile){
        echo "<script>alert('Produk Sukses Update')</script>";
        echo "<script>window.open('shop.php','_self')</script>";
     }
    }
   }
?>