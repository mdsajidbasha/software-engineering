<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/rentedho.css">
	<body class="body">
	<div class="adddiv">
		<button onclick="location.href = 'searchhome.php';" name="back" class="addh">Back to Search</button>
		<button onclick="location.href = 'addhouse.php';" name="add" class="addh">Add House</button>
	</div>
	<div>
	<?php
		session_start();
		require_once('connect.php');
		$userID=$_SESSION['user'];
		if(!($_SESSION['authenticated']=='true'))
		{
			header('Location: home.php');
		}
		
		$query="SELECT * FROM houses where RenterId=".$userID.";";
		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result)==0)
		{
			echo "no houses rented currently";
		}
		else
		{
			while ($row = mysqli_fetch_array($result))
			{
				$hosid=$row['houseId'];
				$imgsrc=$row['pic1'];
				$typeh=$row['housetype'];
				$rentc=$row['rentcost'];
				$loc=$row['streetorsectorno'];
				$cit=$row['city'];
				$divtoprint=  '<div class="housed">
									<div class="hiimage">
										<input type="image" src="images/'.$imgsrc.'" height="270"/>
									</div>
									<div class="detdiv" >
										<p>Type:'.$typeh.'</p>
										<p>RentCost:'.$rentc.'</p>
										<p>City:'.$cit.'</p>
										<p>Location:'.$loc.'</p>
										<button onclick="location.href = \'sehomeown.php?id='.$hosid.'\';" name="del" class="addh">Delete</button>
									</div>
								</div>
								';
				
				echo  $divtoprint;
			}
		}
	?>
	</div>
<html>
