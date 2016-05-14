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

echo "XRP is <b>$xrp</b> USD each.<br />"; //returns XRP with USD price

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
echo "The USD/CAD exchange rate is currently <b>$cad</b> CAD per USD.<br />"; //returns XRP with USD price

$xrpincad = $xrp * $cad;

echo "Each XRP is <b>$xrpincad</b> in CAD. <br /><hr>";

$exchangeRate = $cad;
$ripplesCAD = $xrpincad;
$ripplesUSD = $xrp;

//return $exchangeRate;
//return $ripplesCAD;
//return $ripplesUSD;

//END RIPPLE STATS

$goldContent = 'https://www.quandl.com/api/v1/datasets/WGC/GOLD_DAILY_CAD.json?auth_token=6nCuz4gzMzxRdXWQqyNK';
$contentGoldPrice = file_get_contents($goldContent);
//echo "contentGoldPrice holds: $contentGoldPrice";
//$findGoldPrice = '/\"premium\":false,"data":\[\[\"[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]",[0-9][0-9][0-9][0-9].[0-9]\],/';
$findAUPrice = "/[0-9][0-9][0-9][0-9][.][0-9]/";
preg_match($findAUPrice, $contentGoldPrice, $trimGoldPrice);
//print_r($trimGoldPrice);
//$findAUPrice = '/[0-9][0-9][0-9][0-9][.][0-9]/';
//echo "trimGoldPrice: $trimGoldPrice[0]";
$XAUinCAD = $trimGoldPrice[0];
echo "One troy ounce of Gold (XAU) is <b>$XAUinCAD</b> in Canadian Dollars.<br />";


$silverContent = 'https://www.quandl.com/api/v1/datasets/LBMA/SILVER.json?auth_token=6nCuz4gzMzxRdXWQqyNK';
$contentSilverPrice = file_get_contents($silverContent);
//echo "silverContent: $silverContent<br />";
//echo "contentSilverPrice holds: $contentSilverPrice";
$findAGPrice = "/,[0-9]{1,4}[.][0-9]{1,2}/";
preg_match($findAGPrice, $contentSilverPrice, $trimSilverPrice);
//print_r($trimSilverPrice);
$XAGinUSD = substr($trimSilverPrice[0], 1, strlen($trimSilverPrice[0]));
$XAGstr = substr($trimSilverPrice[0], 1, strlen($trimSilverPrice[0]));
$XAGinCAD = $XAGstr * $cad;
echo "One troy ounce of Silver (XAG) is <b>$XAGinUSD</b> in US Dollars.<br />";
echo "One troy ounce of Silver (XAG) is <b>$XAGinCAD</b> in Canadian Dollars.<br />";

$goldSilverContents = 'https://www.quandl.com/api/v1/datasets/MWORTH/10_3.json?auth_token=6nCuz4gzMzxRdXWQqyNK';
$contentGoldSilverRatio = file_get_contents($goldSilverContents);
$findRatio = '/,[0-9]{0,4}.[0-9]{1,2}/';
preg_match($findRatio, $contentGoldSilverRatio, $trimRatio);
//$findAGPrice = '/,[0-9]{0,4}.[0-9]{1,2}/';
$jsonRatio = json_encode($trimRatio);
$findme = ',';
$pos = strpos($trimRatio[0], $findme);
//echo "pos: $pos<br />";
$goldSilverRatio = substr($trimRatio[0], ($pos+1), 5);

//echo "goldSilverRatio: $goldSilverRatio<br />";
//echo "cad: $cad<br />";
echo "Each troy ounce of Gold (XAU) purchases <b>$goldSilverRatio</b> troy ounces of Silver (XAG).<br />";

$platinumContents = "https://www.quandl.com/api/v1/datasets/LPPM/PLAT.json?auth_token=6nCuz4gzMzxRdXWQqyNK";
$contentPlatinum = file_get_contents($platinumContents);
$findPlatinumPrice = '/,[0-9]{0,4}.[0-9]{1,2}/';
preg_match($findPlatinumPrice, $contentPlatinum, $trimPlatinum);
//$findAGPrice = '/,[0-9]{0,4}.[0-9]{1,2}/';
$jsonPlatinum = json_encode($trimPlatinum);
$findme = ',';
$pos = strpos($trimPlatinum[0], $findme);
//echo "pos: $pos<br />";
$platinumUSD = substr($trimPlatinum[0], ($pos+1), 5);

$platinumCAD = $platinumUSD * $cad;

//echo "cad: $cad<br />";
echo "One troy ounce of Platinum (XPT) is <b>$platinumUSD</b> in US Dollars.<br />";
echo "One troy ounce of Platinum (XPT) is <b>$platinumCAD</b> in Canadian Dollars.<br />";

