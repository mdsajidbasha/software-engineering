<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
		session_start();
		require_once('connect.php');
		$userID=$_SESSION['user'];
		if(!($_SESSION['authenticated']=='true'))
		{
			header('Location: home.php');
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if(!empty($_POST["locinput"]))
			{
					$cityinp=$_POST['locinput'];
					$query = "SELECT * FROM locations WHERE city like '%".$cityinp."%';";
					$result = mysqli_query($connection,$query);
					echo $query;
					if(mysqli_num_rows($result)>0)
					{
						$_SESSION['city']=$_POST['locinput'];
						header('Location: availhomes.php');
					}
					else
					{
						printf("Service not available in given city");
					}
			}
		}
	?>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/searchhome.css">
	</head>

	<body class="bod">
		<div class="topdiv">
			<button name="viewrent"  onclick="location.href = 'rentedho.php';"  class="topdivbut">Rent</button>
			<button name="logout"  onclick="location.href = 'home.php?id=1';"  class="topdivbut">Logout</button>
		</div>
		<form class="searchform" action="" method="post">
			<input type="text" class="searchinp" name="locinput" placeholder="Enter city"/><br><br>
			<input type="submit" class="searchok" value=""/><br><br>
		</form>
	</body>
</html>