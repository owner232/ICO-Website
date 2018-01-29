**If this website helped you Please feel free to send something our way!**

 - BTC: 14kSNTG4T21vn1AY6Yv4PAwUEPurx6wHQ9
 - LTC: LNnjWwDA6yBqsEWkcVtwyZxT5QzSRt5ytP
 
 IF YOU WANT CUSTOM WORK, Send me an email at owner232@gmail.com With what you want done and I will reply with a quote.
 
ICO website light documentation.

This site worked for us without an issue.

Import the sql file in the main directory called "importthisfile.sql"
Create an account on https://www.coinpayments.net/

Enable the 3 wallets by checking them.

BTC,LTC,ETH

You can test connectivity by going on your ico website and creating a deposit, Note this will create a deposit on the website which will be waiting for you to send funds you can ignore it and it will timeout. We had a ton of people click the deposit button 20 times and make 20 deposit addresses and message us saying their coin timed out. When it didnt.

Create an api key with everything but withdraw and anything related to it disabled.
head over to your website/ip  with the ico site running on it, and add /admin to the url.

NOTE: THE CAPTCHA WILL NOT WORK UNTIL YOU EDIT LOGIN.PHP / LOGINS.PHP AND CHANGE THE CAPTCHA KEY TO YOUR DOMAIN
But for now you can just click login and it will work.

login with this

admin

sTezEc6u@u*h

You can change the password once you login.

click on payment under settings and add your api keys for coinpayments.
Then add your wallet RPC settings,

(IF you are running the wallet on a remote server It needs the connector folder hosted on port 80 so it will connect to the web script and connect to the wallet. 

IF you arent then just leave it alone it will connect to 127.0.0.1
(remotewalletip/connector)

If you see a wallet balance in the /admin page then your wallet is connected. you can also go to /rpctestcon.php
This RPC interface was designed to run on the usdex wallet, It should work on your wallet if it was forked from btc.
The referral stuff has all been disabled, it was useless dont bother with it unless you want to add code and make it useful.
ALL CONFIG FILES ARE IN application/config

You can test the email config by doing password reset on the main page.
To edit your google captcha edit logins.php and register.php
under
/application/views

Some things you have to edit from the database, I use navicat it has a 30 day trial works wonders.
Like coin sold, it allows you to change alot more than the interface allows
2FA is real and works you dont need to mess with it, it generates a new key for everyone.

You need to run this cron job every 1-2 minutes

wget -O /dev/null -o /dev/null https://yourwebsite/crontodo
  
Limit BTC Deposit* is a option to disable the deposits after the amount of btc/ltc/eth coin value to usd is over what the ico would sell for to prevent over selling.

You will notice that the database will say btc but will mean LTC BTC AND ETH dont worry about it. The deposits say this too. You can see all of the deposits on coinpayments if it bothers you edit the code.

Your total btc is accurate to the total btc you have gained it adds up ltc eth and all of that and computes the output to btc
