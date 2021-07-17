<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>



body {margin:0;}

.navbar {
  overflow: hidden;
  top:0;
  background-color:coral;
  position:fixed;
  height:60px;
  width: 100%;
}


.navbar a {
    margin-left: 20px;
  float: left;
  display: block;
  color: #f2f2f2;
  font-weight:bold;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 21px;
}

.navbar a:hover {
  background: pink;
  border-radius:20px;
  border:none;
  color: black;
}



    .e
    {
        color:red;
    }
    body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
    }
    
    input[type=submit]
{
    color:blue;
    font-size:20px;
    border:none;
   border-radius:20px;
  background-color:pink;
  height:40px;
  width:80px;
}

    html {
  height: 100%;
}


.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}



.login-box input[type=submit]:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box input[type=submit] span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box input[type=submit] span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box input[type=submit] span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box input[type=submit] span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

    
    </style>


<?php



include 'db_conn.php';
if(isset($_SESSION['name']))
{
   
echo ("<script LANGUAGE='JavaScript'>
window. alert('You are already logged in! logout to view Home page');
window. location. href='index.php';
</script>");
    
}
else
{

$e1=null;
$e2=null;

if(isset($_POST['btn']))
{

$errors = array();
$uname=$_POST['name'];
$pass=$_POST['pass'];
if($uname==null)
{
  $e1="User name required";
  array_push($errors,"name");
}

if($pass==null)
{
  $e2="Password required";
  array_push($errors,"pass");
}




if(count($errors) == 0)
{
   if($uname=='padma'&&$pass=='denni')
   {

    $_SESSION['name']=$uname;
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Succesfully logged in');
    window. location. href='data.php';
    </script>");
   }else{
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Wrong username or password');
    window. location. href='adminn.php';
    </script>");
   }
}

}

}
?>

</head>
<body>
    
<div class="navbar">

<a href="index.php">Home</a>

</div>


<br>

<form action="" method="POST">
<div class="login-box">
  <h2>Login</h2>
  <form action="" method="POST">
    <div class="user-box">
      <input type="text" name="name" >
      <label>Username</label>
      <div class="e"><?php echo $e1; ?></div>
      <br>
    </div>
    <div class="user-box">
      <input type="password" name="pass">
      <label>Password</label>
      <div class="e"><?php echo $e2; ?></div>
      <br>
    </div>

  
        
    <input type="submit" name="btn">
  
  </form>
</div>


</body>
</html>