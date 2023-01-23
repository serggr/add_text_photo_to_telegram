<?php
$curl = curl_init();

$chat_id = 55555555558; // Channel ID
$photo = new CURLFile('cat.jpg');

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.telegram.org/bot5555555555:yrtyrtyrty-tyrtyrtyrtyrty/sendPhoto",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array(
        'chat_id' => $chat_id,
        'photo' => $photo,
        'caption' => 'This is a photo caption'
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>
