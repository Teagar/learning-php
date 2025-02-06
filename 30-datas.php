<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('D m Y');

$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');

$payment_date = mktime(15, 20, 00, 02, 15, 2025);
echo date('d/m/y - h:i', $payment_date);
