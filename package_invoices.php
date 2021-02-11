<?php

require ('db_connect.php');
require ('functions.php');

$employer_id = 69;
$invoice_id = 260;
//$statement = $mysqli->prepare("select * from package_invoices where employer_id=$employer_id AND invoice_id=$invoice_id");

$statement = $mysqli->prepare("select * from package_invoices where employer_id=$employer_id");

JB_Process_Querry($statement);

?>