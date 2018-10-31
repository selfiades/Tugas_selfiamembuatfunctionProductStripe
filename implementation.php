<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
// INPUT UPDATE
$data=["ID"=>"prod_Dt692FpOvPNnE2",
        "name"=>"celana",
		"caption"=>"putih",
	   "description"=>"kemeja",];
$result = $myStripe->update_product($data);
echo "<pre>";print_r($result);

$myStripe = new Stripegateway();
// delete
$data=["ID"=> "prod_Dt692FpOvPNnE2"];
$result = $myStripe->delete_Product($data);
echo "<pre>";print_r($result);

?>
