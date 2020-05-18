<?php 

if(isset($_POST['upload'])){
    
    
    $db = mysqli_connect("localhost","root","","authentication");
    
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];
    $nomor = $_POST['nomor'];
    $deskripsi = $_POST['deskripsi'];
    
   

    $target = "product_images/" .basename($_FILES['photo']['name']);
    $image = $_FILES['photo']['name'];
 
  
    $insert_product = "INSERT INTO jualan (nama, harga, lokasi, nomor, deskripsi, image) VALUES ('$nama','$harga','$lokasi','$nomor','$deskripsi','$image')";
    
    $run_product = mysqli_query($db,$insert_product);
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('sell.php','_self')</script>";
     }
    }
}   