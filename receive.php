<?php

include 'vendor/autoload.php';

$apiKey = 'update with your api key';

$recording_url = $_POST['RecordUrl'];

$recording_start = (int) $_POST['RecordingStartMs'];
$recording_end = (int) $_POST['RecordingEndMs'];

$jsonData = '{"started": "'.date('Y-m-d H:i:s', $recording_start).'", "ended": "'.date('Y-m-d H:i:s', $recording_end).'"}';

$bundle = new OP3Nvoice\Bundle($apiKey);
$bundle->create($recording_url, 'phone recording', '', '', $jsonData);