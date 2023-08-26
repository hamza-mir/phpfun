<?php

declare(strict_types=1);

function getStatus(string $paymentStatus): ?string {
	echo $paymentStatus;
	return $paymentStatus;
}

$paymentStatus = 'Accepted';
$get = getStatus($paymentStatus);
echo "</br> $get";
echo "test";