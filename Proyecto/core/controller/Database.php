<?php
/// evilnapsis.tk evilnaps 6RSk!IpTJ]vv
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="katana";$this->pass="L00lapal00za";$this->host="localhost";$this->ddbb="katana";
	//	$this->user="minedeck_mduser";$this->pass="l00lapal00za";$this->host="localhost";$this->ddbb="minedeck_md";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>