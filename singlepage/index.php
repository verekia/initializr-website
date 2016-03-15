<?php
if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $redirect");
}
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XAGATE :: A Ripple Gateway offering XAG, XAU, XPT, XPD, BTC, LTC, NXT, ETH, CAD, and USD!</title>
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
  <link rel="stylesheet" href="css2/main.css">
  <script src="js2/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
  <div id="w">
    <div id="content">
  <div id="topbar">
      | <a href="https://xagate.com/blog">News</a> 
      | <a href="https://github.com/whotooktwarden/QuickGatewayKit">The QuickGatewayKit</a> 
      | <a href="https://xagate.com/ripple.txt">About Our Ripple Servers</a> 
      | <a href="https://xagate.com/rippleapi">Current Ripple Network Statistics</a> 
      | <a href="https://xagate.com/rippleapi/get_wallet.html">Generate Account</a> |
      <a href="https://who.godaddy.com/businesscard.aspx?domain=XAGATE.COM&card=hBUUy7cCoLC5Iy4AK52GTw==&prog_id=GoDaddy">Contact Us</a> |
  </div>
   <div class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span>
          </button>
                        <a class="navbar-brand" href="index.php">XAGATE</a>
                        <a class="navbar-brand" href="#topbar">About Us</a>
                        <a class="navbar-brand" href="#services">Resources</a>
                        <a class="navbar-brand" href="#pms">Precious Metals</a>
                        <a class="navbar-brand" href="#crypto">Cryptocurrencies</a>
                        <a class="navbar-brand" href="#fiat">Fiat Currencies</a>
                        <a class="navbar-brand" href="#tos">Terms of Service</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div><br />

   <nav id="stickynav">
        <ul id="nav" class="clearfix">
          <li><a href="#topbar">About Us</a></li>
          <li><a href="#services">Resources</a></li>
            <li><a href="#pms">Precious Metals</a></li>
            <li><a href="#crypto">Cryptocurrencies</a></li>
            <li><a href="#fiat">Fiat Currencies</a></li>
          <li><a href="#tos">Terms of Service</a></li>
        </ul>
      </nav>

<iframe width="100%" height="100%" src="https://www.youtube.com/embed/M16ZatXbmLg" frameborder="0" allowfullscreen></iframe>

<section id="about" class="section">
      <br /><h1>XAGATE,<br />
A Ripple Gateway </h1>
<p>XAGATE is a <a href="https://ripple.com/knowledge_center/gateways/">Ripple Gateway</a> operated in Ontario, Canada by 8569541 Canada Inc.  XAGATE offers access to cryptographically secure digital bearer bonds called IOUs.  IOUs are stored over the Ripple Network,
also known as the <a href="http://bankinnovation.net/2016/01/ripple-ceo-chris-larsen-discusses-the-internet-of-value-video/">Internet of Value</a>.
  Our IOUs are redeemable for physical precious metals, cryptocurrencies, and fiat currencies.</p>
      <p>XAGATE is <a href="http://www10.fintrac-canafe.gc.ca/msb-esm/public/detailed-information/msb-details/7b227072696d617279536561726368223a7b22737461747573436f6465223a312c2273656172636854797065223a312c226f72674e616d65223a2238353639353431227d2c226d73624f72674e756d626572223a3134363239327d/">a registered Money Services Business</a> within Canada, we have launched an open source project named the <a href="http://quickgatewaykit.org">QuickGatewayKit</a> to encourage Gateway growth, an we also assist with securing the Ripple Network by operating <a href="https://validators.ripple.com/#/validators/n9M83NCHQqwKBCqmvTaMxWJTp8AQGp6fKGTGH8wcvQFkFsf2gg27">a rippled validator</a>.  XAGATE has accomplished all of these goals within 14 months of operation, having launched into public beta on Christmas 2014.</p>
          <p><strong><a href="xagatebalances.php">rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH</strong></a> is the Issuing Address to trust for 
<a href="https://wallet.gatehub.net/#/trade/XAG:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">XAG</a>, <a href="https://wallet.gatehub.net/#/trade/XAU:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">XAU</a>, <a href="https://wallet.gatehub.net/#/trade/XPT:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">XPT</a>, <a href="https://wallet.gatehub.net/#/trade/XPD:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">XPD</a>, <a href="https://wallet.gatehub.net/#/trade/BTC:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">BTC</a>, <a href="https://wallet.gatehub.net/#/trade/LTC:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">LTC</a>, <a href="https://wallet.gatehub.net/#/trade/NXT:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">NXT</a>, and <a href="https://wallet.gatehub.net/#/trade/ETH:rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/XRP">ETH</a> IOUs. 
Please set trust to <strong><a href="cadbalances.php">r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S</a></strong> for <a href="https://wallet.gatehub.net/#/trade/CAD:r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S/XRP">CAD</a> and <a href="https://wallet.gatehub.net/#/trade/USD:r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S/XRP">USD</a> IOUs.</p>
          <p><strong>XAGATE does not charge transfer fees for the usage of its assets over the Ripple Network. This is subject to change at any time. A grace period of 90 days occurs in which the transfer fee will not be in effect until after it has been announced to the community via the <a href="https://forum.ripple.com/viewtopic.php?f=3&t=8576&p=58864#p58862"> official Ripple forums</a> and on the <a href="https://xagate.com">XAGATE Blog</a>.</strong></p>

          <p><h2><em>Fee Schedule</em></h2><p>
<strong><p class="center">Silver (XAG)</p></strong>
<p><strong>Deposits: </strong>2% of total order for credit card option and 0.02 ozt flat rate per ozt for personal deposits.  
Deposits are <strong>not</strong> subject to any demurrage/storage fees.</p>
<p><strong>Withdrawals: </strong> 10 XAG minimum withdrawal limit, nominal shipping fee for order greater than 50 XAG, all shipping expenses
are the client's obligation to pay before withdrawal.</p>
<strong><p class="center">Gold (XAU)</p></strong>
<p><strong>Deposits: </strong>0.499%.  Deposits are <strong>not</strong> subject to any demurrage/storage fees.</p>
<p><strong>Withdrawals: </strong> 0.499%.  5 XAU minimum withdrawal limit.  All shipping expenses are the client's obligation to pay before withdrawal.
  Minimum and maximum limits may rise or fall depending on current market rates.</p>
