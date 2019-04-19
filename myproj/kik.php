<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		$tmp=$_SERVER['QUERY_STRING'];
		$hih=explode('=',$tmp);
		$res=end($hih);
		
		$tmp='<image src="images/'.$res.'">';
		echo $tmp;
	?>
</html>