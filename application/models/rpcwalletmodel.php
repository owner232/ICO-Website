<?php
class rpcwalletmodel {

    private $connect_string;
    private $client;
	function setcon($config){
		$this->connect_string = sprintf( base_url().'/connector/connect.php?user=%s&pass=%s&host=%s&port=%s&cmd=', 
            $config['user'],
            $config['pass'],
            $config['host'],
            $config['port'] );
	}
	function connect($cmd){
		$arr = file_get_contents($this->connect_string.base64_encode($cmd));
		$obj = json_decode($arr, TRUE);
		return $obj['response'];
	}
    function get_transaction( $txid ) {
		return $this->connect("get_transaction('$txid')");
    }
    function get_balance( $account, $minconf=1 ) {
		return $this->connect("get_balance('$account','$minconf')");
    }
    function checkaddress( $address	) {
		return $this->connect("checkaddress('$address')");
    }
	function listtransactions($account){
		return $this->connect("listtransactions('$account')");
	}
	function getinfo(){
		return $this->connect('getinfo()');
	}
    function getbalance() {
        return $this->connect('getbalance()');
    }
    function getbalanceacct($acct) {
        return $this->connect("getbalanceacct('$acct')");
    }
    function createaddress($account) {
		return $this->connect("createaddress('$account')");
    }
    function getaddressesbyaccount($account) {
		return $this->connect("getaddressesbyaccount('$account')");
    }
    function move( $account_from, $account_to, $amount ) {
		return $this->connect("move('$account_from','$account_to',$amount)");
    }
    function send( $account, $to_address, $amount ) {
		return $this->connect("send('$account','$to_address',$amount)");
    }
    function sendto( $to_address, $amount ) {
		return $this->connect("sendto('$to_address',$amount)");
    }

	function getconfirmation($account){
		$d = $this->client->listreceivedbyaccount();
		if(is_array($d)){
			foreach($d as $val){
				if($val['account']==$account){
					$ret = $val;
					break;
				}
			}
			if(!$ret['account']){
				$ret['confirmation'] = 0;
			}
		}else{
			$ret['confirmation'] = 0;
		}
		return $ret;
	}
}

