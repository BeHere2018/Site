<?php
echo "test";
$lien = 'https://www.google.com/recaptcha/api/siteverify';
$postfields = array(
    'secret' => '6Lcd-ksUAAAAABtZgHcerOvuqe2waHg8LtJIMon_',
    'password' => $_POST["g-recaptcha-response"]
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $lien);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
curl_exec($curl);
//$return = curl_exec($curl);
curl_close($curl);


?>