<strong><p class="center">Platinum (XPT)</p></strong>
<p><strong>Deposits: </strong>0.499%.  Deposits are <strong>not</strong> subject to any demurrage/storage fees.</p>
<p><strong>Withdrawals: </strong> 0.499%.  5 XPT minimum withdrawal limit.  All shipping expenses are the client's obligation to pay before withdrawal.
  Minimum and maximum limits may rise or fall depending on current market rates.</p>
<strong><p class="center">Palladium (XPD)</p></strong>
<p><strong>Deposits: </strong>0.499%.  Deposits are <strong>not</strong> subject to any demurrage/storage fees.</p>
<p><strong>Withdrawals: </strong> 0.499%.  5 XPD minimum withdrawal limit.  All shipping expenses are the client's obligation to pay before withdrawal.
  Minimum and maximum limits may rise or fall depending on current market rates.</p>
<strong><p class="center">Bitcoin (BTC)</p></strong>
<p><strong>Deposits: </strong>Minimum deposits are 0.005 BTC. 0.5% plus 0.00025 BTC.</p>
<p><strong>Withdrawals: </strong> 0.00025 BTC</p>
<strong><p class="center">Litecoin (LTC)</p></strong>
<p><strong>Deposits: </strong>Minimum deposits are 1 LTC. The service fee is 0.9% plus 0.0026 LTC.</p>
<p><strong>Withdrawals: </strong>0.0155 LTC</p>
<strong><p class="center">Nextcoin (NXT)</p></strong>
<p><strong>Deposits: </strong>Minimum deposits are 150 NXT. The service fee is 1.99% plus 1.5 NXT.</p>
<p><strong>Withdrawals: </strong>3NXT </p>
<strong><p class="center">Ethereum (ETH)</p></strong>
<p><strong>Deposits: </strong>Minimum deposits are 1 ETH. The service fee is 0.55% + 0.00035 ETH.</p>
<p><strong>Withdrawals: </strong> 0.60 ETH</p>
<strong><p class="center">Canadian Dollar (CAD)</p></strong>
<p><strong>Deposits: </strong>2$CAD (plus any applicable fees from your Bank)</p>
<p><strong>Withdrawals: </strong> 2.50$CAD (plus any applicable fees from your Bank)</p>
<strong><p class="center">United States Dollar (USD)</p></strong>
<p><strong>Deposits: </strong>5$USD flat rate (plus any applicable fees from your Bank).  Minimum deposits must be at least 5$USD.</p>
<p><strong>Withdrawals: </strong>5$USD flat rate (plus any applicable fees from your Bank).  Minimum withdrawal limit is 20$USD.</p>
      </section>
      <section id="services" class="section">
      <h2>Resources and Other Services</h2>
    <p>Learn more about Ripples (XRP) at the <a href="https://ripple.com/xrp-portal/">XRP portal.</a></p>
  <p><a href="http://www.xrpchat.com/topic/1001-guide-to-create-hot-and-cold-wallets/">Here</a> is a guide to create new Ripple accounts.</p>
      <p><a href="http://www.xrpchat.com/topic/1017-list-of-developer-resources/">Here</a> is a list of resources for developers.</p> 
<p>XAGATE is the first Ripple Gateway to release
<a href="https://xagate.com/loyalty.php">a unique Cryptocurrency tied to a Loyalty Program</a>.</p>
      <p><a href="fetch.php">Click here</a> to fetch the CAD/USD Exchange Rate and for XRP priced in both USD and CAD an see <a href="getnxttx.php">here</a> for some NXT statistics (currently offline).</p>
      <p><a href="http://quickgatewaykit.org/blog/index.php/howto-access-ripple-rest/">This page</a> explains how to access the <a href="http://quickgatewaykit.org/">QuickGatewayKit</a> public Ripple servers</p>
      <p>XAGATE supports competition within the Ripple Gateway industry, please visit <a href="http://quickgatewaykit.org">QuickGatewayKit</a> to get started operating your own Gateway or <a href="https://who.godaddy.com/businesscard.aspx?domain=XAGATE.COM&card=hBUUy7cCoLC5Iy4AK52GTw==&prog_id=GoDaddy">write me an email</a> regarding your project</p>
            </section>

        <section id="pms" class="section">
      <h2>Deposit Silver (XAG)</h2>
            <p>Do you already own silver and want to join the Ripple network?</p>
		  <p>You can deposit silver in exchange for a warehouse receipt, called an XAG IOU.  These digital claims onto silver we custodian on our clients' behalf can be used to purchase XRP or any other asset available over the Ripple protocol.  </p>
		  <p>Service Fee: flat rate of 0.02 XAG applied to each troy ounce deposited to XAGATE.</p>
		  <h2>Credit Card Gateway Option</h2>
			<p>You may purchase bullion from any reputable online bullion dealer, such as <a href="http://silvergoldbull.com">silvergoldbull.com</a>, for delivery to our vault in exchange for our XAG IOUs.
			</p><p>Service Fee:  2% service fee applied to the total deposited.</p>
            <form name="depositform" method="post" action="deposit.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
							 <tr>
			 <td valign="top">
  <label for="ripple">Ripple Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="ripple" maxlength="53" size="35">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XAGamount">XAG Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XAGamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br /><br />
            <h2>Withdraw Silver (XAG)</h2>
            <ul><li>On bulk orders of 50 XAG or more a nominal shipping fee will apply.
				</li>
				</li><li>For precious metal withdrawals, you may request to ship to your home address, work, bank, and you may request a withdrawal as a gift for shipment to a friend but under no circumstances will XAGATE ship precious metals to a <b>P.O. box address</b>
                </li><li>Fractional rounds and bars may be available upon request</li></ul><br />
            <form name="withdrawalform" method="post" action="withdraw.php">
<table width="100%">
	<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
 <tr>
 <td valign="top">
  <label for="telephone">Telephone Number *</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="16" size="15">
 </td>
</tr>
 <tr>
 <td valign="top">
  <label for="address">Full Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="address" maxlength="53" size="30">
 </td>
</tr>
<tr><td valign="top">
  <label for="address">Postal Code *</label>
 </td>
 <td valign="top">
  <input  type="text" name="postalcode" maxlength="6" size="4">
 </td>
