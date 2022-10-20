<html>
<head>
</head>
<body>
  <?php
    echo '<p>This function checks the user browser type</p>';

    $thebrowser = $_SERVER['HTTP_USER_AGENT'];
    echo $thebrowser;

    echo '<p>To get the current time.</p>';

	$timezone = date_default_timezone_get();
	echo "The current server timezone is: " . $timezone;
	$date = date('d/m/Y h:i:s');
	echo "<p>The current date and time is: " . $date.".</p>";

  ?>
</body>
</html>