<html>

	<?php
		
		session_start();
		require_once('connect.php');
		if(!($_SESSION['adminauth']=='true'))
		{
			header('Location: adlog.php');
		}
		
		if(isset($_POST['sub']))
		{
			if(!ctype_alpha($_POST['city']))
			{
				echo "enter valid First Name";
			}
			else if($_POST['city']!=$_POST['recity'])
			{
				echo "Please Enter Correctly";
			}
			else
			{
				$query="insert into locations values ('".$_POST['city']."');";
				if (mysqli_query($connection, $query)) 
				{
					header('Location:disable.php');
				} 
				else 
				{
					echo "Service already available in given city";
				}
			}
		}
	?>
	<form method='post'>
		<input type='text' name='city' placeholder="Enter City Name to add" required />
		<input type='text' name='recity' placeholder="Enter Again to Confirm" required />
		<input type='submit' name='sub' value="Add" />
	</form>
</html>