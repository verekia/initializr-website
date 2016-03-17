<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php include "include.php"; echo $gatewayName; ?></title> <!-- THE TITLE OF THIS PAGE-->
  <link rel="stylesheet" type="text/css" media="all" href="./singlepage/css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" href="css2/main.css">
  <script src="js2/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
  <div id="w">
    <div id="content">
  <div id="topbar">
      | <a href="">Topbar Item 1</a> 
      | <a href="">Topbar Item 2</a> 
      | <a href="">Topbar Item 3</a> 
      | <a href="">Topbar Item 4</a>
      | <a href="">Topbar Item 5</a> |
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
                        <a class="navbar-brand" href="index.php"><?php include "include.php"; echo $gatewayName; ?></a><!-- YOUR HOMEPAGE LINK-->
                        <?php include "header.php"; echo $headerText; ?>
                        <a class="navbar-brand" href="#asset1">asset1</a>
                        <a class="navbar-brand" href="#asset2">asset2</a>
                        <a class="navbar-brand" href="#asset3">asset3</a>
                        <a class="navbar-brand" href="#tos">Terms of Service</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div><br />

   <nav id="stickynav">
        <ul id="nav" class="clearfix">
            <li><a href="#asset1">Assest 1</a></li>
            <li><a href="#asset2">asset2</a></li>
            <li><a href="#asset3">asset3</a></li>
          <li><a href="#tos">Terms of Service</a></li>
        </ul>
      </nav>

<section id="about" class="section">
      <br /><h1><?php include "include.php"; echo $gatewayName; ?><br />
</h1>
<p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </p>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. </p>
<br /><!-- Remove this line an below if you do not need a second paragraph -->

          <p><h2><em>Fee Schedule</em></h2><p>
<strong><p class="center">Assest 1</p></strong>
<p><strong>Deposits: </strong>% of total order or ### flat rate.</p>
<p><strong>Withdrawals: </strong> % of total order or ### flat rate.</p>
<strong><p class="center">asset2</p></strong>
<p><strong>Deposits: </strong>% of total order or ### flat rate.</p>
<p><strong>Withdrawals: </strong> % of total order or ### flat rate.</p>
<strong><p class="center">asset3</p></strong>

<p><strong>Deposits: </strong>% of total order or ### flat rate.</p>
<p><strong>Withdrawals: </strong> % of total order or ### flat rate.</p>
      </section>

        <section id="asset1" class="section">
      <h2>Deposit Assest 1</h2>
<p>This is information about what asset I accept deposits for.</p>
                  <p>This is the minimum deposit that I will accept.</p>
                </p><p>Service Fee:  this amount of this asset</p>
                <!--    <p><button id="viewFirstDetails">View Details</button></p> REMOVE FOR A VIEW DETAILS BUTTON-->
                        <div id="firstDetails"> <!--<div id="firstDetails" style="display: none">  if using button-->
                                         <p>

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
  <label for="asset1amount">asset1 Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="asset1amount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br /><br />
            <h2>Withdraw asset1</h2>
 <ul><li>This is the first withdrawal point of the withdrawal process</li>
                                <li>Remember this second point, it could be important!
                                </li>
                                <li>Service Fee:  this amount of this asset</li></ul>
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
  <label for="asset1amount">asset1 Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="asset1amount" maxlength="2" size="5">
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
</section>

        <section id="asset2" class="section">
<h2>Deposit asset2</h2>

	 <form name="depositform" method="post" action="yd.php">
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
  <label for="asset2amount">asset2 Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="asset2amount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br />

<h2>Withdraw asset2</h2>

<form name="withdrawalform" method="post" action="yw.php">
 
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
 
  <label for="asset2amount">asset2 Amount*</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="asset2amount" maxlength="2" size="5">
 
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

        <section id="assest3" class="section">
<h2>Deposit asset3</h2>

 <form name="depositform" method="post" action="xd.php">
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
  <label for="asset3amount">asset3 Amount*</label>
 </td>
 <td valign="top">
  <input  type="text" name="asset3amount" maxlength="2" size="5">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form><br />

<h2>Withdraw asset3</h2>

<form name="withdrawalform" method="post" action="xw.php">
 
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
 
  <label for="asset3amount">asset3 Amount*</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="asset3amount" maxlength="2" size="5">
 
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
 
</form></section>

        <section id="tos" class="section">
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
</section>

</body>
     <hr>
      <footer>
        <?php include "footer.php"; echo $footerText; ?>
</footer>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
</html>
