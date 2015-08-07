
<?php

/*
include.php
First authored by Taylor Warden on June 1, 2015


The function of this PHP file is to define many variables the Gateway website requires, so when a change is needed, you edit this single file to 
make the necessary changes to the many pages that display the same data.

This file defines:

The Gateway's Name
Name and Email of the operator
Offered Assets
Deposit, Withdrawal, and Transit Fees
Deposit/Withdrawal Delivery Time Estimates

*/


//Declare and instantiate the operatorName variable, store default as QuickGateway Operator:

$operatorName = "QuickGateway Operator"; // string value

//Declare and instantiate the operatorEmail variable, store default as support@yourdomain.com:

$operatorEmail = "support@yourdomain.com "; // string value

//Declare and instantiate the gatewayName variable, store default as Read the README.md file to Change This:

$gatewayName = "QGK V1.0.5 Demo"; // string value

//Declare and instantiate asset array with default BTC:

$asset = array(); $asset['code'] = 'BTC'; // string value

//Declare and instantiate depositFee array with default of 0.0015BTC (as asset[0] is equal to BTC):

$depositFee = array(); $depositFee['amount'] = '0.0015'; // floating point value

//The above is also true for:

$withdrawalFee = array(); $withdrawalFee['amount'] = '0.0015'; // floating point value

//Declare and instantiate the optional transitFee array. As asset[0] relates to BTC, an example of a transit 
//fee of 0.0025% on each transaction would be:

//This is an optional array

$transitFee = array(); $transitFee['amount'] = '0.0025'; // floating point value

//From: https://github.com/whotooktwarden/QuickGatewayKit/wiki/Proposal:-include.php

//Array: depositDeliveryEstimate, an array with three dimensions to define estimated delivery times for your
//IOUs on request of a deposit or a withdrawal (in this case a deposit).
//For example depositDeliveryEstimate[0][0][0] could define, relating to asset[0] as BTC, a 1-3 hour estimated
//delivery time for their BTC IOU to be processed by the Gateway relating to depositDeliverEstimate[0][0][0]
//storing 0,1,3.

//Declare and instantiate the array:

$depositDeliveryEstimate = array(); $depositDeliveryEstimate['minHours'] = 1; // int value
$depositDeliveryEstimate['maxHours'] = 24; // int value
$depositDeliveryEstimate['asset'] = 'BTC'; // string value

//The above is also true for:

$withdrawalDeliveryEstimate = array(); $withdrawalDeliveryEstimate['minHours'] = 1; // int value
$withdrawalDeliveryEstimate['maxHours'] = 24; // int value
$withdrawalDeliveryEstimate['asset'] = 'BTC'; // string value

return $withdrawalDeliveryEstimate['maxHours'];
return $withdrawalDeliveryEstimate['asset'];
return $depositDeliveryEstimate['maxHours'];
return $depositDeliveryEstimate['asset'];
return $asset;
return $transitFee;
return $depositFee;
return $withdrawalFee;
return $operatorEmail;
return $operatorName;
return $gatewayName;
?>
