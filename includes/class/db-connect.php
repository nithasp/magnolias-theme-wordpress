<?php

 class database {
	var $HostName=HOST_NAME; //stores hostname or the server name
	var $DBUser=DB_USER;
	var $DBPass=DB_PASS;   //password for the database
	var $DBName=DB_NAME; //database name
	
	var $FilesPath=FILE_PATH;
	var $FilesAbsolutePath=FILE_ABS_PATH;

	var $conn;  //stores connection id
	var $re;  //stores the resource ID for the sql query
	var $record;    //stores properties of the record corresponding to that column
	var $num;   //returns number of records returned by the sql query
	var $latestID; //returns the id of the latest inserted record
	

	public function database(){
        $this->connect();
    }	
		
	public function connect(){
		$this->conn = mysql_connect($this->HostName,$this->DBUser,$this->DBPass)
			or die("Connection to the server failed<br>\n".mysql_error());			
		mysql_query("set names 'utf8'") or die(" can not  set names 'utf8'");	

		//select the database
		mysql_select_db($this->DBName)
			or die("No such database exist");
		return $this->conn;
	}

	public function query($sql){
		$this->re = mysql_query($sql,$this->conn)
		or die("There is error in the sql query<br>\n".mysql_error());
		return $this->re;
	}

	public function num_rows(){
		$num = mysql_num_rows($this->re);
		return $num;
	}

	public function movenext(){
		$this->record = mysql_fetch_object($this->re);
		return $this->record;
	}
	
	public function rs($field){ //get field
		return $this->record->$field;
	}
	
	function getinsertid(){
		return mysql_insert_id($this->conn);
		return $this->latestID;
	}

	public function clearresult() {
		return mysql_free_result($this->re);
	}

	public function close(){		
		return mysql_close($this->conn);
	}

 }
?>