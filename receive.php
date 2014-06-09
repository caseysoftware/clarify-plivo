<?php

include 'vendor/autoload.php';

$apiKey = 'update with your api key';

$recording_url = $_POST['RecordUrl'];

$jsonData = '{"to": "'.$to.'", "from": "'.$from.'"}';

$bundle = new OP3Nvoice\Bundle($apiKey);
$bundle->create($recording_url, 'phone recording', '', '', $jsonData);