<?php
include 'config.php';
error_reporting(0);
 
session_start();
if (isset($_SESSION['email']) != '') {
    header("Location: login.php");
}
$err    = "";
$sukses = "";

$email  = "";
 
if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($email == ''){
        $err = "silahkan masukkan email";
    }
    elseif($password != $cpassword){
        $err ="password tidak sama";
    }else{
        $sql1   = "select * from pembeli where email = '$email'";
        $q1     = mysqli_query($conn,$sql1);
        $n1     = mysqli_num_rows($q1);

        if($n1<1){
            $err = "Email : <b>$email</b> tidak ditemukan";
        }
    }
    

    if(empty($err)){
        $sql1   = "update pembeli set password = '$cpassword' where email ='$email'";
        mysqli_query($conn,$sql1);
        
        if($n1<1){
            $err = "Email : <b>$email</b> tidak ditemukan";
        }else{
            $sukses  = "password berhasil diganti silahkan <a href='login.php'>Login<a/> Kembali";
            
        }
        

    }

 
    
    
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="lupa_password.css">

 <title>Lupa password</title>
</head>
<body>
 <div class="container">
  <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset Password</p>
    <?php if($err){echo "<div class='error'>$err</div>";}?>
    <?php if($sukses){echo "<div class='sukses'>$sukses</div>";}?>
    
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
    </div>
    <div class="input-group">
    <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
   </div>
   
   <div class="input-group">
    <button name="submit" class="btn">Ganti Password</button>
   </div>

   <p class="login-register-text"><a href="login.php">Login </a></p>
  </form>
 </div>
</body>
</html>