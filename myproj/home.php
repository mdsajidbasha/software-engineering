<html>
	<?php
		session_start();
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=(int)strtolower(end($hih));
		if($res==1)
		{
			$_SESSION = array();
		}
		$_SESSION["tuserID"]='';
		require_once('connect.php');
		if(isset($_POST["submitb"]))
		{
			$_SESSION["tuserID"]=$_POST['userID'];
			$username = (int)$_POST["userID"];
			$password = $_POST["Password"];
			$query = "SELECT UserId FROM user WHERE UserId =".$username." and Password = '".$password."';";
			$result = mysqli_query($connection,$query);
			if(mysqli_num_rows($result)>0) 
			{
				$_SESSION["authenticated"] = 'true';
				$_SESSION["user"]=$username;
				header('Location: searchhome.php');
			}
		}

	?>
   <head>
   <link rel="stylesheet" type="text/css" href="css/userlogin.css">
   </head>

 <body class="bod">
	
  <form class="form" name="form" method="post" action="">
   <input class="textfield" type="text" placeholder="UserID" name="userID" value="<?php if(isset($_SESSION['tuserID'])){echo $_SESSION['tuserID'];}  ?>" required /><br><br>
   <input class="textfield" type="password" placeholder ="Password" name="Password"  required /><br><br>
   <input type="submit" class="subbutton" name="submitb" value="Login" />
   <button name="Register"  onclick="location.href = 'register.php';"  class="subbutton">Register</button>
  </form>
 </body>
</html>