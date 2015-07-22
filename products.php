<!DOCTYPE html>
<html class="no-js">
    <head>
        
         <!-- README
        1.  Preamble
        QuickGatewayKit was produced in most part with Initializr.
        Many thanks and praise for http://www.initializr.com/ and Jonathan Verrecchia
        Many thanks and praise to the twbs/bootstrap team!!
        
        This web-kit is offered AS IS and WITHOUT WARRANTY.
        This web-kit is released under Creative Commons.  See footer for details.
        
        QuickGatewayKit was first authored on May 11, 2015 by Taylor Warden.
        
        QGK was created for interested developers to begin a Ripple-based business.  Please do your own due diligence
        when developing a Ripple business such as a Gateway.  You must do your own research as well as contact
        relevent Government regulatory bodies within your country, in writing, with the final version of your Terms of
        Service before you conduct any business.
        
        It is VERY much suggested that before you continue any further to consult all of the Ripple Whitepapers found
        @ https://forum.ripple.com/viewtopic.php?t=4301
        
        I, TAYLOR WARDEN, HEREBY CLAIM NO RESPONSIBILITY THEREIN FOR ANY INDIVIDUAL, INDIVIDUALS, ENTITY, OR ENTITIES THAT MAY
        RECEIVE LEGAL ACTION, DIRECTLY OR INDIRECTLY, FOR THE USAGE OF THIS OR ANY PORTION OF THESE DOCUMENTS, IN PART
        OR IN FULL.  YOU HAVE BEEN WARNED.
        
        2. TABLE OF CONTENTS
        
        1.  Preamble
        2.  Table of Contents
        3.  Getting Started
        4.  Editing the Front-end
        5.  Editing the Back-end
        6.  You now have a Mock Gateway!  
        7.  Donations
        8.  Join the Ripple Community
        
        The contents of this web-kit include the following:
        
        index.php:  It is the home page of your Gateway website.  The default deposit action is linked to this page
        via deposit.php
        
        tpl.php:  this is your template file that you can copy, rename, and edit for a new page.
        
        tos.php:  this is an extremely basic Terms of Service template.  You ABSOLUTELY MUST have registered a LEGAL BUSINESS
        within your legal jurisidiction BEFORE YOU CONDUCT BUSINESS as a Ripple Gateway.  If you have problems with writing
        your terms, hire a lawyer or consult twarden on the Official Ripple forums @ https://forum.ripple.com for the possibility of
	consulting or further resources.
        
        irba.php:  The International Ripple Business Association (IRBA) is an organization in which member Gateways must abide
        by a strict business practices and disclosure agreements.  The IRBA verifies important information such as banking information.  
	This page includes more information on the IRBA an a simple template.  It is highly suggested if you are serious about operating
	a Gateway to one day apply for membership.  This page becomes more important as your Gateway project becomes more established.
        
        deposit.php:  the script that processes the asset offered by default on index.php.
        
        withdrawals.php:  the page to fill out a form to process a withdrawal notification via withdraw.php.
        
        xdeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        xwithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        ydeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        ywithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        3.  Getting Started
        
        By now, you should have read the Ripple Whitepapers, know of how legal it is to operate a Gateway in your legal jurisdiction,
	 and have an idea of what you would like to offer to the Ripple network.
        
        First, open index.php.  Read the page entirely an replace what placeholder text is there with your information.
        When editing the form, change XXXamount and XXX Amount to the default asset ticket.
        
        4.  Editing the Front-end
        
        When you have figured out your service fees an accepted assets, edit the remaining pages xdeposit.php, ydeposit.php
        xwithdraw.php, and ywithdraw.php.
        
        Once you have completed that, you are nearly half way there.  Now, you must complete your Terms of Service.
        A template to get you started is found within tos.php.  Be sure to edit YOUR-LEGAL-JURISDICTION and
        MY-BUSINESS'-LEGALLY-REGISTERED-NAME.
        
        5.  Editing the Back-end
        
        xd.php, xw.php, yd.php, yw.php, deposit.php, and withdraw.php are all back-end PHP scripts which process a
        deposit notification for the Gateway operator to process.
        
        Replace YOUREMAIL@DOMAIN.COM with your operating email address.  Replace XXXamount and XXX amount with the
        proper asset codes.
        
        Index.php links to deposit.php
        Withdrawals.php links to withdraw.php
        xdeposit.php links to xd.php
        xwithdraw.php links to xw.php
        ydeposit.php links to yd.php
        ywithdraw.php links to yw.php
        
        6.  You now have a Mock Gateway!  
        
        Now is the time to advertise your site and start market making over Ripple.
        The last step is to edit irba.php with the required information as outlined by ripplebusiness.org before 		applying for membership.
        
        7.  Donations
        
        Please consider donating a small amount of XRP or Bitcoin to rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C or
        18DDswfzZ4QMZKxNhbgffxgN8WdnLy3mXM respectively if this web-kit was of help to you starting your Ripple-based
        business.
       
       8.  Join the Ripple Community 
       
       Join us at the official Ripple forums!  https://forum.ripple.com/

        -->
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php include "include.php";  echo $gatewayName; ?></title> <!-- THE TITLE OF THIS PAGE-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<a class="navbar-brand" href="index.php"><?php include "include.php";  echo $gatewayName; ?></a><!-- YOUR HOMEPAGE LINK-->
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>


