<?php

session_start();

$msg = "";
$email = "";
$username = "";
$id = 0;


$db = mysqli_connect("localhost","root","","authentication");
 

if(isset($_POST['deleted_btn'])){
    $nama = $_POST['nama'];
    $delete_profile = "DELETE FROM jualan WHERE nama = '$nama'";
    $runs_profile = mysqli_query($db,$delete_profile);
    if($runs_profile){
        
        echo "<script>alert('Produk Sukses Dihapus')</script>";
        echo "<script>window.open('shop.php','_self')</script>";
     }
    }
?>
