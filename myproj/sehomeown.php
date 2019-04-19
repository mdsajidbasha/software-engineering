<html>
	<?php
				
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=(int)strtolower(end($hih));
		
		session_start();
		require_once('connect.php');
		$userID=$_SESSION['user'];
		if(!($_SESSION['authenticated']=='true'))
		{
			header('Location: home.php');
		}
		
		if(isset($_POST['confirm']))
		{
			$query="DELETE FROM houses where houseId=".$res.";";
			if(mysqli_query($connection,$query))
			{
				echo "success";
				header('Location:rentedho.php');
			}
			else
			{
				echo "Delete Unsuccessful";
			}
		}
		if(isset($_POST['back']))
		{
			header('Location:rentedho.php');
		}
		
	?>
	
	<form clas="formm" method="post">
		<input type="Submit" name="confirm" value="Confirm Delete" />
		<input type="Submit" name="back" value="Back" />
	</form>
	
</html>