<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'ancy';
	$conn = mysqli_connect($host, $user, $pass, $db);
	if(!$conn){
		die("Connection Error: ".mysqli_connect_error());
	}
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$qry = mysqi_query($conn, "SELECT * FROM reg WHERE username = '{$username}' AND password = '{$password}'");
		$rows = mysqli_num_rows($qry);
		if($rows > 0){
			header("Location:index.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css"></link>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="" method="POST">
          <fieldset class="clearfix">
            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Username" name="username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Password" name="password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
            <div>
				<span style="width:48%; text-align:left;  display: inline-block;">
					<a class="small-text" href="#">Forgot password?</a>
				</span>
				<span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" name="login" value="Sign In"></span>
			</div>
          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
          <img src="http://mitinc.net/attachments/Image/icon_telephone.png" id="logo" />
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>

</body>
</html>