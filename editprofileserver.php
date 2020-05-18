<?php

session_start();

$msg = "";
$email = "";
$username = "";
$facebook ="";
$twitter ="";
$instagram = "";
$id = 0;


$db = mysqli_connect("localhost","root","","authentication");
 

if(isset($_POST['edit_btn'])) {
$email = $_POST['email'];
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$id = $_POST['id'];

 $target = "user_images/" .basename($_FILES['display']['name']);
 $image = $_FILES['display']['name'];

    $update_profile = "UPDATE users SET email='$email',username='$username',fullname='$fullname',phone='$phone',facebook='$facebook',twitter='$twitter',instagram='$instagram',image='$image' WHERE id='$id'";
    
    $run_profile = mysqli_query($db,$update_profile);
    if($run_profile){
        if(move_uploaded_file($_FILES['display']['tmp_name'],$target)) {
        echo "<script>alert('Silahkan Login Untuk Melanjutkan')</script>";
        session_destroy();
        unset($_SESSION['username']);
        echo "<script>window.open('index.php','_self')</script>";
     }
    }
}
if(isset($_POST['delete_btn'])){
    $id = $_POST['id'];
    $delete_profile = "DELETE FROM users WHERE id = '$id'";
    $runs_profile = mysqli_query($db,$delete_profile);
    if($runs_profile){
        echo "<script>alert('Profile Sukses Dihapus')</script>";
        session_destroy();
        unset($_SESSION['username']);
        echo "<script>window.open('index.php','_self')</script>";
     }
    }
?>
