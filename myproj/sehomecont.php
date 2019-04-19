<html>
	<body class="hed">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/sehomecont.css">
	
	<?php
	
		session_start();
		require_once('connect.php');
		$userID=$_SESSION['user'];
		if(!($_SESSION['authenticated']=='true'))
		{
			header('Location: home.php');
		}
		
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=(int)strtolower(end($hih));
		
		$query="select * from houses where houseId=".$res.";";
		$result=mysqli_query($connection,$query);
		$row = mysqli_fetch_array($result);
		$ht=$row['housetype'];
		$area=$row['area'];
		$florno=$row['floorno'];
		$garden=$row['garden'];
		$nobed=$row['noofbedrooms'];
		$kitch=$row['kitchen'];
		$nobath=$row['noofbathrroms'];
		$atchbtc=$row['attachedbathcount'];
		$rent=$row['rentcost'];
		$advance=$row['advancepay'];
		$safedepo=$row['safetydeposit'];
		$fambach=$row['fambach'];
		$maxppl=$row['maxpeople'];
		$cots=$row['cotsavail'];
		$infra=$row['basicinfraprovided'];
		$water=$row['watertankpresence'];
		$maxm=$row['maxmonthalloc'];
		$city=$row['city'];
		$compadd=$row['streetorsectorno'];
	?>
		<div class="adddiv">
			<button onclick="location.href = 'availhomes.php';" name="add" class="addh">Back</button>
		</div>
		<div>
			<?php
					$tmp=$row['pic1'];
					$str='<a href="kik.php?id='.$tmp.'">
						<img src="images/'.$tmp.'" alt="appropriate alternative text goes here" width=250 height=200>
					</a>';
					echo $str;
					$tmp=$row['pic2'];
					$str='<a href="kik.php?id='.$tmp.'">
						<img src="images/'.$tmp.'" alt="appropriate alternative text goes here" width=250 height=200>
					</a>';
					echo $str;
					$tmp=$row['pic3'];
					$str='<a href="kik.php?id='.$tmp.'">
						<img src="images/'.$tmp.'" alt="appropriate alternative text goes here "width=250 height=200>
					</a>';
					echo $str;
					$tmp=$row['pic4'];
					$str='<a href="kik.php?id='.$tmp.'">
						<img src="images/'.$tmp.'" alt="appropriate alternative text goes here "width=250 height=200>
					</a>';
					echo $str;
					
					if(!is_null($row['pic5']))
					{
						$tmp=$row['pic5'];
						$str='<a href="kik.php?id='.$tmp.'">
							<img src="images/'.$tmp.'" alt="appropriate alternative text goes here" width=250 height=200>
						</a>';
						echo $str;
					}
					if(!is_null($row['pic6']))
					{
						$tmp=$row['pic6'];
						$str='<a href="kik.php?id='.$tmp.'">
							<img src="images/'.$tmp.'" alt="appropriate alternative text goes here "width=250 height=200>
						</a>';
						echo $str;
					}
					if(!is_null($row['pic7']))
					{
						$tmp=$row['pic7'];
						$str='<a href="kik.php?id='.$tmp.'">
							<img src="images/'.$tmp.'" alt="appropriate alternative text goes here "width=250 height=200>
						</a>';
						echo $str;
					}
					if(!is_null($row['pic8']))
					{
						$tmp=$row['pic8'];
						$str='<a href="kik.php?id='.$tmp.'">
							<img src="images/'.$tmp.'" alt="appropriate alternative text goes here "width=250 height=200>
						</a>';
						echo $str;
					}
			?>
		</div>
		<div>
			<br><br>
			<?php echo "House Type \t: ".$ht;?>
			<br><br>
			<?php echo "Area in Sq.ft  : ".$area;?>
			<br><br>
			<?php echo "Floor No.   : ".$florno;?>
			<br><br>
			<?php echo "Garden Present  : ".$garden;?>
			<br><br>
			<?php echo "No. of bedrooms   : ".$nobed;?>
			<br><br>
			<?php echo "Kitchen Present : ".$kitch;?>
			<br><br>
			<?php echo "No. of BathRooms : ".$nobath;?>
			<br><br>
			<?php echo "No.of Attached Bathrooms : ".$atchbtc;?>
			<br><br>
			<?php echo "Monthly Rent Cost : Rs.".$rent;?>
			<br><br>
			<?php echo "Advance to be Paid : Rs.".$advance;?>
			<br><br>
			<?php echo "Safety Deposit : Rs.".$safedepo;?>
			<br><br>
			<?php echo "Allowed People : ".$fambach;?>
			<br><br>
			<?php echo "Max .People Allowed : ".$maxppl;?>
			<br><br>
			<?php echo "Cots Available : ".$cots;?>
			<br><br>
			<?php echo "Basic Infra Provided : ".$infra;?>
			<br><br>
			<?php echo "Water Supply : ".$water;?>
			<br><br>
			<?php echo "Renting Available for Months : ".$maxm;?>
			<br><br>
			<?php echo "City : ".$city;?>
			<br><br>
			<?php echo "Complete Address : ".$compadd;?>
			<br><br>
		</div>
	</body>
</html>
