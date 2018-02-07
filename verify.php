<?php
$access_token = '+Lnyv6QnYY32e8Qx0jzRAGvrL4MeYMkYtmtNTlHGPsJKNXFKUetp847BhDWjcozMnfyHNq9ZJ2YB5wfiawKeBRnDtcduqdCRa3gsr2DlmsP+OwGqBhcGsfspcMTiJW0nWbKFDB2EbbtDEOgqFzXl5AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>