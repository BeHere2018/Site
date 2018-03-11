<?php
//https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
$url="https://www.google.com/recaptcha/api/siteverify";
$secret="6Lcd-ksUAAAAABtZgHcerOvuqe2waHg8LtJIMon_";
$response=$_POST["g-recaptcha-response"];

$data = array('secret' => $secret, 'response' => $response);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
?>