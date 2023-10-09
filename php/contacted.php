<?php
//captcha stuff

$recaptcha_secret = '6Ld23AwoAAAAAJzniyTIOFjrD0MJYEIprK4PWVqY';
$recaptcha_response = $_POST['g-recaptcha-response'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $recaptcha_secret, 'response' => $recaptcha_response);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$responseKeys = json_decode($result, true);

if (intval($responseKeys["success"]) !== 1) {
    // CAPTCHA verification failed
	echo json_encode(['error' => 401]);
    exit; // Stop further execution
}

$name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$comment=filter_input(INPUT_POST,'comment',FILTER_SANITIZE_SPECIAL_CHARS);

$api_key = 'pat9MMaDG89SOArV9.3f8e572abc23c6f1818b24b7d6c568b3e513f34a4cdb8be873097dd6c705c706'; // Replace with your Airtable API key
$base_id = 'appFKo32qBFKIMrDG'; // Replace with your Airtable base ID
$table_name = 'tblUsrwk3t3B3ftht'; // Replace with your Airtable table name

$url = "https://api.airtable.com/v0/{$base_id}/{$table_name}";

//$data = '{"records": [{"fields": {"Name":"hello"}}]"}';
$data = array(
    'records' => array(
        array(
            'fields' => array(
                'Name' => $name,
                'email' => $email,
                'comment' => $comment
            )
        )
    )
);

$headers = array(
    'Authorization: Bearer ' . $api_key,
    'Content-Type: application/json'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

curl_close($ch);
$json = json_decode($response, true);

if (!in_array('error', $json)){
	echo json_encode(['success' => 200]);
} else{
	echo json_encode(['error' => 401]);
}
?>