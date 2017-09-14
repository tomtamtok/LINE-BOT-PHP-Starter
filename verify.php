<?php
$access_token = 'xS5HQKj7UxMkOBl+zt72vDrcvPfv64KWuIeTR346D8zfaQMPQLAY+BGFH25H+VFdTIy5f9TUyJOXKIDT92G0fkFiTosjHwtiTbccF1xAYj4E9csrR5BQW+XZwuM4TFutSnP7GJLiGvqm+l6ohRohEwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
