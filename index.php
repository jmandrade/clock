<?php

//echo date("G:i e");
//echo gmdate("G:i e");
/*
if(($localtime > ) || ($localtime < )){
	$image = 'php-morning.png';
	$bg = '#865f86';
}elseif(($localtime > ) || ($localtime < )){
	$image = 'php-afternoon.png';
	$bg = '#2c87c8';
}elseif(() || ()){
	$image = 'php-evening.png';
	$bg = '#c7b02f';
}else{
	$image = 'php-night.png';
	$bg = '#180629';
}
*/

?>
<html>
<head>
	<script type="text/javascript">
		function redirect(){
			var jsOffset = new Date().getTimezoneOffset();
			var newLocation = "clock.php?jsOffset=" + jsOffset;
			window.location = newLocation;
		}
	</script>
</head>
<body onLoad="redirect()">

</body>
</html>