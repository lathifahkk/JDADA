<?php 
    session_start();
    $db = mysqli_connect("localhost","root","","authentication");

    if(isset($_POST['register_btn'])) {
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $phone = mysqli_real_escape_string($db,$_POST['phone']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        
        $password = md5($password);
        $sql = "INSERT INTO users (email,username,phone,password) VALUES ('$email','$username','$phone','$password')";
        mysqli_query($db,$sql);
        $_SESSION['message'] = "Youre Now Logged In";
        $_SESSION['username'] = $username;
        header("location:index.php");
    }
        
    if(isset($_POST['login_btn'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password";
        $result = mysqli_query($db,$sql);
        
        if(!$result || mysqli_num_rows($result)==0){
            $_SESSION['message'] = "Youre Now Logged In";
            $_SESSION['username'] = $username;
            header("location:index.php");
        }
        else {
            $_SESSION['message'] = "Password and username are incorrect";
        }
        
        
    }
?>