</tr>
 <tr>
 <td valign="top">
  <label for="address">City *</label>
 </td>
  <td valign="top">
  <input  type="text" name="city" maxlength="30" size="12">
 </td>
</tr>
 <tr><td valign="top">
  <label for="address">Province *</label>
 </td>
 <td valign="top">
  <input  type="text" name="province" maxlength="16" size="12">
 </td>
</tr>
 <tr><td valign="top">
  <label for="address">Country *</label>
</td>
 <td valign="top">
  <input  type="text" name="country" maxlength="24" size="20">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XAGamount">XAG Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XAGamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments</label>
					   <p>Please include special delivery instructions (if any).</p>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1500" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
<br />

<h2>Deposit Gold (XAU)</h2>

	 <form name="depositform" method="post" action="depositau.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
							 <tr>
			 <td valign="top">
  <label for="ripple">Ripple Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="ripple" maxlength="53" size="35">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XAUamount">XAU Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XAUamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br />

<h2>Withdraw Gold (XAU)</h2>

<form name="withdrawalform" method="post" action="withdrawau.php">
 
<table width="100%">
	
	<tr>
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
						
						<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxleng0.
									  0th="50" size="30">
 
 </td>
 
</tr>
															   <tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="16" size="15">
 
 </td>
 
</tr>
 
							 <tr>
							 
							 <td valign="top">
 
  <label for="address">Full Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="address" maxlength="53" size="30">
 
 </td>
 
</tr>
															 <tr>
							 
							 <td valign="top">
 
  <label for="address">Postal Code *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="postalcode" maxlength="6" size="4">
 
 </td>
 
</tr>
															   
															   <tr>
							 
							 <td valign="top">
 
  <label for="address">City *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="city" maxlength="30" size="12">
 
 </td>
 
</tr>
														  
														  <tr>
							 
							 <td valign="top">
 
  <label for="address">Province *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="province" maxlength="16" size="12">
 
 </td>
 
</tr>
															  
															  <tr>
							 
							 <td valign="top">
 
  <label for="address">Country *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="country" maxlength="24" size="20">
 
 </td>
 
</tr>
							 
 <tr>
							 
							 <td valign="top">
 
  <label for="XAUamount">XAU Amount*</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="XAUamount" maxlength="2" size="5">
 
 </td>
 
</tr>
							 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments</label>
					   <p>Please include special delivery instructions (if any).</p>
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1500" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form><br />

<h2>Deposit Platinum (XPT)</h2>

 <form name="depositform" method="post" action="depositpt.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
							 <tr>
			 <td valign="top">
  <label for="ripple">Ripple Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="ripple" maxlength="53" size="35">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XPTamount">XPT Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XPTamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br />

<h2>Withdraw Platinum (XPT)</h2>

<form name="withdrawalform" method="post" action="withdrawpt.php">
 
<table width="100%">
	
	<tr>
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
						
						<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxleng0.
									  0th="50" size="30">
 
 </td>
 
</tr>
															   <tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="16" size="15">
 
 </td>
 
</tr>
 
							 <tr>
							 
							 <td valign="top">
 
  <label for="address">Full Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="address" maxlength="53" size="30">
 
 </td>
 
</tr>
															 <tr>
							 
							 <td valign="top">
 
  <label for="address">Postal Code *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="postalcode" maxlength="6" size="4">
 
 </td>
 
</tr>
															   
															   <tr>
							 
							 <td valign="top">
 
  <label for="address">City *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="city" maxlength="30" size="12">
 
 </td>
 
</tr>
														  
														  <tr>
							 
							 <td valign="top">
 
  <label for="address">Province *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="province" maxlength="16" size="12">
 
 </td>
 
</tr>
															  
															  <tr>
							 
							 <td valign="top">
 
  <label for="address">Country *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="country" maxlength="24" size="20">
 
 </td>
 
</tr>
							 
 <tr>
							 
							 <td valign="top">
 
  <label for="XPTamount">XPT Amount*</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="XPTamount" maxlength="2" size="5">
 
 </td>
 
</tr>
							 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments</label>
					   <p>Please include special delivery instructions (if any).</p>
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1500" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form><br />

<h2>Deposit Palladium (XPD)</h2>

<form name="depositform" method="post" action="depositpd.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
							 <tr>
			 <td valign="top">
  <label for="ripple">Ripple Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="ripple" maxlength="53" size="35">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XPDamount">XPD Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XPDamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br />

<h2>Withdraw Palladium (XPD)</h2>

<form name="withdrawalform" method="post" action="withdrawpd.php">
 
<table width="100%">
	
	<tr>
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
						
						<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxleng0.
									  0th="50" size="30">
 
 </td>
 
</tr>
															   <tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="16" size="15">
 
 </td>
 
</tr>
 
							 <tr>
							 
							 <td valign="top">
 
  <label for="address">Full Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="address" maxlength="53" size="30">
 
 </td>
 
</tr>
															 <tr>
							 
							 <td valign="top">
 
  <label for="address">Postal Code *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="postalcode" maxlength="6" size="4">
 
 </td>
 
</tr>
															   
															   <tr>
							 
							 <td valign="top">
 
  <label for="address">City *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="city" maxlength="30" size="12">
 
 </td>
 
</tr>
														  
														  <tr>
							 
							 <td valign="top">
 
  <label for="address">Province *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="province" maxlength="16" size="12">
 
 </td>
 
</tr>
															  
															  <tr>
							 
							 <td valign="top">
 
  <label for="address">Country *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="country" maxlength="24" size="20">
 
 </td>
 
</tr>
							 
 <tr>
							 
							 <td valign="top">
 
  <label for="XPDamount">XPD Amount*</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="XPDamount" maxlength="2" size="5">
 
 </td>
 
</tr>
							 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments</label>
					   <p>Please include special delivery instructions (if any).</p>
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1500" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form><br />

</section>
<section id="crypto" class="section">
<h2>Cryptocurrencies</h2>
<p>XAGATE employs the <a href="https://www.coinpayments.net/index.php?ref=ee25108a996abb3fdf7b07dfa429c2f9">coinpayments.net payment processor</a>
 to manage deposits of cryptocurrencies.</p><p><em>IMPORTANT:</em>  If you would like to act as a rippler, please enable Rippling when trusting our Gateway.  If you do not want your XAGATE IOU balances to fluctuate with other gateways you trust <em>of the same currency code</em>, then disable the Rippling option when you trust our Gateway.</p>

