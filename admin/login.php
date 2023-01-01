<?php include('../config/constant.php');?>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
    <div class="center">
      <h1>Login</h1>
      <br>
      <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }

      ?>
      <br>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" name="submit" value="Login"> 
        <!-- <div class="signup_link"> -->
          <!-- Not a member? <a href="#">Signup</a> -->
        </div>
      </form>
    </div>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    echo $username = $_POST['username'];
    echo $password = $_POST['password'];
    $sql = "SELECT*FROM tbl_admin WHERE username= '$username'AND password='$password'";
    $res = mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        $_SESSION['login']="<div class='sucess'>Logged in.</div>";
        $_SESSION['user']=$username;
        header('location:'.SITEURL.'admin/index.php');
        
    }
    else
    {
        $_SESSION['login']="<div class='error text-center'>Username or Password didn't match</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
}
?>