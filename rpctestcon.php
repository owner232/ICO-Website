<?PHP
error_reporting(E_ALL);
ini_set("display_errors","On");
ini_set("display_startup_errors","On");

require_once('class_usdex.php');
$coinconfigusde = array(
    'user' => 'usdex',
    'pass' => 'boo123',
    'host' => '69.41.174.83',
    'port' => '8233' );
$usdex = new Usdex($coinconfigusde);
$usdex->setcon($coinconfigusde);
$arr = $usdex->getbalance();
print_r($arr['response']);

?>