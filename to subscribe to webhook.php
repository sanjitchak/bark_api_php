<?php

 
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.bark.com/webhooks",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS=>array(
    'url' => 'https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NmQwNTZkMDYzMzA0Mzc1MjZmNTUzNSI_3D_pc',
    'event' => 'new.bark'
),
CURLOPT_HTTPHEADER => array(
"Authorization: Bearer {token}",
"Accept: application/vnd.bark.pub_v1+json"
  ),
 ));

$response = curl_exec($curl);

$data = json_decode($response, true);

echo "<pre>";
print_r($data);

?>
