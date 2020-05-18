<?php

$people = "";
$emails = "";

$errors = array();

$db = mysqli_connect("localhost","root","","authentication");

//Registers users

if(isset($_POST['rep_btn'])) {
$people = mysqli_real_escape_string($db,$_POST['people']);
$emails = mysqli_real_escape_string($db,$_POST['emails']);
$nomorhp = mysqli_real_escape_string($db,$_POST['nomorhp']);
$pesan =   mysqli_real_escape_string($db,$_POST['pesan']);

//Form validation

if(empty($people)) {
    array_push($errors,"Nama is Required");
}
if(empty($emails)){
    array_push($errors,"emails is Required");
}
    
if(empty($nomorhp)) {
    array_push($errors,"Phone Number is Required");
}

if(empty($pesan)){
array_push($errors,"Massage is Required");

}

if(count($errors)==0){
    $sql = "INSERT INTO contact (people,emails,nomorhp,pesan) VALUES ('$people','$emails','$nomorhp','$pesan')";
    $run_product = mysqli_query($db,$sql);
     if($run_product){
        echo "<script>alert('Report has been submitted sucessfully')</script>";
        echo "<script>window.open('contactus.php','_self')</script>";
     }
    }
}
?>