<?php 

$errors = array();

if(isset($_POST['upload'])){
    
    
    $db = mysqli_connect("localhost","root","","authentication");
    $orang = $_POST['orang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];
    $nomor = $_POST['nomor'];
    $deskripsi = $_POST['deskripsi'];
    
   

    $target = "product_images/" .basename($_FILES['photo']['name']);
    $image = $_FILES['photo']['name'];

	if(empty($orang)) {
		array_push($errors,"Email is Required");
}
    if(empty($nama)) {
		array_push($errors,"Email is Required");
}
	if(empty($harga)){
		array_push($errors,"Username is Required");
}
    
	if(empty($lokasi)) {
		array_push($errors,"Phone is Required");
}

	if(empty($nomor)){
		array_push($errors,"Password is Required");
}
	if(empty($deskripsi)){
		array_push($errors,"Password is Required");
}
	if(empty($image)){
		array_push($errors,"Password is Required");
}
 

if(count($errors)==0){

    $insert_product = "INSERT INTO jualan (orang,nama, harga, lokasi, nomor, deskripsi, image) VALUES ('$orang','$nama','$harga','$lokasi','$nomor','$deskripsi','$image')";
    
    $run_product = mysqli_query($db,$insert_product);
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('shop.php','_self')</script>";
     }
    }
   }
}	
?>