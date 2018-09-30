<?php
session_start();
$_SESSION['message']='';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$mysqli= new mysqli('localhost','root','newhorizon','accounts');
$name = $mysqli->real_escape_string($_POST['username']); 
$res= $mysqli->query("SELECT * FROM users WHERE username='$name'");
if( $res->num_rows <= 0 ){
	$_SESSION['message']="User does not exist.";
} 
else
{	
	$user = $res->fetch_assoc();
   	$pass = md5($_POST['password']);
    if($pass===$user['password']){
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;
        header("location: serach.php");
    }
	else
	{
		$_SESSION['message']="You have entered the wrong password. Try again.";
	}
}
}
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Log in</h1>
    <form class="form" action="sign.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?=$_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <p class="create-account-callout mt-3"></br>
        New User? </br>
        <a data-ga-click="Sign in, switch to sign up" href="form.php"><font size=3 color="red">Create an account</font></br></br></a>
      </p>
      <input type="submit" value="Sign in" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>


