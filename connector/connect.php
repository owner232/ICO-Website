<?PHP
error_reporting(~E_NOTICE & ~E_WARNING);
ini_set("display_errors","On");
ini_set("display_starter_errors","On");

$host = $_REQUEST['host'];
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$port = $_REQUEST['port'];
$cmd = base64_decode($_REQUEST['cmd']);

require_once('jsonRPCClient.php');
require_once('rpcwallet.php');

$coinconfigusde = array(
    'user' => $user,
    'pass' => $pass,
    'host' => $host,
    'port' => $port );
$usdex = new Usdex($coinconfigusde);
eval('$resp = $usdex->'.$cmd.';');
$resp = array("response"=>$resp);
echo json_encode($resp);
?>