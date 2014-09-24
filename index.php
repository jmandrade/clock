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