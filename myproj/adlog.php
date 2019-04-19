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
		if(isset($_POST["submitb"]))
		{
			
			$username = (int)$_POST["userID"];
			$password = $_POST["Password"];
			if(($username=='AdminAllTime')&&($password=='QwertAzert09')) 
			{
				$_SESSION['adminauth']='true';
				header('Location: disable.php');
			}
			else
			{
				//echo "wrong username/password";
			}
		}		
	?>
   <head>
   <link rel="stylesheet" type="text/css" href="css/userlogin.css">
   </head>

 <body class="bod">
	
  <form class="form" name="form" method="post" action="">
   <input class="textfield" type="text" placeholder="UserID" name="userID" required /><br><br>
   <input class="textfield" type="password" placeholder ="Password" name="Password"  required><br><br>
   <input type="submit" class="subbutton" name="submitb" value="Login" >
  </form>
 </body>
</html>