<h2>NXT</h2><br />
<b><p>Minimum deposits are 150 NXT.  The service fee is 1.99% plus 1.5 NXT.</p></b>
<form action="https://www.coinpayments.net/index.php" method="post">
        <input type="hidden" name="cmd" value="_pay">
        <input type="hidden" name="reset" value="1">
        <input type="hidden" name="merchant" value="ee25108a996abb3fdf7b07dfa429c2f9">
        <input type="hidden" name="item_name" value="150 NXT {X many 150 NXT}">
        <input type="hidden" name="currency" value="NXT">
        <input type="hidden" name="amountf" value="150.00000000">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="allow_quantity" value="1">
        <input type="hidden" name="want_shipping" value="0">
        <input type="hidden" name="shippingf" value="1.00000000">
        <input type="hidden" name="taxf" value="0.50000000">
        <input type="hidden" name="success_url" value="https://xagate.com">
        <input type="hidden" name="cancel_url" value="https://xagate.com">
        <input type="hidden" name="ipn_mode" value="hmac">
        <input type="hidden" name="ipn_url" value="">
        <input type="hidden" name="allow_extra" value="1">
        <p>Input your Ripple Address (required):</p><input name="custom" value="" required><br />
        <input type="image" src="https://www.coinpayments.net/images/pub/buynow-wide-blue.png" alt="Buy Now with CoinPayments.net">
</form><br /><br />

<h2>BTC</h2><br />
<b><p>Minimum deposits are 0.005 BTC.  The service fee is 0.5% plus 0.00025 BTC.</p><br /></b>
<form action="https://www.coinpayments.net/index.php" method="post">
        <input type="hidden" name="cmd" value="_pay">
        <input type="hidden" name="reset" value="1">
        <input type="hidden" name="merchant" value="ee25108a996abb3fdf7b07dfa429c2f9">
        <input type="hidden" name="item_name" value="0.005 BTC {X many 0.005 BTC}">
        <input type="hidden" name="currency" value="BTC">
        <input type="hidden" name="amountf" value="0.005">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="allow_quantity" value="1">
        <input type="hidden" name="want_shipping" value="0">
        <input type="hidden" name="taxf" value="0.00025">
        <input type="hidden" name="success_url" value="https://xagate.com">
        <input type="hidden" name="cancel_url" value="https://xagate.com">
        <input type="hidden" name="ipn_mode" value="hmac">
        <input type="hidden" name="ipn_url" value="">
        <input type="hidden" name="allow_extra" value="1">
        <p>Input your Ripple Address (required):</p><input name="custom" value="" required><br />
        <input type="image" src="https://www.coinpayments.net/images/pub/buynow-wide-blue.png" alt="Buy Now with CoinPayments.net">
</form><br /><br />

<h2>LTC</h2><br />
<b><p>Minimum deposits are 1 LTC.  The service fee is 0.9% plus 0.0026 LTC.</p><br /></b>
<form action="https://www.coinpayments.net/index.php" method="post">
        <input type="hidden" name="cmd" value="_pay">
        <input type="hidden" name="reset" value="1">
        <input type="hidden" name="merchant" value="ee25108a996abb3fdf7b07dfa429c2f9">
        <input type="hidden" name="item_name" value="1 LTC {X many 1 LTC}">
        <input type="hidden" name="currency" value="LTC">
        <input type="hidden" name="amountf" value="1">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="allow_quantity" value="1">
        <input type="hidden" name="want_shipping" value="0">
        <input type="hidden" name="taxf" value="0.0026">
        <input type="hidden" name="success_url" value="https://xagate.com">
        <input type="hidden" name="cancel_url" value="https://xagate.com">
        <input type="hidden" name="ipn_mode" value="hmac">
        <input type="hidden" name="ipn_url" value="">
        <input type="hidden" name="allow_extra" value="1">
        <p>Input your Ripple Address (required):</p><input name="custom" value="" required><br />
        <input type="image" src="https://www.coinpayments.net/images/pub/buynow-wide-blue.png" alt="Buy Now with CoinPayments.net">
</form><br /><br />

<h2>ETH</h2><br />
<b><p>Minimum deposits are 1 ETH.  The service fee is 0.55% + 0.00035 ETH.<br /></b>
<form action="https://www.coinpayments.net/index.php" method="post">
        <input type="hidden" name="cmd" value="_pay">
        <input type="hidden" name="reset" value="1">
        <input type="hidden" name="merchant" value="ee25108a996abb3fdf7b07dfa429c2f9">
        <input type="hidden" name="item_name" value="1 ETH {X many 1 ETH}">
        <input type="hidden" name="currency" value="ETH">
        <input type="hidden" name="amountf" value="1">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="allow_quantity" value="1">
        <input type="hidden" name="want_shipping" value="0">
        <input type="hidden" name="taxf" value="0.00035">
        <input type="hidden" name="success_url" value="https://xagate.com">
        <input type="hidden" name="cancel_url" value="https://xagate.com">
        <input type="hidden" name="ipn_mode" value="hmac">
        <input type="hidden" name="ipn_url" value="">
        <input type="hidden" name="allow_extra" value="1">
        <p>Input your Ripple Address (required):</p><input name="custom" value="" required><br />
<input type="image" src="https://www.coinpayments.net/images/pub/buynow-wide-blue.png" alt="Buy Now with CoinPayments.net">
        </form><br />
<h2>Withdraw Cryptocurrency</h2>
<p><strong>For BTC and LTC, you must specify whole numbers in the format 1.0, 10.0, and so forth.<br />
When withdrawing an amount less than 1 BTC/LTC, please use the format 0.12345678.</strong></p>

	<form name="depositBTC" method="post" action="withdrawb.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address*</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30"> </td>
</tr><tr><td valign="top">
  <label for="FName">Full Name*</label>
 </td>
 <td valign="top">
  <input  type="text" name="FName" maxlength="53" size="35">
 </td>
</tr>
 <tr> <td valign="top">
  <label for="BTCamount">BTC Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="BTCamount" maxlength="8" size="6">
 </td>
</tr><tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>

