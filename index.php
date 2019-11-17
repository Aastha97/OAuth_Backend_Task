<?php
	session_start();
	$accessToken = $_SESSION['my_access_token_accessToken'];
?>
<html>
<head>
	<title>index</title>
</head>
<body>
<?php
	echo '<p>Access Token <br> <code>'.$accessToken.'</code><br></p>';
	if($accessToken!="")
	{
		echo'Logged in';
	}
	else
	{
		echo'<p><a href="https://github.com/login/oauth/authorize?client_id=81ffd6acaf667372c383">sign in with GitHub</a></p>';
	}
?>
</body>
</html>