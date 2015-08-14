<?php

//$content = file_get_contents("http://www.cba.am/am/SitePages/Default.aspx");

//preg_match('#<b>EUR</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $EURmatch);
//preg_match('#<b>GBP</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $GBPmatch);

//$gbp = $GBPmatch[3];
//$eur = $EURmatch[3];

//echo "EUR: $eur  GBP: $gbp <br /><br />";

//Above example is from http://stackoverflow.com/questions/7144844/fetching-data-from-another-website-with-php

$content = file_get_contents("http://coinmarketcap.com/");
$xrppattern = '/\/ripple\/#markets" class="price" data-usd="(\d*\.)?\d+/';

preg_match($xrppattern, $content, $xrpmatch);
$firstreturn = json_encode($xrpmatch); //converts the array to a string
//echo "first return is: $firstreturn <br />";  //displays the matched string

$findme = 'd=\"'; //looks for the ending portion of the data-usd string from coinmarketcap.com
$pos = strpos($firstreturn, $findme);  //Find the position of the above string in the matched case
//echo "pos: $pos <br />";  //displays the position
$xrp = substr($firstreturn, ($pos+4), 9); //Gets up to 10 digits of data from the data-usd field
//echo "str: $xrp <br />"; // displays it to the user

echo "XRP is $xrp USD each.<br />"; //returns XRP with USD price

//Remove comments to debug the array
//echo "xrp match, regex return: " ;
//print_r($xrpmatch);
//echo "<br />";
//echo "json:", json_encode($xrpmatch), "<br />";

//fetch the USD to CAD exchange rate from http://www.bankofcanada.ca/stats/assets/rates_rss/closing/en_USD_CLOSE.xml
//multiply the result of $xrp by the result of $exchangeRate to find $cadxrprate
//CA:\s[0-9.]{2,} first match

$content2 = file_get_contents("http://www.xe.com/currencyconverter/convert/?Amount=1&From=USD&To=CAD");
//echo $content2;
$cadpattern = '/[0-9](.\d*)&nbsp;CAD/';
$findcad = '/[0-9](.\d*)/';

preg_match($cadpattern, $content2, $cadmatch);
$thereturn = json_encode($cadmatch); //converts the array to a string
//echo "the return is: $thereturn <br />";  //displays the matched string
//echo "cad match is: $cadmatch <br />";  //displays the matched string 
$search = json_encode($thereturn);
//echo "search is: $search <br />";  //displays the matched string

preg_match($findcad, $search, $returnedmatch);
$cadstr = json_encode($returnedmatch);

$findme = '"'; //looks for the ending portion of the data-usd string from coinmarketcap.com
$pos = strpos($cadstr, $findme);  //Find the position of the above string in the matched case
//echo "pos: $pos <br />";  //displays the position
$cad = substr($cadstr, ($pos+1), 6); //Gets up to 7 digits of data from the data-usd field
//echo "cadstr: $cadstr <br />"; // displays it to the user
//echo "cad: $cad <br />"; // displays it to the user
echo "The USD/CAD exchange rate is currently $cad CAD per USD.<br />"; //returns XRP with USD price

$xrpincad = $xrp * $cad;

echo "Each XRP is $xrpincad in CAD. <br /><br /><hr>";

$exchangeRate = $cad;
$ripplesCAD = $xrpincad;
$ripplesUSD = $xrp;

//return $exchangeRate;
//return $ripplesCAD;
//return $ripplesUSD;

$goldContents = "https://www.quandl.com/api/v1/datasets/WGC/GOLD_DAILY_CAD.json?sort_order=asc?exclude_headers=true?column=2";
$contentGoldPrice = file_get_contents($goldContents);
$findGoldPrice = '/\"premium\":false,"data":\[\[\"[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]",[0-9][0-9][0-9][0-9].[0-9]\],/';
preg_match($findGoldPrice, $contentGoldPrice, $trimGoldPrice);
$findAUPrice = '/[0-9][0-9][0-9][0-9][.][0-9]/';
$jsonTrimGoldPrice = json_encode($trimGoldPrice);
//echo "$jsonTrimGoldPrice<br />";
preg_match($findAUPrice, $jsonTrimGoldPrice, $XAUinCAD);
//echo $contentGoldPrice;
$jsonXAUinCAD = json_encode($XAUinCAD);

$findme = '"'; //looks for the ending portion of the data-usd string from coinmarketcap.com
$pos = strpos($jsonXAUinCAD, $findme);  //Find the position of the above string in the matched case
//echo "pos: $pos <br />";  //displays the position
$XAUstr = substr($jsonXAUinCAD, ($pos+1), 6); //Gets up to 7 digits of data from the data-usd field
//echo "cadstr: $cadstr <br />"; // displays it to the user
//echo "cad: $cad <br />"; // displays it to the user

echo "One troy ounce of Gold (XAU) is $XAUstr in Canadian Dollars.<br /><br /><hr>";

$getXagateBTCOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/BTC+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/BTC.~Xagate</a>';
$BTCOrdersArray = file_get_contents($getXagateBTCOrders);
$BTCOrdersJson = json_encode($BTCOrdersArray);
echo "This example is the ~Xagate order book for $getXagateBTCOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getXagateNXTOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/NXT+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/NXT.~Xagate</a>';
$NXTOrdersArray = file_get_contents($getXagateNXTOrders);
$NXTOrdersJson = json_encode($NXTOrdersArray);
echo "This example is the ~Xagate order book for $getXagateNXTOrders <br />";
//echo $NXTOrdersJson;
//echo $NXTOrdersArray;

$getXagateLTCOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/LTC+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/LTC.~Xagate</a>';
$LTCOrdersArray = file_get_contents($getXagateLTCOrders);
$LTCOrdersJson = json_encode($LTCOrdersArray);
echo "This example is the ~Xagate order book for $getXagateLTCOrders <br />";
//echo $LTCOrdersJson;
//echo $LTCOrdersArray;

$getXagateXAGOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/XAG+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/XAG.~Xagate</a>';
$XAGOrdersArray = file_get_contents($getXagateXAGOrders);
$XAGOrdersJson = json_encode($XAGOrdersArray);
echo "This example is the ~Xagate order book for $getXagateXAGOrders <br />";
//echo $LTCOrdersJson;
//echo $LTCOrdersArray;

$getXagateXAUOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/XAU+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/XAU.~Xagate</a>';
$XAUOrdersArray = file_get_contents($getXagateXAUOrders);
$XAUOrdersJson = json_encode($LTCOrdersArray);
echo "This example is the ~Xagate order book for $getXagateXAUOrders <br />";
//echo $XAUOrdersJson;
//echo $XAUOrdersArray;

$getXagateXPTOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/XPT+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/XPT.~Xagate</a>';
$XPTOrdersArray = file_get_contents($getXagateXPTOrders);
$XPTOrdersJson = json_encode($XPTOrdersArray);
echo "This example is the ~Xagate order book for $getXagateXPTOrders <br />";
//echo $LTCOrdersJson;
//echo $LTCOrdersArray;

$getXagateXPDOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/XPD+rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH">XRP/XPD.~Xagate</a>';
$XPDOrdersArray = file_get_contents($getXagateXPDOrders);
$XPDOrdersJson = json_encode($XPDOrdersArray);
echo "This example is the ~Xagate order book for $getXagateXPDOrders <br />";
//echo $LTCOrdersJson;
//echo $LTCOrdersArray;

$getRUCADOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/CAD+r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S">XRP/CAD.~RippleUnion</a>';
$CADOrdersArray = file_get_contents($getRUCADOrders);
$CADOrdersJson = json_encode($CADOrdersArray);
echo "This example is the ~Rippleunion order book for $getRUCADOrders <br />";
//echo $LTCOrdersJson;
//echo $LTCOrdersArray;

$getSSBTCOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/BTC+rMwjYedjc7qqtKYVLiAccJSmCwih4LnE2q">XRP/BTC.~SnapSwap</a>';
$BTCOrdersArray = file_get_contents($getSSBTCOrders);
$BTCOrdersJson = json_encode($BTCOrdersArray);
echo "This example is the ~SnapSwap order book for $getSSBTCOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getSSUSDOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/USD+rMwjYedjc7qqtKYVLiAccJSmCwih4LnE2q">XRP/USD.~SnapSwap</a>';
$USDOrdersArray = file_get_contents($getSSUSDOrders);
$USDOrdersJson = json_encode($USDOrdersArray);
echo "This example is the ~SnapSwap order book for $getSSUSDOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getDRBTCOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/BTC+rfYv1TXnwgDDK4WQNbFALykYuEBnrR4pDX">XRP/BTC.~Dividendrippler</a>';
$BTCOrdersArray = file_get_contents($getDRBTCOrders);
$BTCOrdersJson = json_encode($BTCOrdersArray);
echo "This example is the ~Dividendrippler order book for $getDRBTCOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getBSEUROrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/XRP/EUR+rvYAfWj5gh67oV6fW32ZzP3Aw4Eubs59B">XRP/EUR.~Bitstamp</a>';
$EUROrdersArray = file_get_contents($getBSUROrders);
$EUROrdersJson = json_encode($EUROrdersArray);
echo "This example is the ~Bitstamp order book for $getBSEUROrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getUSDSSEURBSOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/USD+rMwjYedjc7qqtKYVLiAccJSmCwih4LnE2q/EUR+rvYAfWj5gh67oV6fW32ZzP3Aw4Eubs59B">USD.~SnapSwap/EUR.~Bitstamp</a>';
$USDEUROrdersArray = file_get_contents($getUSDSSEURBSOrders);
$USDEUROrdersJson = json_encode($EUROrdersArray);
echo "This example is the ~SnapSwap/~Bitstamp order book for $getUSDSSEURBSOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

$getBTCSSBTCBSOrders = '<a href="https://xagate.com:5990/v1/accounts/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C/order_book/BTC+rMwjYedjc7qqtKYVLiAccJSmCwih4LnE2q/BTC+rvYAfWj5gh67oV6fW32ZzP3Aw4Eubs59B">BTC.~SnapSwap/BTC.~Bitstamp</a>';
$BTCBTCOrdersArray = file_get_contents($getBTCSSBTCBSOrders);
$BTCBTCOrdersJson = json_encode($BTCOrdersArray);
echo "This example is the ~SnapSwap/~Bitstamp order book for $getBTCSSBTCBSOrders <br />";
//echo $BTCOrdersJson;
//echo $BTCOrdersArray;

?>
