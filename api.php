<?php
// api.php
header('Content-Type: application/json');

$token = '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';
$username = '1ndoryu';
$repo = '2upra2-0';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$username/$repo");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: token $token",
    "User-Agent: $username"
));

$response = curl_exec($ch);
curl_close($ch);

echo $response;