$palladiumContents = 'https://www.quandl.com/api/v1/datasets/PERTH/PALL_USD_D.json?auth_token=6nCuz4gzMzxRdXWQqyNK';
$contentPalladium = file_get_contents($palladiumContents);
$findPalladiumPrice = '/(",[0-9]{0,4}.[0-9]{1,2},)/';
preg_match($findPalladiumPrice, $contentPalladium, $trimPalladium);
$findme = ',';
$pos = strpos($trimPalladium[0], $findme);
//echo "pos: $pos<br />";
$palladiumUSD = substr($trimPalladium[0], ($pos+1), 5);

$palladiumCAD = $palladiumUSD * $cad;

//echo "cad: $cad<br />";
echo "One troy ounce of Palladium (XPD) is <b>$palladiumUSD</b> in US Dollars.<br />";
echo "One troy ounce of Palladium (XPD) is <b>$palladiumCAD</b> in Canadian Dollars.<br />";

$btcContents = "https://www.quandl.com/api/v1/datasets/BCHARTS/VIRTEXCAD.json?auth_token=6nCuz4gzMzxRdXWQqyNK";
$contentBTC = file_get_contents($btcContents);
$findBTCPrice = '/,[0-9]{1,3}.[0-9]{1,10}\]/';
preg_match($findBTCPrice, $contentBTC, $trimBTC);
$findme = ',';
$pos = strpos($trimBTC[0], $findme);
//echo "pos: $pos<br />";
$BTCCAD = substr($trimBTC[0], ($pos+1), 8);

//echo "cad: $cad<br />";
echo "One Bitcoin (BTC) is <b>$BTCCAD</b> in Canadian Dollars.<hr>";

//END QUANDL STATS

//BEGIN ORDERBOOK STATS

echo '<a href="https://xagate.com/rippleapi/getXRPBTCxagate.php">XRP/BTC.~Xagate</a> Order-Book<br />';
echo '<a href="https://xagate.com/rippleapi/getXRPLTCxagate.php">XRP/LTC.~Xagate</a> Order-Book<br />';
echo '<a href="https://xagate.com/rippleapi/getXRPNXTxagate.php">XRP/NXT.~Xagate</a> Order-Book<br />';
echo '<a href="https://xagate.com/rippleapi/getXRPETHxagate.php">XRP/ETH.~Xagate</a> Order-Book<br />';
echo '<a href="https://xagate.com/rippleapi/getXRPCADrippleunion.php">XRP/CAD.~Rippleunion</a> Order-Book<br />';
echo '<a href="https://xagate.com/rippleapi/getCADrippleunionBTCxagate.php">CAD.~RippleUnion/BTC.~Xagate</a> Order-Book';

/* 
Uncaught error rippleapi; something about concurrent websocket connections to the rippled server and the promise object
Probably shouldn't load these concurrently...Offer hyperlinks
include "./rippleapi/getXRPBTCxagate.php";
include "./rippleapi/getXRPLTCxagate.php";
include "./rippleapi/getXRPNXTxagate.php";
include "./rippleapi/getXRPETHxagate.php";
include "./rippleapi/getXRPCADrippleunion.php";
include "./rippleapi/getCADrippleunionBTCxagate.php";
*/

/*DEPRECATED RIPPLE-REST CODE
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
*/

//BEGIN AUDIT
echo "<hr>These statistics were provided by the following endpoints:<br />";

echo '<a href="http://coinmarketcap.com/">Coin Market Cap</a><br />';

echo '<a href="http://www.xe.com/currencyconverter/convert/?Amount=1&From=USD&To=CAD">XE.com</a><br />';
echo '<a href="https://www.quandl.com/data/WGC/GOLD_DAILY_CAD-Gold-Prices-Daily-Currency-CAD">World Gold Council</a><br />';
echo '<a href="https://www.quandl.com/data/LBMA/SILVER-Silver-Price-London-Fixing">London Bullion Market Association</a><br />';
echo '<a href="https://www.quandl.com/data/LPPM/PLAT-Platinum-Fixing">London Platinum & Palladium Market</a><br />';
echo '<a href="https://www.quandl.com/data/MWORTH/10_3-Gold-Silver-Price-Ratio">MeasuringWorth</a><br />';
echo '<a href="https://www.quandl.com/data/PERTH/PALL_USD_D-Palladium-Prices-USD-Daily">Perth Mint</a><br />';
echo '<a href="https://www.quandl.com/data/BCHARTS/VIRTEXCAD-Bitcoin-Markets-virtexCAD">Bitcoin Charts Exchange Rate Data (virtexCAD)</a><br />';
//echo '<a href="https://ripple.com/build/ripple-rest/#get-order-book">ripple-REST: Get Order Book</a><hr>';
echo '<a href="https://ripple.com/build/rippleapi/#getorderbook">RippleAPI: Get Order-Book</a><hr>';
echo "<b><em>This data product is provided as-is, and QGK makes no warranty, either express or implied, including but not limited to, warranties of merchantability and fitness for a particular purpose. In no event will QGK be liable for any direct, special, indirect, consequential or other damages, however caused.</b></em>";
?>
