<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		
		require_once('connect.php');
		
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=end($hih);
		
		$query="SELECT * from user where AadharId='".$res."';";
		
		$result=mysqli_query($connection,$query);
		$row = mysqli_fetch_array($result);
		$ht=$row['UserId'];
		
		echo "IMPORTANT :: your user id is ".$ht;
		echo "<br>Click Continue to goto Login Page<br>";
	?>
	<br>
	<button onclick="location.href = 'home.php';" name="Login" class="addh">Continue</button>
</html>