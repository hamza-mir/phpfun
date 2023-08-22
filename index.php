<?php


function getStatus($paymentStatus) {
	echo $paymentStatus;
	return $paymentStatus;
}

$paymentStatus = 'Accepted';
$get = getStatus($paymentStatus);
echo "</br> $get";