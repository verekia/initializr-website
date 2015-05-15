# QuickGatewayKit
QuickGatewayKit
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
        
        The contents of this web-kit include the following:
        
        index.php:  It is the home page of your Gateway website.  The default deposit action is linked to this page
        via deposit.php
        
        tpl.php:  this is your template file that you can copy, rename, and edit for a new page.
        
        tos.php:  this is an extremely basic Terms of Service template.  You ABSOLUTELY MUST have registered a LEGAL BUSINESS
        within your legal jurisidiction BEFORE YOU CONDUCT BUSINESS as a Ripple Gateway.  If you have problems with writing            your terms, hire a lawyer or consult twarden on the Official Ripple forums @ https://forum.ripple.com for the possibil         -ity of consulting or further resources.
        
        irba.php:  The International Ripple Business Association (IRBA) is an organization in which member Gateways must abide
        by a strict business practices and disclosure agreements.  The IRBA verifies important information such as banking             information.  This page includes more information on the IRBA an a simple template.  It is highly suggested if you
        are serious about operating a Gateway to one day apply for membership.  This page becomes more important as your               Gateway project becomes more established.
        
        deposit.php:  the script that processes the asset offered by default on index.php.
        
        withdrawals.php:  the page to fill out a form to process a withdrawal notification via withdraw.php.
        
        xdeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        xwithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        ydeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        ywithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        3.  Getting Started
        
        By now, you should have read the Ripple Whitepapers, know of how legal it is to operate a Gateway in your legal                jurisdiction, and have an idea of what you would like to offer to the Ripple network.
        
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
        
        6.  You are now have a Mock Gateway!  Now is the time to advertise your site and start market making over Ripple.
        The last step is to edit irba.php with the required information as outlined by ripplebusiness.org before applying for
        membership.
        
        7.  Please consider donating a small amount of XRP or Bitcoin to rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C or
        18DDswfzZ4QMZKxNhbgffxgN8WdnLy3mXM respectively if this web-kit was of help to you starting your Ripple-based
        business.
       
       8.  Join us at the official Ripple forums!  https://forum.ripple.com/
