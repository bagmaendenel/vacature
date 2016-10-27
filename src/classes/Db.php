<?php 

class Db {
	public static $_instance = null;
	public	$_pdo = null,
			$_error = false,
			$_query;

	public function __construct() {
		global $config;
		
		if($this->_pdo === null) {
			try {
				$this->_pdo = new PDO('mysql:host=' . $config['db_host'] . '; dbname='. $config['db_name'], 
				$config['db_username'], 
				$config['db_password']);
				
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		} 
		return $this->_pdo;
	}
	
	public static function getInstance() {
		if(!isset(self::$_instance)) {
			self::$_instance = new DB();
		}
		return self::$_instance;
	}
	
	/**
	* QueryResults
	*
	* Get results from database
	* @param (string) ($sql) Defined sql query
	* @param (array) ($params) Sql query params
	* @return (obj) ($result)
	*/
	public function queryResults($sql, $params = array()) {
		$cursor = $this->executeQuery($sql, $params);
		$result = $cursor->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	
	/**
	* QueryCount
	*
	* Checks if row exists
	* @param (string) ($sql) Defined sql query
	* @param (array) ($params) Sql query params
	* @return (bool) ($count)
	*/
	public function queryCount($sql, $params = array()) {
		$cursor = $this->executeQuery($sql, $params);
		$count = $cursor->rowCount();
		return $count;
	}
	
	public function executeQuery($sql, $params = array()) {
		if($cursor = $this->_pdo->prepare($sql)) {
			$x = 1;
			if(count($params)) {
				foreach($params as $param) {
					$cursor->bindValue($x, $param);
					$x++;
				}
			}
			if($cursor->execute()) {
				return $cursor;
			} else {
				return false;
			}
		} 
	}
}
?>