<form name="depositLTC" method="post" action="withdrawl.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address*</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
<td valign="top">
<label for="FName">Full Name*</label>
</td>
<td valign="top">
<input  type="text" name="FName" maxlength="53" size="35">
 </td>
</tr>
 <tr>
<td valign="top">
<label for="LTCamount">LTC Amount*</label>
</td><td valign="top"><input  type="text" name="LTCamount" maxlength="8" size="6">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>

<form name="depositform" method="post" action="withdrawn.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30"></td></tr><tr>
<td valign="top"><label for="nxt">NXT Address *</label></td>
 <td valign="top"><input  type="text" name="nxt" maxlength="53" size="35"></td></tr>
 <tr> <td valign="top"><label for="NXTamount">NXT Amount*</label></td>
 <td valign="top"> <input  type="text" name="NXTamount" maxlength="8" size="6"></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="Submit"></td></tr></table>
</form>

<form name="depositETH" method="post" action="withdrawe.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30"></td></tr><tr>
<td valign="top"><label for="nxt">ETH Address *</label></td>
 <td valign="top"><input  type="text" name="ETH" maxlength="53" size="35"></td></tr>
 <tr> <td valign="top"><label for="NXTamount">ETH Amount*</label></td>
 <td valign="top"> <input  type="text" name="ETHamount" maxlength="8" size="6"></td></tr>
<tr><td colspan="2" style="text-align:center"><input type="submit" value="Submit"></td></tr></table>
</form>
</section>

<section id="fiat" class="section">
<h2>Deposit Canadian Dollar
<br />(CAD)</h2>

<p>Please note that your bank must support Interac e-transfers to deposit.
Bank wire transfers originating from the USA as a deposit method for CAD may be a possibility in the future but is currently not available.
Service fees for the Interac e-Transfer method are 2$ plus any fees applied by your bank.
Trust the Gateway address r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S for CAD.
<p>Please enable the rippling feature to allow other users trusting the Gateway to path-find solutions for their transactions,
this allows your balance to fluctuate up to the limit you set.</p>

	<form name="depositform" method="post" action="depositc.php">
<table width="100%">
 <tr><td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
<td valign="top">
  <label for="ripple">Ripple Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="ripple" maxlength="53" size="35">
 </td>
</tr>
 <tr> <td valign="top">
  <label for="CADamount">CAD Amount</label>
 </td>
 <td valign="top">
  <input  type="text" name="CADamount" maxlength="8" size="6">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table></form><br />

<h2>Withdraw Canadian Dollar
<br />(CAD)</h2>

<p>The service fee is 2.50$ plus any applicable fees applied by your Bank.</p>

<form name="depositform" method="post" action="withdrawc.php">
<table width="100%">
 <tr><td valign="top">
<label for="email">Email Address*</label>
 </td>
 <td valign="top">
<input  type="text" name="email" maxlength="80" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="CAD">Full Name*</label>
 </td>
 <td valign="top">
  <input  type="text" name="FName" maxlength="53" size="35">
 </td>
</tr>
 <tr>
<td valign="top">
  <label for="CADamount">CAD Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="CADamount" maxlength="8" size="6">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
</td>
</tr>
</table>
</form><br />

<h2>Deposit United States Dollar
<br />(USD)</h2>

<p>Service fees for deposits are 5$ plus any fees applied by your bank.
Trust the Gateway address r3ADD8kXSUKHd6zTCKfnKT3zV9EZHjzp1S only for CAD or USD transactions over Ripple.
Please enable the rippling feature to allow other users trusting the Gateway to path-find solutions for their transactions,
this allows your balance to fluctuate up to the limit you set.</p>

<form name="depositform" method="post" action="depositus.php">
<table width="100%">
<tr><td valign="top">
<label for="email">Email Address *</label>
</td>
<td valign="top">
<input  type="text" name="email" maxlength="80" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="ripple">Ripple Address *</label>
</td>
<td valign="top">
<input  type="text" name="ripple" maxlength="53" size="35">
</td>
</tr>
<tr>
<td valign="top">
<label for="USDamount">USD Amount</label>
</td>
<td valign="top">
<input  type="text" name="USDamount" maxlength="8" size="6">
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form><br />

<h2>Withdraw United States Dollar
<br />(USD)</h2>

<p>Please note that the minimum withdrawal is 20$USD.  Withdrawals from the USD Gateway incur a 5$USD flat rate fee.</p>

<form name="depositform" method="post" action="withdrawus.php">
<table width="100%">
<tr><td valign="top">
<label for="email">Email Address*</label>
</td>
<td valign="top">
<input  type="text" name="email" maxlength="80" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="USD">Full Name*</label>
</td>
<td valign="top">
<input  type="text" name="FName" maxlength="53" size="35">
</td>
</tr>
<tr>
<td valign="top">
<label for="USDamount">USD Amount*</label>
</td>
<td valign="top">
<input  type="text" name="USDamount" maxlength="8" size="6">
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</section>

      <section id="tos" class="section">
<p><b><h1>Terms of Service</h1>
<h2>XAGATE Terms of Service ("Agreement")</h2>
<h3>This Agreement was last modified on March 3, 2016 by Taylor Warden.</h3>
</p><p>
Please read these Terms of Service completely using <a href="https://xagate.com">XAGATE.com</a> which is owned and operated by XAGATE. These Agreements document the legally binding terms and conditions attached to the use of the Site at <a href="https://xagate.com">XAGATE.com</a>. By viewing or browsing the Site, or by accessing or using any Services, you are agreeing to be bound by these Terms of Service.</b></p>

<u><b><p>Intellectual Property</b></u></p>
<p>
The Site and all of its original content are the sole property of XAGATE and are, as such, are fully protected by the appropriate international copyright and other intellectual property rights laws.
</p>
<p><u><b>Links to Other Websites</b></u></p>
<p>
Our Site does contain a number of links to other websites and online resources that are not owned or controlled by XAGATE.</p><p>
XAGATE has no control over, and therefore cannot assume responsibility for, the content or general practices of any of these third party sites and/or services. Therefore, we strongly advise you to read the entire terms and conditions and privacy policy of any site that you visit as a result of following a link that is posted on our site.<p>

