<?PHP
error_reporting(E_ALL);
ini_set("display_errors","On");
ini_set("display_startup_errors","On");

require_once('class_usdex.php');
$coinconfigusde = array(
    'user' => 'username',
    'pass' => 'password',
    'host' => 'serverip',
    'port' => 'rpcport' );
$usdex = new Usdex($coinconfigusde);
$usdex->setcon($coinconfigusde);
$arr = $usdex->getbalance();
print_r($arr['response']);

?>
