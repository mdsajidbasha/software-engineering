<html>
	<?php
		
		session_start();
		require_once('connect.php');
		if(!($_SESSION['adminauth']=='true'))
		{
			header('Location: adlog.php');
		}
		
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=strtolower(end($hih));
		
		
		
		if(isset($_POST['confirm']))
		{
			$query="DELETE FROM locations where city='".$res."';";
			if(mysqli_query($connection,$query))
			{
				echo "success";
				header('Location:disable.php');
			}
			else
			{
				echo "Delete Unsuccessful";
			}
		}
		if(isset($_POST['back']))
		{
			header('Location:disable.php');
		}
		
	?>
	
	<form clas="formm" method="post">
		<input type="Submit" name="confirm" value="Confirm Delete" />
		<input type="Submit" name="back" value="Back" />
	</form>
	
</html>