<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bin/back/farm/user.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/bin/front/vendor/jquery.js"></script>
</head>
<body>

	<form id="basic_data" action="/bin/back/farm/soil_upload.php" method="post" enctype="multipart/form-data">
		<input type="number" name="size" placeholder="Size" required min="0"><br>
		<input type="number" name="lat" style="display: none;" value="25.4670"><input type="number" name="long" style="display: none;" value="91.3662">
		<input type="file" accept="image/*" name="soil" id="soil" required><br>
		<input type="submit" name="submit" required>
	</form>


</body>
</html>