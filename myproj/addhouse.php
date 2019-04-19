<html>
	
	<link rel="stylesheet" type="text/css" href="css/addhouse.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<?php
	
		session_start();
		require_once('connect.php');
		$userID=$_SESSION['user'];
		if(!($_SESSION['authenticated']=='true'))
		{
			header('Location: home.php');
		}
		
		$Renter=$_SESSION['user'];
		$query="insert into houses(RenterId,housetype,area,floorno,garden,noofbedrooms,kitchen,noofbathrroms,attachedbathcount,rentcost,advancepay,safetydeposit,fambach,maxpeople,cotsavail,basicinfraprovided,watertankpresence,maxmonthalloc,city,streetorsectorno,pic1,pic2,pic3,pic4,pic5,pic6,pic7,pic8) VALUES (".$Renter.",";
		
		
		if(isset($_POST['submit']))
		{
			$tmp=$_POST['housetype'];
			$query=$query."'".$tmp."',";
			
			$tmp=(int)$_POST['area'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['floorno'];
			$query=$query.$tmp.",";
			
			$tmp=$_POST['minigard'];
			$query=$query."'".$tmp."',";
			
			$tmp=(int)$_POST['noofbed'];
			$query=$query.$tmp.",";
			
			$tmp=$_POST['kitch'];
			$query=$query."'".$tmp."',";
			
			$tmp=(int)$_POST['noofbath'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['atchbath'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['rentco'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['advance'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['safetydepos'];
			$query=$query.$tmp.",";
			
			$tmp=$_POST['usertype'];
			$query=$query."'".$tmp."',";
			
			$tmp=(int)$_POST['maxppl'];
			$query=$query.$tmp.",";
			
			$tmp=(int)$_POST['cotsavail'];
			$query=$query.$tmp.",";
			
			$tmp=$_POST['basicinfra'];
			$query=$query."'".$tmp."',";
			
			$tmp=$_POST['watermotndtank'];
			$query=$query."'".$tmp."',";
			
			$tmp=(int)$_POST['maxmonth'];
			$query=$query.$tmp.",";
			
			$tmp=$_POST['city'];
			$query=$query."'".$tmp."',";
			
			$tmp=$_POST['address'];
			$query=$query."'".$tmp."',";
			
			$extensions= array("jpeg","jpg","png");
			if(!($_FILES['pic1']['size']<=0))
			{
			  echo 1;
			  $errors= array();
			  $file_name = $_FILES['pic1']['name'];
			  $file_tmp = $_FILES['pic1']['tmp_name'];
			  $file_size = $_FILES['pic1']['size'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			if(!($_FILES['pic2']['size']<=0))
			{
				echo 2;
			  $errors= array();
			  $file_name = $_FILES['pic2']['name'];
			  $file_size = $_FILES['pic2']['size'];
			  $file_tmp = $_FILES['pic2']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			if(!($_FILES['pic3']['size']<=0))
			{
				echo 3;
			  $errors= array();
			  $file_name = $_FILES['pic3']['name'];
			  $file_size = $_FILES['pic3']['size'];
			  $file_tmp = $_FILES['pic3']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			if(!($_FILES['pic4']['size']<=0))
			{
				echo 4;
			  $errors= array();
			  $file_name = $_FILES['pic4']['name'];
			  $file_size = $_FILES['pic4']['size'];
			  $file_tmp = $_FILES['pic4']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			if(!($_FILES['pic5']['size']<=0))
			{
				echo 5;
			  $errors= array();
			  $file_name = $_FILES['pic5']['name'];
			  $file_size = $_FILES['pic5']['size'];
			  $file_tmp = $_FILES['pic5']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			else
			{
				$query=$query."null,";
			}
			if(!($_FILES['pic6']['size']<=0))
			{
			  $errors= array();
			  $file_name = $_FILES['pic6']['name'];
			  $file_size = $_FILES['pic6']['size'];
			  $file_tmp = $_FILES['pic6']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			else
			{
				$query=$query."null,";
			}
			if(!($_FILES['pic7']['size']<=0))
			{
			  $errors= array();
			  $file_name = $_FILES['pic7']['name'];
			  $file_size = $_FILES['pic7']['size'];
			  $file_tmp = $_FILES['pic7']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."',";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			else
			{
				$query=$query."null,";
			}
			if(!($_FILES['pic8']['size']<=0))
			{
			  $errors= array();
			  $file_name = $_FILES['pic8']['name'];
			  $file_size = $_FILES['pic8']['size'];
			  $file_tmp = $_FILES['pic8']['tmp_name'];
			  $tmp=explode('.',$file_name);
			  $file_ext=strtolower(end($tmp));
			  
			  if(in_array($file_ext,$extensions)=== false)
			  {
				 $errors[]="extension not allowed, please choose a JPG or JPEG or PNG file.";
			  }
			  
			  if($file_size > 5097152) 
			  {
				 $errors[]='File size must be atmax 2 MB';
			  }
			  if(empty($errors)==true) 
			  {
				 move_uploaded_file($file_tmp,"images/".$file_name);
				 $query=$query."'".$file_name."');";
			  }
			  else
			  {
				 print_r($errors);
			  }
			}
			else
			{
				$query=$query."null);";
			}
			
			echo $query;
			
			if (mysqli_query($connection, $query)) 
			{
				header('Location:rentedho.php');
			} 
			else 
			{
				echo mysqli_error($connection);
			}
		}
	?>
	
	
	<body class="bod">
		<form class= "formc" name="formm" method="post" enctype="multipart/form-data">
		<table>
			<tr>
			<td>House Type:</td>
			<td>
			<select name="housetype">
				<option>Duplex</option>
				<option>Villa</option>
				<option>Flat in Apartment</option>
				<option>PentHouse</option>
				<option>IndependentHouse</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>Area :</td><td><input type="text" name="area" placeholder="Enter Area In sq.ft" required /></td>
			</tr>
			<tr>
			<td>Enter Floor no.(if 4+ -> 5):</td>
			<td>
			<select name="floorno" >
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>Garden Presence:</td>
			<td>
			<select name="minigard">
				<option>No</option>
				<option>Yes</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>No. of BedRooms(if 2+ ->3):</td>
			<td>
			<select name="noofbed">
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>Kitchen Presence:</td>
			<td>
			<select name="kitch">
				<option>No</option>
				<option>Yes</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>No. of Bath Rooms(if 2+ -> 3):</td>
			<td>
			<select name="noofbath">
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			</td>
			</tr>
			<tr>
			<td>No .of Attached Bathrooms:</td>
			<td>
			<select name="atchbath">
				<option>1</option>
				<option>2</option>
			</select>
			</td>
			</tr>
			<tr><td>Rental Cost :</td><td><input type="text" name="rentco" placeholder="EnterRentCostMonthly" required /></td></tr>
			<tr><td>Advance Pay :</td><td><input type="text" name="advance" placeholder="EnterAdvancePay" required /></td></tr>  
			<tr><td>Safety Deposit :</td><td><input type="text" name="safetydepos" placeholder="EnterSafetyDeposit" required </td></tr>  
			<tr>
			<td>Customer Type Allowed:</td>
			<td>
			<select name="usertype" >
				<option>Family</option>
				<option>Boys/Men</option>
				<option>Girls/Women</option>
			</select>
			</td>
			</tr>
			  
			<tr>
			<td>Max People Allowed(8+ -> 9):</td>
			<td>
			<select name="maxppl" >
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
			</select>
			</td>
			</tr>
			  
			<tr>
			<td>Cots/Beds Availble:</td>
			<td>
			<select name="cotsavail" >
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
			</select>
			</td>
			</tr>
			  
			<tr><td>Other Infra Provided :</td><td><input type="text" name="basicinfra" placeholder="Enter Other Basic Infra Provided" required /></td></tr>  
			<tr>
			<td>Water Supply:</td>
			<td>
			<select name="watermotndtank" >
				<option>Yes</option>
				<option>No</option>
			</select>
			</td>
			</tr>
			  
			<tr>
			<td>Max Month Allowed(12+->13):  </td>
			<td>
			<select name="maxmonth">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>			
			</select>
			</td>
			</tr>
			<tr><td>City Name :</td><td><input type="text" name="city" placeholder="Enter CityName" required /></td></tr>  
			<tr><td>Complete Address :</td><td><input type="text" name="address" placeholder="Enter Complete address details" required/></td></tr>  
			<tr><td>Pic 1* :</td><td><input type="file" name="pic1" required /></td></tr>  
			<tr><td>Pic 2* :</td><td><input type="file" name="pic2" required /></td></tr>  
			<tr><td>Pic 3* :</td><td><input type="file" name="pic3" required /></td></tr>  
			<tr><td>Pic 4* :</td><td><input type="file" name="pic4" required /></td></tr>  
			<tr><td>Pic 5 :</td><td><input type="file" name="pic5" /></td></tr>  
			<tr><td>Pic 6 :</td><td><input type="file" name="pic6" /></td></tr>  
			<tr><td>Pic 7 :</td><td><input type="file" name="pic7" /></td></tr>  
			<tr><td>Pic 8 :</td><td><input type="file" name="pic8" /></td></tr>  
			
			<tr><td><button onclick="location.href = 'rentedho.php';" name="back" class="addh">Back</button></td><td><input type="submit" name="submit" value="Submit Details"></td></tr>
		</form>
	</body>
</html>