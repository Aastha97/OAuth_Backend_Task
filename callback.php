<?php
	$code = $_GET['code'];
	if($code==""){
		header('Location: http://localhost/backend_task/');
		exit;
	}
	
	$CLIENT_ID = "81ffd6acaf667372c383";
	$CLIENT_SECRET = "dab5cb650358e0fb2dce0ee1d336de0d956f38a3";
	$URL = "https://github.com/login/oauth/access_token";
	
	$postParams = [
		'client_id' => $CLIENT_ID,
		'client_secret' => $CLIENT_SECRET,
		'code' => $code
	];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$URL);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$postParams);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept: application/json'));
	$response = curl_exec($ch);
	curl_close ($ch);
	$data = json_decode($response);
	
	if($data->access_token !=""){
		session_start();
	$_SESSION['my_access_token_accessToken'] = $data->access_token;
	header('Location: http://localhost/backend_task/');
	exit;
	}
	
	
?>