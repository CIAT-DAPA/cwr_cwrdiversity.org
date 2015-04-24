<?php

//print 'echo /usr/local/bin/php -q longTimeTest.php | at now';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"longTimeTest.php");

curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch, CURLOPT_TIMEOUT, 1);

$result_curl = curl_exec($ch);

echo $result_curl;

curl_close($ch);
?>