<table>
<tr><td><h1>Widget 1</h1></td><td>Currency Code:  <strong>W00</strong></td><td> <?//Each of these are your product names and codes over Ripple?>
</td><td>5$ CAD.XAGATE</td></tr><tr><td></td><td><img src="/img/00.png" /></td><?//This is the amount you are selling them for @ which Gateway?>
<td>50 last issued July 1st:</td><?//The total amount on stock/last issued and when?>
<td><a href="https://rippletrade.com/#/trust?to=rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH&amount=5%2FW00&name=WidgetsINC">Trust-link</a></td></tr><tr>
<?//The trust link for this item over Ripple. ?>
<td><a href="rw00.php">Redeem your IOU</a></td></tr></table><?//The link to the redemption/delivery request page?>

<hr>

<table>
<tr><td><h1>Widget 2</h1></td><td>Currency Code:  <strong>W01</strong></td><td> <?//Each of these are your product names and codes over Ripple?>
</td><td>1 BTC.SnapSwap</td></tr><tr><td></td><td><img src="/img/01.png" /></td><?//This is the amount you are selling them for @ which Gateway?>
<td>500 last issued July 1st:</td><?//The total amount on stock/last issued and when?>
<td><a href="https://rippletrade.com/#/trust?to=rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH&amount=5%2FW01&name=WidgetsINC">Trust-link</a></td></tr><tr>
<?//The trust link for this item over Ripple.?>
<td><a href="rw01.php">Redeem your IOU</a></td></tr></table><?//The link to the redemption/delivery request page?>

<hr>

<table>
<tr><td><h1>Widget 3</h1></td><td>Currency Code:  <strong>W02</strong></td><td><?//Each of these are your product names and codes over Ripple?>
</td><td>1$ CAD.XAGATE</td></tr><tr><td></td><td><img src="/img/02.png" /></td><?//This is the amount you are selling them for @ which Gateway?>
<td>50,000 last issued July 1st:</td><?//The total amount on stock/last issued and when?>
<td><a href="https://rippletrade.com/#/trust?to=rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH&amount=5%2FW02&name=WidgetsINC">Trust-link</a></td></tr><tr>
<?//The trust link for this item over Ripple.?>
<td><a href="rw02.php">Redeem your IOU</a></td></tr></table><?//The link to the redemption/delivery request page?>

	</div>
      <hr>
      <footer>
        <p>&copy; <?php include "include.php";  echo $gatewayName; ?> 20XX ~~~ Please read our <a href="/tos.php">Terms of Service</a>.</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">QuickGatewayKit</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/whotooktwarden/QuickGatewayKit" property="cc:attributionName" rel="cc:attributionURL">Taylor Warden</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/verekia/initializr-website" rel="dct:source">https://github.com/verekia/initializr-website</a>.</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
		<script>
			$(  "#viewFirstDetails").click(function() {
  $( getElementById = firstDetails ).show( "slow", function() {
    // Animation complete.
  });
});
			$(  "#viewSecondDetails").click(function() {
  $( getElementById = secondDetails ).show( "slow", function() {
    // Animation complete.
  });
});

			$(  "#viewThirdDetails").click(function() {
  $( getElementById = thirdDetails ).show( "slow", function() {
    // Animation complete.
  });
});
			$(  "#learnMore").click(function() {
  $( getElementById = more ).show( "slow", function() {
    // Animation complete.
  });
});
				</script>
    </body>
</html>
