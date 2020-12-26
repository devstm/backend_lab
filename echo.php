<?php
$message = array('number' => '', 'data' => '', 'myName' => '');
$message['number'] = $_POST['number'];
$message['data'] = $_POST['message'];
$message['myName'] ='Saleh T. Marouf';
$JSON = json_encode($message);

echo $JSON;
?>