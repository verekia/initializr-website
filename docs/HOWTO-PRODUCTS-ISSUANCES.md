_HOWTO ISSUE PRODUCTS_

This file is documentation for how to proceed with modifying this web-kit to work as a web store for your exisiting
business.  This example is the Miners Inc. web store, they specialize in selling hardware to Cryptocurrency miners.

The company has several products that they wish to sell.  First, they must advertise their wares by:

Create a web page separate from the marketing statements on your index.php or directly within the index
which displays photos of your product, its information, and the price.  Each product will require a
currency code that it represents on the Ripple network; this can be anything that is 3 characters in length.
This code must be unique and users must be informed not to allow Rippling of this asset when extending trust
to your Issuing account.  

In this example, Miners Inc. wants to sell AntMiners using Ripple.  They have many versions of the AntMiner, some
are old while the majority are new.  You, as the operator, must decide how to index your products using only 3 letter
currency codes.  For example, Miners Inc. sets A00-A99 to allow for a total of 100 unique types of AntMiner products
that they could offer for sale.

Next to each item on the page which hosts the product info, you include the currency code within a trust hyperlink
using RippleTrade.  This can be done by editing the following URL with your own Ripple address, amount, currency code,
and Name of your Gateway:

https://rippletrade.com/#/trust?to=rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH&amount=150%2FCAD&name=XAGATE

Miners Inc. has set up a total of 4 AntMiner assets over Ripple for sale.  They do this by assigning A0-A03 to their
products on their web site and instruct users to trust their Issuing account for the IOU which is a claim onto this
piece of mining hardware.  The operator of Miners Inc. trusts one of its Ripple accounts with an amount of A00, A01, A02,
and A03.  The operator then sends the amount and type of IOUs to a hot-wallet Ripple account, this account is the 
account that Miners Inc. will receive their money for in exchange for their products.  The operator then creates an 
order book for his assets by selling them for XRP, Bitcoin, or any other desired asset issued by a Gateway on the 
Ripple Network.

On your web site, you instruct your customers how to redeem the IOUs for claims on the mining hardware.  This can 
be done with the withdrawal notification system by editing the withdrawal pages and scripts to reflect the currency
codes that Miners Inc. created.  The client should be given a Destination Tag to send in their IOU(s) to the Issuing
address, this is required because operators must retrieve completed sales data for their accounting obligations.

If Miners Inc. wished to, they could create a mining hardware trade-in program by using these same currency codes
and the deposit actions of this web-kit.  Specify the terms for a trade in on your web site such as the amount of
money over Ripple this user will receive in exchange for their old hardware.  Typically, a trade in program requires
the client to send their product in at their own cost for evaluation.  Let's say that Miners Inc. receives a fairly 
recent AntMiner that matches the version of their A02 AntMiners in stock; they can specify that their terms are a 
certain percentage of their asking price for a new piece of this hardware and then issue that amount to the client.
If the client refuses the quote, then Miners Inc. would return the hardware at the clients cost.