<p><b><u>Deposits of Precious Metals</u></b></p>
<p>
The client, henceforth known as the Depositor, must initiate a Deposit Order by using the web form provided on the <a href="https://xagate.com">XAGATE.com</a> home page. The Deposit Order must be initiated before the deposit can legally be received. Shipments of precious metals without a correlating Deposit Number, will not be processed and instead returned to the sender, at the sender’s cost.
</p>
<p><b><u>Withdrawals of Precious Metals</u></b></p>
<p>
The client, henceforth known at the Claimant, must initiate a Withdrawal Order by using the web form provided on <a href="https://xagate.com/withdrawals.php">XAGATE.com</a>. A representative will contact you shortly after we have received and begun to process your order. Shipping fees are the Claimant’s responsibility and must be paid before the shipment of precious metals. Once the IOUs and shipping fee has been collected, your order will be marked complete and your precious metals will be shipped to you.  XAGATE offers the following methods of payment for shipping fees: Interac e-transfer, cryptocurrency via coinpayments.net, or XAG.XAGATE in exchange to the current XAG/CAD market rate at the time of processing your quote.</p>

<p><b><u>Deposits of Digital Assets</u></b></p>
<p>
The client, henceforth known as the Depositor, must initiate a Deposit Order by using the web form provided on the <a href="https://xagate.com/cryptodeposits.php">XAGATE.com</a> for the digital asset in question. A Deposit Order must be initiated before the deposit can legally be received.
</p>
<p><b><u>Withdrawals of Digital Assets</u></b></p>
<p>
The client, henceforth known as the Claimant, must initiate a Withdrawal Order by using the web form provided on <a href="https://xagate.com/withdrawcrypto.php"></a>XAGATE.com</a>. A representative will contact you shortly after we have received and begun to process your order. Once the IOUs have been collected from the Claimant, your digital assets will be released to the wallet provided with your Withdrawal Order.
</p>
<p><b><u>Laws Affecting Transactions</u></b></p>

<p><b><u>Overview</u></b></p>

<p>In the case of a suspicious transaction report being required under Canadian law, as outlined in the PCMLTFR (please see below), we may require some more information via email. A transaction is defined as either a deposit or withdrawal.</p>

<p><b><u>Identification Requests</u></b></p>

<p>Clients who deposit or withdraw $10,000 of precious metals within a single transaction will be required to answer Identification questions as well as providing scans or high-resolution digital photos of documents a) Government Identification and b) proof of residency/nationality. The client will be subjected to submit their Full Name, their Full Address (including Postal/ZIP Code), Ripple address, a clear photo or scan of Proof of Identity, the last 4 digits of their Social Security Number, and a recent Utilities bill. Proof of Identity is defined as a passport, a Driver’s License, or typically any identification which includes all of the aforementioned information. A recent utilities bill is a bill which has been paid within the last 4 months at the time that the transaction was received by XAGATE. Photos which are taken with cell phones may be declined due to poor quality.</p>

<p><b><u>Section 1</u></b></p>

<p>In Accordance with Canadian Law, a large cash transaction report is submitted to FINTRAC when a reporting entity receives 10,000$ or more in cash in the course of a single transaction, or when it receives two or more cash amounts totalling 10,000$ or more made within 24 consecutive hours by or on behalf of the same individual or entity. This regulation requires XAGATE to regulate the deposit and withdrawal process of all assets, measured in Canadian Dollars, which is calculated at the time in which your order was received. This calculation will be done with the available trade data from any reputable statistics application which is available if nxtreporting.com, cavirtex.com, and/or bitstamp.com are not available to gather the required data. XAGATE is no way affiliated with any of the aforementioned web sites.</p>

<p><b><u>Section 2</u></b></p>

<p>An electronic funds transfer report is submitted to FINTRAC upon a transmission of instructions for the transfer of $10,000 or more out of or into Canada in a single transaction or in two or more transactions totalling $10,000 or more made within 24 consecutive hours by or on behalf of the same individual or entity, through any electronic, magnetic or optical device, telephone instrument or computer.</p>

<p><b><u>Section 3</u></b></p>

<p>XAGATE may be considered a dealer in precious metal and stones (DPMS). Subsection 1(2) of the Proceeds of Crime (Money Laundering) and Terrorist Financing Regulations (PCMLTFR) defines a DPMS as “a person or entity that, in the course of its business activities, buys or sells precious metals, precious stones or jewellery.” However, as indicated in section 39.1 of the PCMLTFR, it is only once a DPMS engages in the purchase or sale of precious metals, precious stones or jewellery in an amount of $10,000 or more in one transaction, regardless of how it is paid, that they become subject to the PCMLTFA and the obligations outlined therein. DPMS businesses are not required to register with FINTRAC.</p>

<p><b><u>Section 4</u></b></p>

<p>A suspicious transaction report is submitted to FINTRAC in respect of a financial transaction that occurs or is attempted, and for which there are reasonable grounds to suspect that the transaction is related to the commission or attempted commission of a money laundering or terrorist activity financing offence. Unlike all other reporting obligations, there is no monetary threshold associated with the reporting of a suspicious transaction.</p>

<p><b><h3>Cryptocurrency Entrepreneurs, and other interested individuals; please refer to the </h3></b> <a href =”http://www.fintrac-canafe.gc.ca/publications/ar/2014/1-eng.asp”><em></em>FINTRAC Annual Report for 2013-2014</a></em></p>

<p><b><h2>Lawyers, Government officials, investors, and interested individuals; please investigate the <a href="http://gazette.gc.ca/rp-pr/p1/2015/2015-07-04/html/reg2-eng.php">Regulations Amending Certain Regulations Made under the Proceeds of Crime (Money Laundering) and Terrorist Financing Act, 2015</a></h2></p></b>

<p><b><em>XAGATE is considered a Money Services Business under Canadian Law and is in the registration process with FINTRAC.  XAGATE may be required to submit clientele’s information as outlined above. As regulations in the future may affect XAGATE, these Terms of Service will be required to change. Please refer to the Changes to these Agreement(s) section.</p>
</em></b>
<p>
<b><u>Regarding the Law
</u></b></p><p>
These Agreements are governed in accordance with the laws of Ontario, Canada. Cryptocurrency and Money Services Businesses are a rapidly legislated and regulated industry. If you are a lawyer, investor, stakeholder, or Government regulatory agency that wishes to send an inquiry in regards to the law that may affect XAGATE or its clients in any way (where applicable) see the Contact Us section. In the case of a civil lawsuit being issued to XAGATE, the ensuing lawsuit will be heard from within a court of law based in Ontario, Canada. <strong>ALSO, ALL CONTENT, SERVICES AND FUNCTIONS ON THIS SITE, OR ANY OTHER SITE LINKED TO THIS SITE, ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.</strong></p>

