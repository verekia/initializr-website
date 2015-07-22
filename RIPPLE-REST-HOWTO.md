_TRUSTLINES_

To set a trust line easily with ripple-REST:

POST to https://xagate.com:5990 /v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/trustlines?validated=true

		{
		  "secret": "sn3nxiW7v8KXzPzAqzyHXbSSKNuN9",
		  "trustline": {
		  "limit": "10",
		  "currency": "XAG",
		  "counterparty": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH",
		  "account_allows_rippling": false
		  }
		}

https://ripple.com/build/ripple-rest/#grant-trustline will give you more information on these fields. 
The response should be: 

			{
				"success": true,
				"trustline": {
				"account": "rf1BiGeXwwQoi8Z2ueFYTEXSwuJYfV2Jpn",
				"limit": "10",
				"currency": "XAG",
				"counterparty": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH",
				"account_allows_rippling": false,
				"account_trustline_frozen": false,
				"state": "pending",
				"ledger": "9302926",
				"hash": "57695598CD32333F67A70DC6EBC3501D71569CE11C9803162CBA61990D89C1EE"
				}
			}

Where Counterparty is the Gateway's address. 
You can test using USD or any other ISO currency: https://wiki.ripple.com/Currency_format

_GET BALANCES_

Navigate to https://xagate.com:5990/v1/server to view more information about the QuickGatewayKit public ripple-REST server.  
This will GET the server information via the /v1/server end-point.  Do this first to see if the server is online.

Now navigate to https://xagate.com:5990/v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/balances  
This is the /v1/accounts end-point for serving balances to the user.  The /v1/accounts end-point has to specify which address it is querying, 
in this case, I'm querying what assests ~Xagate has issued and available on its account.
The /balances portion of the URL tells ripple-REST that I want to specifically find balances.  
If I had used https://xagate.com:5990/v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH then ripple-REST does not know what I am requesting as there are multiple end-points for accounts.
For example, the /settings end-point will tell you what this Ripple account's settings are I.E. https://xagate.com:5990/v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/settings will tell
you that I have set a domain and this address requires you to use a destination tag when you send a payment to this account.

To get your account's balances, simply replace your address with my address and book-mark it to your Bookmarks bar in your web browser 
to fetch your balances.

_SEND PAYMENTS_


Install the Postman extension for chrome @ https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en

Navigate to the Body tab.  Click on the 'Raw' radio button.  Set the mode from text to JSON (application/json).

Select the POST method beside the URL field.
Input a ripple-REST server's end-point to POST to.  In this example, I'm going to POST a payment from my Gateway's address to my Hotwallet.  
We need to set what end-point we are using.  For sending payments, we need to specify our Ripple address as well as the validated=true
flag by inputting:  https://xagate.com:5990/v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/payments?validated=true  (remember to replace your ripple
address!)

Within the body of the Postman client, we need to tell ripple-REST what settings are required.  I will not go into detail about each field below, 
just the most necessary portions, the remainder of this documentation is found @ https://ripple.com/build/ripple-rest/#submit-payment

			{
			  "secret": "s...",
			  "client_resource_id": "91f708f0-e867-4fa2-8f29-4b989e744bff",
			  "last_ledger_sequence": "",
			  "max_fee": "0.1",
			  "fixed_fee": "0.01",
			  "payment": {
			    "source_account": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH",
			    "source_tag": "",
			    "source_amount": {
			      "value": "5.01",
			      "currency": "XRP",
			      "issuer": ""
			    },
			    "source_slippage": "0",
			    "destination_account": "rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C",
			    "destination_tag": "",
			    "destination_amount": {
			      "value": "5.01",
			      "currency": "XRP",
			      "issuer": ""
			    },
			    "invoice_id": "",
			    "partial_payment": false,
			    "no_direct_ripple": false
			  }
			}

The most important portions of this JSON payment object are:

secret:  your secret key (I've obviously omitted mine)
client_resource_id: 91f708f0-e867-4fa2-8f29-4b989e744bff  - This is the unique ID number I've set for this payment, 
you can get a unique ID by GETTING it from https://xagate.com:5990/v1/uuid
last_ledger_sequence:  an optional field, include a ledger sequence here if you know what you are doing
max_fee:  the maximum amount of XRP to pay to the network to include this transaction in a new ledger, in this case,
0.1XRP.
fixed_fee:  the amount of XRP to pay to the network to include this transaction in the ledger, in this case, 
I will pay no less than 0.01XRP for this tx.
source_account:  the ripple address that I'm sending this transaction from, I.E. your ripple address which you 
replaced within https://xagate.com:5990/v1/accounts/rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH/payments?validated=true
value: the amount I am sending, in this case, 5.01 XRP.
issuer: blank if sending XRP, otherwise, include the Gateway's ripple address within this field.
destination_account:  the account receiving the payment, in this case, ~Twarden/rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C
invoice_id:  optional field, maximum of 64 hex characters

Note that the URL for this endpoint has .../payments?validated=true set within the URL.  
This specific end-point when validated: true is set will respond using the format of https://ripple.com/build/ripple-rest/#confirm-payment


			{
			  "success": true,
			  "payment": {
			    "source_account": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH",
			    "source_tag": "",
			    "source_amount": {
			      "currency": "XRP",
			      "value": "5.01",
			      "issuer": ""
			    },
			    "source_slippage": "0",
			    "destination_account": "rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C",
			    "destination_tag": "",
			    "destination_amount": {
			      "currency": "XRP",
			      "value": "5.01",
			      "issuer": ""
			    },
			    "invoice_id": "",
			    "paths": "[]",
			    "no_direct_ripple": false,
			    "partial_payment": false,
			    "direction": "outgoing",
			    "result": "tesSUCCESS",
			    "timestamp": "2015-07-15T19:15:40.000Z",
			    "fee": "0.01",
			    "balance_changes": [
			      {
			        "currency": "XRP",
			        "value": "-5.02",
			        "issuer": ""
			      }
			    ],
			    "source_balance_changes": [
			      {
			        "currency": "XRP",
			        "value": "-5.02",
			        "issuer": ""
			      }
			    ],
			    "destination_balance_changes": [
			      {
			        "currency": "XRP",
			        "value": "5.01",
			        "issuer": ""
			      }
			    ],
			    "order_changes": []
			  },
			  "client_resource_id": "",
			  "hash": "D78B1FC78ADB286C8FB179FB25EC407B51A34268F8FADEF52E899575B2687D02",
			  "ledger": "14656436",
			  "state": "validated"
			}

If validated is set to false or omitted, you will receive a response in the format of:

			{
			  "success": true,
			  "client_resource_id": "123",
			  "status_url": ".../v1/accounts/r1.../payments/123"
			}

Note the status URL field, this URL will allow you to GET with your web browser the payment's status.
