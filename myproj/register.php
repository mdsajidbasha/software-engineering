<html>

	<?php
		session_start();
		require_once('connect.php');
		$_SESSION["tfname"]='';
		$_SESSION["tlname"]='';
		$_SESSION["taadhar"]='';
		$_SESSION["tlocation"]='';
		$_SESSION["tcontact"]='';
		$_SESSION["temail"]='';
		$_SESSION["tpassword"]='';
		$_SESSION["trepassword"]='';
		if(isset($_POST['submit']))
		{
			$_SESSION['tfname']=$_POST['fname'];
			$_SESSION['tlname']=$_POST['lname'];
			$_SESSION['taadhar']=$_POST['aadhar'];
			$_SESSION['tlocation']=$_POST['Location'];
			$_SESSION['tcontact']=$_POST['contact'];
			$_SESSION['temail']=$_POST['email'];
			$_SESSION['tpassword']=$_POST['password'];
			$_SESSION['trepassword']=$_POST['repassword'];
			
			if(!ctype_alpha($_POST['fname']))
			{
				$_SESSION["tfname"]='';
				echo "enter valid First Name";
			}
			else if(!ctype_alpha($_POST['lname']))
			{
				$_SESSION["tlname"]='';
				echo "enter valid Last Name";
			}
			else if((!ctype_digit($_POST['aadhar']))||(strlen($_POST['aadhar'])!=12))
			{
				$_SESSION["taadhar"]='';
				echo "enter valid aadhar";
			}
			else if((!ctype_digit($_POST['contact']))||(strlen($_POST['contact'])!=10))
			{
				$_SESSION["tcontact"]='';
				echo "enter valid contact";
			}
			else if(($_POST['password']!=$_POST['repassword'])||(strlen($_POST['password'])<8))
			{
				$_SESSION["tpassword"]='';
				$_SESSION["trepassword"]='';
				echo "enter password corectly and min length 8";
			}
			else
			{
				$query="insert into user values (DEFAULT,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['password']."','".$_POST['aadhar']."','".$_POST['Location']."',".(int)$_POST['contact'].",'".$_POST['email']."');";
				if (mysqli_query($connection, $query)) 
				{
					$loc='Location:pip.php?id='.$_POST['aadhar'];
					header($loc);
				} 
				else 
				{
					echo "Not Allowed Multiple Account with Same AAdhar or Email Or Contact Number";
				}
			}
		}
	?>
	<form method="post" class='formm'>
		<input type='text' class='textf' name='fname' placeholder='Enter Your First Name' value="<?php if(isset($_SESSION['tfname'])){echo $_SESSION['tfname'];}  ?>" required /><br><br>
		<input type='text' class='textf' name='lname' placeholder='Enter Your Last Name' value="<?php if(isset($_SESSION['tlname'])){echo $_SESSION['tlname'];}  ?>" required /><br><br>
		<input type='text' class='textf' name='aadhar' placeholder='Enter Your Aadhar No.' value="<?php if(isset($_SESSION['taadhar'])){echo $_SESSION['taadhar'];}  ?>" required /><br><br>
		<input type='text' class='textf' name='Location' placeholder='Enter Your Location Details' value="<?php if(isset($_SESSION['tlocation'])){echo $_SESSION['tlocation'];}  ?>" required /><br><br>
		<input type='text' class='textf' name='contact' placeholder='Enter Your Contact No.' value="<?php if(isset($_SESSION['tcontact'])){echo $_SESSION['tcontact'];}  ?>" required /><br><br>
		<input type='email' class='textf' name='email' placeholder='Enter Your Email Id' value="<?php if(isset($_SESSION['temail'])){echo $_SESSION['temail'];}  ?>" required /><br><br>
		<input type='password' class='textf' name='password' placeholder='Enter A Password' value="<?php if(isset($_SESSION['tpassword'])){echo $_SESSION['tpassword'];}  ?>" required /><br><br>
		<input type='password' class='textf' name='repassword' placeholder='Re-Enter Password' value="<?php if(isset($_SESSION['trepassword'])){echo $_SESSION['trepassword'];}  ?>" required /><br><br>
		<input type='submit' class='butn' name='submit' Value='Submit' / ><br><br>
	</form>
</html>