<p><b><u>Changes to these Agreement(s)</u></b></p>

<p>XAGATE reserves the right to modify these Terms of Service at any time. We do so by posting an announcement of a change of Terms of Service within the XAGATE Gateway thread on the <a href="https://forum.ripple.com/viewtopic.php?f=3&t=8576&p=58864#p58862"> official Ripple forums</a>, to draw attention to the updated terms on the Site. It is suggested that you visit <a href="https://forum.ripple.com/viewtopic.php?f=3&t=8576&p=58864#p58862">this thread</a> and subscribe to it an receive future posts to your email. Your decision to continue to visit and make use of the Site an its services after such changes have been made constitutes your formal acceptance of the new Terms of Service. Therefore, we ask that you review these Agreement(s) for such changes on an occasional basis. Should you not agree to any provision of these Agreement(s) or any changes we make to these Agreement(s), we ask and advise that you do not use or continue to access the XAGATE site nor its services immediately.</p>

<p><u><b>Termination and Denial of Services</b></u></p>

<p>XAGATE reserves the right to terminate your access to the Site an its services, without any advance notice. XAGATE also reserves the right to refuse deposits or withdrawals, without any advance notice (for example, in the instance of suspicious orders).  <em><strong>XAGATE's operator is required under law and FINTRAC regulations to immediately freeze any accounts' balances when we receive a notification for a deposit or withdrawal totalling 10,000$ within a 24 hour period.</strong></em>
</p>

<u><b>Monthly Audits</b></u>

<p>Audits are performed monthly on client deposits.  This audit will be released via the XAGATE web site and on the Official Ripple Forums no later than the 25th day of each month.  In cases where an audit has not been performed for longer than one month, the audit must prove that no access was attempted to the vault since the prior audit.  The extent of all audits will include the following proof of custody:</p>

<p>-Video evidence of both precious metals and fiat held in the vault</p>
<p>-Photographic evidence of any remaining dollars stored in the Libro Credit Union account via internet banking</p>
<p>-Photographic evidence of Bitcoin, Litecoin, and NXT wallet balances via <a href="https://www.coinpayments.net">coinpayments.net</a> and <a href="http://nxtreporting.com/">nxtreporting.com</a> plus any balances held within trading platforms or wallets owned by 8569541 CANADA INC.</p>

<p><u><b>Pricing Information</b></u></p>

<p><b><u>XAG</u></b></p>

<p><b><u>Deposits</u></b></p>

<p>XAG is subject to a 0.02 XAG service fee, per ounce deposited from a client’s holdings. In the case of the Credit Card Gateway option, a 2% service fee will apply for deposits originating from a reputable online bullion dealer on the total amount deposited.</p>

<p><b><u>Withdrawals</u></b></p>

<p>On bulk orders of 50 XAG or more a nominal shipping fee will apply. The shipping rate depends on the destination address. Withdrawals for XAG.XAGATE incur a 10$ fee for Canadian residents, 15$ fee for USA shipping, and 30$ for flat-rate worldwide shipping (plus applicable taxes).</p>

<p><b><u>Limits imposed on Withdrawals</u></b></p>

<p>There is a minimum redemption of the XAG.XAGATE asset, which is 10 XAG. Other limits which apply are the policies reflecting suspicious transactions related to money laundering and the financing of terrorist activities. Please refer to those sections within XAGATE's terms of service for more information.</p>

<p><b><u>Limits imposed on Withdrawals</u></b></p>

<p><b><u>XAU</u></b></p>

<p>There is a minimum redemption of XAU, which is 5 ounces of gold. Other limits which apply are the policies reflecting suspicious transactions related to money laundering and the financing of terrorist activities. Please refer to those sections within XAGATE's terms of service for more information.</p>

<p><b><u>XPT</u></b></p>

<p>There is a minimum redemption of XPT, which is 5 ounces of platinum. Other limits which apply are the policies reflecting suspicious transactions related to money laundering and the financing of terrorist activities. Please refer to those sections within XAGATE's terms of service for more information.</p>

<p><b><u>XPD</u></b></p>

<p>There is a minimum redemption of XPD, which is 5 ounces of palladium. Other limits which apply are the policies reflecting suspicious transactions related to money laundering and the financing of terrorist activities. Please refer to those sections within XAGATE's terms of service for more information.</p>

<p><b><u>A Note on Withdrawal Limits</u></b></p>

<p>All minimum withdrawal limits are subject to change, without notice, at the time of your quote. This will occur in instances when XAGATE must abide by Canadian law and guidelines set forth by FINTRAC. Whenever a transaction notification of 10,000$CAD worth of financial instruments is initiated, a regulatory process must be upheld. Your quote will include an explanation of these regulations as well as provide you with the calculation of the new minimum and maximums for the precious metals IOUs, when required. Please refer to the Termination and Denial of Services section above.</p>

<p><b>XAU Deposits</b></p>

<p>XAU is subject to a 0.499% service fee which is applied to the total amount deposited.</p>

<p><b>XPT Deposits</b></p>

<p>XPT is subject to a 0.499% service fee which is applied to the total amount deposited.</p>

<p><b>XPD Deposits</b></p>

<p>XPD is subject to a 0.499% service fee which is applied to the total amount deposited.</p>

<p><b>XAU Withdrawals</b></p>

<p>Withdrawals of XAU incur a service fee of 0.499% which applies to the total withdrawal amount.  The shipping rate depends on the destination address. Withdrawals for XAU.XAGATE incur a 10$ fee for Canadian residents, 15$ fee for USA shipping, and 30$ for flat-rate worldwide shipping (plus applicable taxes).  </p>

<p><b>XPT Withdrawals</b></p>

<p>Withdrawals of XPT incur a service fee of 0.499% which applies to the total withdrawal amount.  The shipping rate depends on the destination address. Withdrawals for XPT.XAGATE incur a 10$ fee for Canadian residents, 15$ fee for USA shipping, and 30$ for flat-rate worldwide shipping (plus applicable taxes).  </p>

