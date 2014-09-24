<?php

$imagePath = 'http://making-the-internet.s3.amazonaws.com/';

$jsOffset = $_GET['jsOffset'];
$offset = '-'.$jsOffset.' minutes';

$currentUserMinutes = (gmdate('G', strtotime($offset))*60)+(gmdate('i'));
$currentUserTime = (gmdate('g:iA', strtotime($offset)));
$userTimeZone = $jsOffset/60;

if($userTimeZone > 0){
	$userTimeZone = '+'.$userTimeZone;
}else{
	$userTimeZone = '-'.$userTimeZone;
}

$morningStart = 5*60;
$morningEnd = 11*60+59;
$afternoonStart = 12*60;
$afternoonEnd = 15*60+59;
$eveningStart = 16*60;
$eveningEnd = 19*60+59;
$nightStart = 20*60;
$nightEnd = 4*60+59;

if(($currentUserMinutes > $morningStart) && ($currentUserMinutes < $morningEnd)){
	$image = 'php-morning.png';
	$bg = '#865f86';
}elseif(($currentUserMinutes > $afternoonStart) && ($currentUserMinutes < $afternoonEnd)){
	$image = 'php-afternoon.png';
	$bg = '#2c87c8';
}elseif(($currentUserMinutes > $eveningStart) && ($currentUserMinutes < $eveningEnd)){
	$image = 'php-evening.png';
	$bg = '#c7b02f';
}else{
	$image = 'php-night.png';
	$bg = '#180629';
}

?>

<html>
<head>
	<style type="text/css">
		body {
		    background-color: <?php echo $bg; ?>;
		    text-align:center;
		}
	</style>
</head>
<body>
	<h1>It is: <?php echo $currentUserTime; ?></h1>
	<h3>Your time zone is: GMT<?=$userTimeZone?></h3>
	<img src="<?php echo $imagePath; ?><?php echo $image; ?>">
</body>
</html>