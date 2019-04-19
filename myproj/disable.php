<html>
	<head>
	
		
		<?php
			session_start();
			require_once('connect.php');
			
			if(!($_SESSION['adminauth']=='true'))
			{
				header('Location: adlog.php');
			}
			
			echo '<button name="logout"  onclick="location.href = \'adlog.php?id=1\';"  class="topdivbut">Logout</button>';
			echo '<button name="Register"  onclick="location.href = \'addloc.php\';"  class="subbutton">Add a Location</button>';
			
			echo "<br><br><br><p>Locations ::: Delete Any<p><br><br><br>";
			
			$query='SELECT * FROM locations';
			
			$result=mysqli_query($connection,$query);
		
			if(mysqli_num_rows($result)==0)
			{
				echo "no Locations currently";
			}
			
			while ($row = mysqli_fetch_array($result))
			{
				$id=$row['city'];
				
				$divtoprint=  '<div class="housed">
									<div class="detdiv" >
										<p>Location :'.$id.'</p>
										<a href="delloc.php?id='.$id.'">Delete Location</a>
									</div>
								</div>
								<br><br>
								';	
				echo  $divtoprint;
			}
			
			
			echo "<br><br><br><p>Users ::: Delete Any<p><br><br><br>";
			
			
			$query='SELECT * FROM user';
			
			$result=mysqli_query($connection,$query);
		
			if(mysqli_num_rows($result)==0)
			{
				echo "no users currently";
			}
			
			while ($row = mysqli_fetch_array($result))
			{
				$id=$row['UserId'];
				$fn=$row['FName'];
				$ln=$row['LName'];
				$aad=$row['AadharId'];
				$loc=$row['Location'];
				$con=$row['Contact Number'];
				$em=$row['Email'];
				
				$divtoprint=  '<div class="housed">
									<div class="detdiv" >
										<p>UserId:'.$id.'</p>
										<p>First Name:'.$fn.'</p>
										<p>Last Name:'.$ln.'</p>
										<p>Aadhar Number:'.$aad.'</p>
										<p>Location:'.$loc.'</p>
										<p>Contact Number:'.$con.'</p>
										<p>Email:'.$em.'</p>
										<a href="deluser.php?id='.$id.'">Delete User</a>
									</div>
								</div>
								<br><br>
								';	
				echo  $divtoprint;
			}
			
			
		?>
	</head>
</html>
			