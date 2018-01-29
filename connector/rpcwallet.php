<?php
class Usdex  {

    private $client;
    function __construct( $config ) {
        
        $connect_string = sprintf( 'http://%s:%s@%s:%s/', 
            $config['user'],
            $config['pass'],
            $config['host'],
            $config['port'] );
        $this->client = new jsonRPCClient( $connect_string, true );
    }
    function get_transaction( $txid ) {
        return $this->client->gettransaction( $txid );
    }
    function set_account( $address, $account ) {
        return $this->client->setaccount($address, $account);
    }
    function get_balance( $account, $minconf=1 ) {
        return $this->client->getbalance( $account, $minconf );
    }
    function checkaddress( $address	) {
        return $this->client->validateaddress( $address );
    }
	function listtransactions($account){
		return $this->client->listtransactions($account);
	}
	function listtransact($account,$type){
		$data = array();
		$d = $this->client->listtransactions($account,10000);
		foreach($d as $key=>$val){
			if($val['category'] == strtolower($type)){
				array_push($data,$val);
				
			}
		}
		return $data;
	}
	function getinfo(){
		return $this->client->getinfo();
	}
    function getbalance() {
        return $this->client->getbalance();
    }
    function getbalanceacct($acct) {
        return $this->client->getbalance($acct);
    }
    function getbalancefaucet() {
        return $this->client->getbalance("faucetaddr");
    }
    function createaddress($account) {
        return $this->client->getaccountaddress($account);
    }
    function getaddressesbyaccount($account) {
        return $this->client->getaddressesbyaccount($account);
    }
    function move( $account_from, $account_to, $amount ) {
        return $this->client->move( $account_from, $account_to, $amount );
    }
    function send( $account, $to_address, $amount ) {
        $txid = $this->client->sendfrom( $account, $to_address, $amount );  
        return $txid;
    }
    function sendto( $to_address, $amount ) {
        $txid = $this->client->sendtoaddress( $to_address, $amount );  
        return $txid;
    }
    function sendfaucetto( $to_address, $amount ) {
        $txid = $this->client->sendfrom( "faucetaddr", $to_address, $amount );  
        return $txid;
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

