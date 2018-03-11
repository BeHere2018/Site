<?php

echo $_POST["g-recaptcha-response"];
$url="https://www.google.com/recaptcha/api/siteverify";
$secret="6Lcd-ksUAAAAABtZgHcerOvuqe2waHg8LtJIMon_";
$response=$_POST["g-recaptcha-response"];

$data = ['secret' => $secret, 'response' => $response,];


?>
<form method="post" action=<?php echo $url?>>
<input type = "hidden" value=<?php echo $secret?> name="secret">
<input type ="hidden" value =<?php echo $response?> name ="response">
<input type ="submit">




</form>