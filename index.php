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
        <title><?php include "include.php"; echo $gatewayName; ?></title> <!-- THE TITLE OF THIS PAGE-->
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
			<a class="navbar-brand" href="index.php"><?php include "include.php"; echo $gatewayName; ?></a><!-- YOUR HOMEPAGE LINK-->
			<?php include "header.php"; echo $headerText; ?>
	</div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>My big message to the world!</h1>
        <p>We have a major marketing statement here:
		<ul><li>Here is the first supporting fact</li>
		<li>Here is the second one, I can copy and paste it below for more supporting facts</li>
		<li><a href="https://xagate.com">XAGATE.com</a> the official QGK demonstration website</li>
		<li>View our <a href="products.php">example Ripple web-store</a></li>
		<li>View our <a href="fetch.php">Ripple statistics page</a></li>
		<li>This site acts as a showcase for the different versions of the web-kit</li>
		</li><li><b>This is the last important fact in bold</b></li></ul><br />
        <p><a class="btn btn-primary btn-lg" role="button" id="learnMore">Learn more &raquo;</a></p><br />
		<div id="more" style="display: none">  <!-- A Learn More button displays more information to the user -->
			<h2>What is Lorem Ipsum?</h2>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			<h3>Why do we use it?</h3>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
<br /><!-- Remove this line an below if you do not need a second paragraph -->
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
      </div>
    </div>
    <div class="container">
          <h2>Default Gateway Asset</h2>
          <p>This is information about what asset I accept deposits for.</p>
		  <p>This is the minimum deposit that I will accept.</p>
		</p><p>Service Fee:  this amount of this asset</p>
		<!--	<p><button id="viewFirstDetails">View Details</button></p> REMOVE FOR A VIEW DETAILS BUTTON-->
			<div id="firstDetails"> <!--<div id="firstDetails" style="display: none">  if using button-->
					 <p>
						 <form name="depositform" method="post" action="deposit.php">
<table width="450px">
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
  <input  type="text" name="ripple" maxlength="53" size="40">
 </td>
</tr>
 <tr>
							 <td valign="top">
  <label for="XXXamount">XXX Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="XXXamount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
				<p>Withdrawals:</p>
				<ul><li>This is the first withdrawal point of the withdrawal process</li>
				<li>Remember this second point, it could be important!
				</li>
				<li>Service Fee:  this amount of this asset</li>
				<li><a href="withdrawals.php"><em>Withdrawals</em></a></li>
				</ul>
				</p>
					 </div>
        </div>
        <div class="container">
          <h2>Second Option</h2>
          <p>This is information about what asset I accept deposits for.</p>
		  <p>This is the minimum deposit that I will accept.</p>
		<p>Service Fee:  this amount of this asset</p>
          
         <p>This is an important time to include your Gateway's Ripple Address for the user.  An example of a Ripple Address is <b><em>rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH</b></em>, make sure you replace this with yours!</p>
		</p><p><b>IMPORTANT:</b>  If you would like to act as a rippler, please enable Rippling.  If you do not want your IOU balances to fluctuate with other gateways you trust <em>of the same currency code</em>, then disable the Rippling option when you trust our Gateway.</p>
		</p><p>Service Fees:  this much of that asset on deposit.</p>
		<p><b>Withdrawals</b></p>
		 <p>Withdrawals incur this service fee.</p>
		  <!-- <p><button id="viewSecondDetails">View Details</button></p> button for displaying details in following tag-->
			<div id="secondDetails"> <!--<div id="secondDetails" style="display: none"> if using button-->
					 <p>
				<p><a href="xdeposit.php">Deposits</a> ~~~ <a href="xwithdraw.php">Withdrawls</a></p>
				</p>
					 </div>
       </div>
	    <div class="container">
          <h2>Third Option</h2>
          <p>This is information about what asset I accept deposits for.</p>
		  <p>This is the minimum deposit that I will accept.</p>
		</p><p>Service Fees:  this much of that asset on deposit.</p>
		<p><b>Withdrawals</b></p>
		 <p>Withdrawals incur this service fee.</p>
          <!-- <p><button id="viewThirdDetails">View Details</button></p> uncomment if using button for below tag-->
			<div id="thirdDetails"> <!-- <div id="thirdDetails" style="display: none"> replace if using button above-->
					 <p>
						 <p><a href="ydeposit.php">Deposit</a> ~~~ <a href="ywithdraw.php">Withdraw</a></p>
				</p>
					 </div>
       </div>
        <div class="container">
          <h2>Planned Features</h2>
          <ul>
			<li>This will happen!</li>
		  <li>So will this cool thing!  I can copy more of this line if more are needed and paste it below.</li>
				</ul>
        </div>
      </div>
      <hr>
	<?php include footer.php; echo $footerText; ?>
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