<p><b>XPD Withdrawals</b></p>

<p>Withdrawals of XPD incur a service fee of 0.499% which applies to the total withdrawal amount.  The shipping rate depends on the destination address. Withdrawals for XPD.XAGATE incur a 10$ fee for Canadian residents, 15$ fee for USA shipping, and 30$ for flat-rate worldwide shipping (plus applicable taxes).</p>

<p><b><u>Cryptocurrency Deposits (BTC, LTC, NXT)</u></b></p>

<p><em></em>All fees are subject to change.</em></p>

</p><p><b>Service Fees:</p></b>
		<p>BTC 0.5% + 0.00025BTC<br />
		LTC 0.9% + 0.0026LTC <br />
		NXT 1.99% + 1.5NXT<br />
                ETH 0.55% + 0.0035ETH<br />
		<b>Fiat:</b><br />
		<em>See Below:</a>Flat rate 2$CAD plus fees applied by your bank, Interac e-transfer<br />
		<b>Ripple IOUs:</b><br />
		XRP 0.99%<br />
		CAD.XAGATE 0.59%<br />
		BTC.SnapSwap 0.59%<br />
		USD.SnapSwap 0.59%<br />
		EUR.Bitstamp 0.59%<br />
		GBP.Bitstamp 0.59%<br />
		<b>Minimum Deposits:</b><br />
		0.005BTC<br />
		150NXT<br />
		1LTC<br />
		1ETH</p>

<p><b><u>Deposit Instructions</u></b></p>

<p><b><u>Crypto Deposits [BTC, LTC, NXT, ETH]</u></b></p>

<p>Minimum deposits to the gateway are 0.005BTC, 1LTC, 150NXT, or 1ETH.  To make a deposit, trust the gateway address <b><em>rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH</b></em> with no less than 0.5 BTC, 10 LTC, 150 NXT, or 5 ETH.

</p><p><b>IMPORTANT:</b>  If you would like to act as a rippler, please enable Rippling.  If you do not want your XAGATE IOU balances to fluctuate with other gateways you trust <em>of the same currency code</em>, then disable the Rippling option when you trust our Gateway.</p>

<p><b><u>Crypto Withdrawals</b></p></u>
<p>Withdrawals from the BTC gateway incur a 0.00025 BTC service fee.<br />
Withdrawals of LTC gateway incur a 0.0155 LTC service fee.<br />
Withdrawals from the NXT gateway incur a 3 NXT service fee.<br />
Withdrawals from the ETH gateway incur a 0.60 ETH service fee.<br /></p>

<p><b><u>CAD</u></b></p>

<p>A Royal Bank of Canada account holds clients' Canadian Dollars in custody for exchange of CAD.Rippleunion IOUs. There is a hard withdrawal limit of 250$ per day, per account. This is limit may be able to be increased in the future when an account remains in good standing with XAGATE.</p>

<p><b><u>Deposit CAD</u></b></p>

<p>Service fees for the Interac e-Transfer method are 2$ plus any fees applied by your bank.</p>

<p><b><u>Redeem CAD</u></b></p>

<p>Interac e-Transfers have a default hard limit of 100$ per account, per day.  The service fee is 2.50$.</p>

<p><b><u>USD</u></b></p>

<p>A Royal Bank of Canada account holds clients' United States Dollars in custody for exchange of USD.Rippleunion IOUs.  There is a minimum withdrawal limit of 20$USD and a minimum deposit limit of 5$.</p>

<p><b><u>Deposit USD</u></b></p>

<p>Service fees for processing are 5$ plus any fees applied by your bank.</p>

<p><b><u>Redeem USD</u></b></p>

<p>The service fee for withdrawals is 5$ plus any fees applied by your bank.</p>

<p><b><u>International Ripple Business Association Information</u></b></p>

<p>A Listed Gateway must be verified by the association and the member Gateway must disclose certain information and apply certain standards to its business practices.  XAGATE is currently a member gateway of the <a href="http://www.ripplebusiness.org/">International Ripple Business Association (IRBA)</a>.</p>

<p><b><u>About our Public Services</u></b></p>

<p>XAGATE is a brand of 8569541 CANADA INC. operated by Taylor Warden in Hamilton, Ontario. 8569541 CANADA INC. is registered with the Financial Transactions and Reports Analysis Centre of Canada; our registration number is <a href="http://www10.fintrac-canafe.gc.ca/msb-esm/public/msbregistry/searchByName/clf-eng.html#msbInformation/msbDetails/146292">M16017510</a>.
</p><p>My other open source projects include the QuickGatewayKit project, a resource for developers to create their own <a href="https://ripple.com/integrate/executive-summary-for-financial-institutions/" target="_blank">Ripple Gateway</a>.  <a href="https://github.com/whotooktwarden/QuickGatewayKit" target="_blank">Click here</a> for the GitHub and <a href="http://quickgatewaykit.org/" target="_blank">here</a> for the Showcase site and Development Blog. We offer a public <a href="https://xagate.com:5990" target="_blank">ripple-REST server</a> as well as a public rippled server for anyone to access.  You can support these projects by donating to <a href="https://www.bountysource.com/teams/qgk" target="_blank">QGK on Bountysource</a>.</p>

<p><b><u>Contact Us</u></b></p>

<p>If you have any questions about this Agreement or XAGATE's operations, please feel free to contact me at taylor@xagate.com. Estimated response times will vary between 24-48 hours.  All my community engagement with the Ripple community is <a href="https://forum.ripple.com/memberlist.php?mode=viewprofile&amp;u=15053" target="_blank">on the official Ripple Forum</a> and <a href="http://www.xrpchat.com/profile/373-twarden/">XRPchat.com</a>.
</p>

        </section>
      <br><br><br>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $("#nav a").click(function(e){
    e.preventDefault();
    $('html,body').scrollTo(this.hash,this.hash);
  });
});
</script>
</body>
     <hr>
      <footer>
        <p>&copy; XAGATE 2014 ~~~ <a href="https://who.godaddy.com/businesscard.aspx?domain=XAGATE.COM&card=hBUUy7cCoLC5Iy4AK52GTw==&prog_id=GoDaddy">Contact Us</a>.</p>
</footer>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56a7842e234dddf92e0c90f2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
