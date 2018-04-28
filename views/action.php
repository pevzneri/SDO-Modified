
<?php
print_r($_POST);
exit;

$MC_API_Token = file_get_contents('https://auth.exacttargetapis.com/v1/requestToken');
$decoded = json_decode($MC_API_Token);
$MCtoken = $decoded['accessToken'];



?>
