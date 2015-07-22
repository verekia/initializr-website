QGK Public Ripple Resources

The QuickGatewayKit project assists developers by providing Rippled and Ripple-REST servers for public use.  
This file documents the steps to take to access these services.

Ripple-REST

For the latest API information, visit: https://ripple.com/build/ripple-rest/

Ripple-REST is available through https://xagate.com:5990.  To interface with this service, 
you can send GET requests from your web browser by navigating to any of the available endpoints, I.E.
 https://xagate.com:5990/v1/server will provide information about the rippled server that REST connects
 to for accessing the requested information about the Ripple Network.

It is not suggested to send POST requests to this server unless it is a test account.  
To POST via the command line, you can use the curl package.  A curl command starts with the syntax:

curl -H "Content-Type: application/json" -X POST -d '{"method":
...

Where you specify the method and what accompanying JSON you wish to POST. 

Rippled

For the latest information about the rippled api, visit:  https://ripple.com/build/rippled-apis/

rippled is available through the ws and rpc protocols. 

Web socket

There is a websocket client for Chrome available @ 
https://chrome.google.com/webstore/detail/simple-websocket-client/pfdhoblngboilpfeibdedpjgfnlcodoo?hl=en 
called the Simple Websocket Client.  Within your browser, click the Ws icon by the address bar and enter the web socket address:

ws://xagate.com:51233

and then click on Open.  If the response is 'undefined' then this server may be down for maintenance at the time.  
If the response is OPEN, then you may enter whatever JSON you wish to execute into the text field directly below the URL.  
I.E. if you wanted to fetch a new Ripple wallet, you would enter:

{
    "command": "wallet_propose",
    "passphrase": "test"
}

Please remember that in this specific case you should use a randomly generated string of alphanumeric characters 
(at least 12-35 characters in length).

RPC

The JSON-RPC client that works the best with Chrome is the Postman extension found @ 
https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en
When using the Postman client, ensure you are using the correct settings.  You should 
also be careful with the URL if using this client in conjunction with REST, the URL
will determine which endpoint the API will use, if you malform the URL you will receive
invalid request as the return.  Also, ensure you click the Body tab, Raw radio button, and
select JSON (application/json) instead of the default text mode or else your JSON
requests will not respond successfully with ripple-REST.

Within this extension, select POST and then enter the URL:

http:/xagate.com:51234

to access the rippled server.  For example, if you wanted to receive account information about a specific Ripple address, 
click on the Body tab below the URL field and click on the Raw button.  In the text field below, input:


{
    "method": "account_info",
    "params": [
        {
            "account": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH",
            "strict": true,
            "ledger_index": "validated"
        }
    ]
}

To receive more information about this account.

For any issues you face with either of these APIs, you can ask for assistance @ https://forum.ripple.com on the Developers board.  
Before posting a new thread regarding your issue, please use the search function as your answer might already exist.

