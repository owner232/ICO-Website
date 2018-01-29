<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/give2me/home/autorecommit");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
echo $server_output;

?>