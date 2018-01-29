<?php


require_once 'bp_lib.php';

$response = bpCreateInvoice(123456, 1, 'Order description');

echo "<pre>";
print_r($response);

?>