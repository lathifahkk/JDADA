<?php

session_start();

$email = "";
$username = "";

$errors = array();

$db = mysqli_connect("localhost","root","","authentication");

//Registers users

if(isset($_POST['register_btn'])) {
$email = mysqli_real_escape_string($db,$_POST['email']);
$username = mysqli_real_escape_string($db,$_POST['username']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$facebook = mysqli_real_escape_string($db,$_POST['facebook']);
$twitter = mysqli_real_escape_string($db,$_POST['twitter']);
$instagram = mysqli_real_escape_string($db,$_POST['instagram']);

//Form validation

if(empty($email)) {
    array_push($errors,"Email is Required");
}
if(empty($username)){
    array_push($errors,"Username is Required");
}
    
if(empty($phone)) {
    array_push($errors,"Phone is Required");
}

if(empty($password)){
    
array_push($errors,"Password is Required");

}


//Check Apabila ada user yang sama

$user_check_query = "SELECT * FROM 'users' WHERE username = '$username' or email = '$email' LIMIT 1 ";
    
$result == mysqli_query($db,$user_check_query);
$user == mysqli_fetch_assoc($result);

if($user){
    if($user['username']===$username)array_push($errors, "Username Already Exisist");
    if($user['email']===$email)array_push($errors, "Email Already Exisist");
}

//Register No Erorr

if(count($errors)==0){
    $password= md5($password);
    $sql = "INSERT INTO users (email,username,phone,password) VALUES ('$email','$username','$phone','$password')";
    
    mysqli_query($db,$sql);
    $_SESSION['username'] = $username;
    $_SESSION['sukses'] = " Youre Now Logged In";
    
    header("location: operation.php");
    
    }
}

//Login 

 if(isset($_POST['login_btn'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        
     
     if(empty($username)){
        array_push($errors,"Username is Required");
     }
     
     if(empty($password)){
    
         array_push($errors,"Password is Required");

     }
     
        if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['message'] = "Youre Now Logged In";
            $_SESSION['username'] = $username;
            header("location: operation.php");
        }
        else {
            array_push($errors,"The username/password combination inccorect");
        }
        
        
    }
 }

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
