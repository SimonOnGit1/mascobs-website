<?php

$context = stream_context_create(array(
    'http' => array('ignore_errors' => true),
    ));

$response = file_get_contents('https://bht.bet/api/dzWJjyef5PIbA1nMjQPW2KTTy1gfqUiw/bonuses', false, $context);
	$values = json_decode($response);
	$i=0;
?>