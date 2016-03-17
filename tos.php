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
			<?php include "header.php; echo $headerText; ?>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>
      <hr>
<p><b><h1>Terms of Service</h1>
<h2>Terms of Service ("Agreement")</h2>
<h3>This Agreement was last modified on MONTH DAY, YEAR by <?php include "include.php";  echo $operatorName; ?>.</h3>
</p><p>
Please read these Terms of Service completely using <a href="index.php">our site</a> which is owned and operated by <?php include "include.php";  echo $gatewayName; ?>. These Agreements document the legally binding terms and conditions attached to the use of the Site: YOUR FULLY QUALIFIED DOMAIN NAME. By viewing or browsing the Site, or by accessing or using any Services, you are agreeing to be bound by these Terms of Service.</b></p>

<u><b><p>Intellectual Property</b></u></p>
<p>
The Site and all of its original content are the sole property of <?php include "include.php";  echo $gatewayName; ?><?php include "include.php";  echo $gatewayName; ?> and are, as such, are fully protected by the appropriate international copyright and other intellectual property rights laws.
</p>
<p><u><b>Links to Other Websites</b></u></p>
<p>
Our Site does contain a number of links to other websites and online resources that are not owned or controlled by <?php include "include.php";  echo $gatewayName; ?>.</p><p>
<?php include "include.php";  echo $gatewayName; ?> has no control over, and therefore cannot assume responsibility for, the content or general practices of any of these third party sites and/or services. Therefore, we strongly advise you to read the entire terms and conditions and privacy policy of any site that you visit as a result of following a link that is posted on our site.<p>


<p><b><u>Laws Affecting Transactions</u></b></p>

<p><b><u>Overview</u></b></p>

<p>I have done my research an will write an overview of laws in my country that will affect my business and its clients.</p>

<p><b><u>Identification Requests</u></b></p>

<p>If your clients must be KYC'd, you should include that information here.</p>

<p><b><u>Section 1</u></b></p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<p><b><u>Section 2</u></b></p>

<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

<p><b><u>Section 3</u></b></p>

<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

<p><b><u>Section 4</u></b></p>

<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

</em></b>
<p>
<b><u>Regarding the Law
</u></b></p><p>
These Agreements are governed in accordance with the laws of YOUR-LEGAL-JURISDICTION. Cryptocurrency and Money Services Businesses are a rapidly legislated and regulated industry. If you are a lawyer, investor, stakeholder, or Government regulatory agency that wishes to send an inquiry in regards to the law that may affect MY-BUSINESS'-LEGALLY-REGISTERED-NAME or its clients in any way (where applicable) see the Contact Us section. In the case of a civil lawsuit being issued to MY-BUSINESS'-LEGALLY-REGISTERED-NAME, the ensuing lawsuit will be heard from within a court of law based in YOUR-LEGAL-JURISDICTION. <b>ALSO, ALL CONTENT, SERVICES AND FUNCTIONS ON THIS SITE, OR ANY OTHER SITE LINKED TO THIS SITE, ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.</b></p>

<p><b><u>Changes to these Agreement(s)</u></b></p>

<p><?php include "include.php";  echo $gatewayName; ?>.  <?php include "include.php";  echo $gatewayName; ?> reserves the right to modify these Terms of Service at any time. Your decision to continue to visit and make use of the Site an its services after such changes have been made constitutes your formal acceptance of the new Terms of Service. Therefore, we ask that you review these Agreement(s) for such changes on an occasional basis. Should you not agree to any provision of these Agreement(s) or any changes we make to these Agreement(s), we ask and advise that you do not use or continue to access the MY-BUSINESS'-LEGALLY-REGISTERED-NAME site nor its services immediately.</p>

<p><u><b>Termination and Denial of Services</b></u></p>

<p><?php include "include.php";  echo $gatewayName; ?> reserves the right to terminate your access to the Site an its services, without any advance notice. <?php include "include.php";  echo $gatewayName; ?> also reserves the right to refuse deposits or withdrawals, without any advance notice (for example, in the instance of suspicious orders).</p>

<p><u><b>Pricing Information</b></u></p>

<p>All information relating to:  deposit/withdrawal limits, service fees, shipping fees, and taxes (where applicable) go here.</p>

<p><b><u>Contact Us</u></b></p>

<p>If you have any questions about this Agreement, please feel free to contact me at <?php include "include.php";  echo $operatorEmail ?>. Estimated response times will vary between 24-48 hours.
</p>

</div>
      <hr>
	<?php include "footer.php; echo $footerText; ?>
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
