<?php
class Key
{
	const host = 'mytrustfunders.com';
	
	public function chkEvaluation()
	{
		if($_SERVER['HTTP_HOST'] != self::host && $_SERVER['HTTP_HOST'] != str_replace('www.','',self::host))
			return false;
		else
			return true;
	}
}
?>
