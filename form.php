<?php
session_start();
$_SESSION['message']='';

$mysqli= new mysqli('127.0.0.1','root','newhorizon','accounts');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['password']== $_POST['confirmpassword']){
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = md5($_POST['password']);
    
    $_SESSION['username']=$username;
    $sql= "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
    if($mysqli->query($sql) === true){
      $_SESSION['message']= "Registration Successful! New Account Added with Username : $username";
      header("location: signin.php");
    }
    else{
      $_SESSION['message']= "Error! Couldn't Register Account.";
    }
  }
  else{
    $_SESSION['message']= "Passwords do not match!";
  }
}
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?=$_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" onclick="window.location.replace('file:///home/aswinrprasad/Documents/Git%20Repos/HTMLTEST/signin.html')" />
    </form>
  </div>
</div>



