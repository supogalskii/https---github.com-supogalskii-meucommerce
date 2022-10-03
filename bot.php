<?php

$url = 'https://api.telegram.org/bot5650079437:AAEsfKI3q3UW5q7_XDPP_hhHauakg2XLg6k/sendMessage&#39';

$ch = curl_init($url);
# Setup request to send json via POST.
$payload = json_encode([
    'chat_id' => '-868780808',
    'text' => 'Teste PHP ' . date('D M j G:i:s T Y'),
    'disable_notification' => true,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "
<pre>$result</pre>";