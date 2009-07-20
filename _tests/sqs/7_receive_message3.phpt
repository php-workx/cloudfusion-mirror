--TEST--
AmazonSQS::receive_message

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$sqs = new AmazonSQS();
	$response = $sqs->receive_message(SQS_DEFAULT_URL . '/warpshare-unit-test', array(
		'VisibilityTimeout' => 7200
	));
	var_dump($response->status);
?>

--EXPECT--
int(200)
