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

echo "Each XRP is $xrpincad in CAD.";

$exchangeRate = $cad;
$ripplesCAD = $xrpincad;
$ripplesUSD = $xrp;

return $exchangeRate;
return $ripplesCAD;
return $ripplesUSD;

?>
