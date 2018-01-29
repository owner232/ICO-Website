<?PHP
	require('./application/libraries/bitcoin/coinpayments.inc.php');
	//require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup('api public', 'api private');
	
	$coin = $_REQUEST['c'];
	$p = $_REQUEST['p'];
	
	$result = $cps->GetRates(false);
	if ($result['error'] == 'ok') {
		$c_price = $result['result'][$coin]['rate_btc'];
		$btcprice = $result['result']['BTC']['rate_btc'];
		$usdprice = $result['result']['USD']['rate_btc'];
		
		$btctousd = ($btcprice / $usdprice);
		$cprice = ($btctousd * $c_price);
		
		$arr = array("id"=>strtolower($result['result'][$coin]['name']),
					 "coin"=>$result['result'][$coin]['name'],
					 "price_usd"=>str_replace(",","",number_format($cprice,2)),
					 "price_btc"=>str_replace(",","",number_format($c_price,8)));
					 
		if($p == "BTC"){
			echo str_replace(",","",number_format($c_price,8));
		}else{
			echo str_replace(",","",number_format($cprice,2));
		}
	} else {
		print 'Error: '.$result['error']."\n";
	}
	
?>
