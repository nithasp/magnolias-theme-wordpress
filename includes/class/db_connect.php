<?php
//header("Content-Type: text/html; charset=utf-8"); 
 class database2 {
 	
     // My Computer --------
	
		var $hostName="localhost"; //stores hostname or the server name
        var $userName="root";
        var $password="012300";   //password for the database
        var $dbName="vanguard"; //database name	
			
	//	var $FilesPath='http://localhost/web/';
	//	var $FilesAbsolutePath='I:\AppServ\www\web\';
	
	 
	 // SERVER
	 /*	
	 	var $hostName="localhost"; //stores hostname or the server name
        var $userName="wwwtamar";
        var $password="_4HOWqTPUEAJ";   //password for the database
        var $dbName="wwwtamar_db"; //database name	
		
		var $FilesPath='http://www.tamarindvillege.com/';
		var $FilesAbsolutePath='I:\AppServ\www\web\tamarindvillege';
	*/
	//
	
        var $conn;  //stores connection id
        var $rs;  //stores the resource ID for the sql query
        var $record;    //stores properties of the record corresponding to that column
        var $num;   //returns number of records returned by the sql query
        var $latestID; //returns the id of the latest inserted record
		
		//Page style
		var $pageSQL;
		var $page;
		var $totalpage;
		var $ListPerPage=20; //Default record per  page
		var $varURL; //return var.
		var $pageName="Page : ";	//Caption page	
		
		//Button page style default
		var $btnPageNoPadding="btnPageNoPadding";
		var $btnPage="btnPage";
		var $btnPageTrue="btnPageTrue";
		
		var $shortMonth=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		var $longMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
		
		var $engDay =array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		
	
	   function database2(){
            $this->connect();
        }	
		
		 function connect(){
            $this->conn = @mysql_pconnect($this->hostName,$this->userName,$this->password)
            or die("Connection to the server failed<br>\n".mysql_error());			
			mysql_query("set names 'utf8'") or die(" can not  set names 'utf8'");	
		
		    //select the database
            @mysql_select_db($this->dbName)
            or die("No such database exist");
            return $this->conn;
        }
		
		function getID2Insert() {
			return @mysql_insert_id();
		}
		
		function query($sql){
            $this->rs = @mysql_query($sql,$this->conn)
           or die("There is error in the sql query<br>\n".mysql_error());
            return $this->rs;
        }
		
		function num_rows(){
            $num = @mysql_num_rows($this->rs);
            return $num;
        }
		
		function movenext(){
            $this->record = @mysql_fetch_object($this->rs);
            return $this->record;
        }
		
		function getfield($field){
            return $this->record->$field;
        }
		
	   function getinsertID(){
          $this->latestID = @mysql_insert_id($this->conn);
          return $this->latestID;
        }
		
		function clearResult() {
			return @mysql_free_result($this->rs);
		}
		
		function close(){
          return @mysql_close($this->conn);
        }
		
		
		
	function getOneFieldValue($sql, $getField) {
			$this->query($sql);
			if ($this->num_rows()>0) {
					$this->moveNext();
					$getValue=$this->getField("$getField");
			} else {
					$getValue="";
			}
			return $getValue;
	}		
		
		
//Date Time Formate from yyyy-mm-dd h:i:s example : 2008-10-30 12:30:00 --------------------------------------------------------

	function convert2Timestamp($txt) {
		
		$D=substr($txt,8,2);
		$M=substr($txt,5,2);
		$Y=substr($txt,0,4);
		$H=substr($txt,11,2);
		$I=substr($txt,14,2);
		$S=substr($txt,17,2);
		
		return mktime($H,$I,$S,$M,$D,$Y);
	}	
			  
	 function ShortDate($txt)
	{
		$Year=substr($txt,0,4);
		$Month=substr($txt,5,2);
		$DayNo=substr($txt,8,2);
		$Month=$Month-1;
			return $this->shortMonth[$Month]." ".$DayNo.", ".$Year;
	}	

	function ShortDateTime($txt) 
	{
		$Year=substr($txt,0,4);
		$Month=substr($txt,5,2);
		$DayNo=substr($txt,8,2);
		$Time=substr($txt,11,8);
		$Month=$Month-1;
			return $this->shortMonth[$Month]." ".$DayNo.", ".$Year." ".$Time;
	}	

	function iframeSet() {
		$iframe='<iframe id="savetarget" name="savetarget" src="" style="width:0px;height:0px;border:0"></iframe>';
		echo $iframe;
	}					
	
/*Function NEW page split */


//function page split----------------------------------------------------------------------------------------------------------------------------------
		function pu_query()
		{
			global $page;
			global $totalpage;
			$page=$_GET['page'];
	
			$result=$this->query($this->pageSQL);
			if (empty($page))	$page=1;
			$num=$this->num_rows();
			$rt = $num%$this->ListPerPage;
					

			$totalpage = ($rt!=0) ? floor($num/$this->ListPerPage)+1 : floor($num/$this->ListPerPage); 
			$goto = ($page-1)*$this->ListPerPage;
	
			$this->pageSQL .= " LIMIT $goto,$this->ListPerPage ";
			$this->totalpage=$totalpage;
			$this->page=$page;
			$result=$this->query($this->pageSQL);
	
			return $result;
	}
	
	function pu_pageloop($option="", $align="left") {
		global $page;
		global $totalpage;
		if ($totalpage > 1) {
						$b=floor($page/10); 
						$c=(($b*10));
											
						if($c>1) {
							$prevpage = $c-1;
							$pageInfo.=" <input type=\"button\" class=\"$this->btnPageNoPadding\" value=\"<<\" title=\"10 pages previous\" ".
													" onclick=\"window.location.href='".$_SERVER["PHP_SELF"]."?page=$prevpage&$option'; \" />";
						}
						else{
							$pageInfo.='';
						}

						if($page>1 && $page<=$totalpage) {
							$prevpage = $page-1;
							$pageInfo.=" <input type=\"button\" class=\"$this->btnPage\" value=\"<\" title=\"Previous\" ".
													" onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?page=$prevpage&$option'\" />";
						}  else {
							$pageInfo.='';
						}
				
						$pageInfo.= " <b>";
						
						for($i=$c; $i<$page ; $i++) {
							if($i>0)
							$pageInfo.=" <input type=\"button\" class=\"$this->btnPage\" value=\"$i\"  title=\"Page $i\" ".
													"onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?page=$i&$option'\" />";
						}
				
						$pageInfo.=" <input type=\"button\" class=\"$this->btnPageTrue\" value=\"$i\"  title=\"Page $i\"  />";
						
						for($i=($page+1); $i<($c+10) ; $i++) {
							if($i<=$totalpage)
							$pageInfo.=" <input type=\"button\" class=\"$this->btnPage\" value=\"$i\"  title=\"Page $i\" ".
													"  onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?page=$i&$option'\" />";
						}
				
						$pageInfo.= "</b> ";
						
						if($page!=$totalpage) {
							$nextpage = $page+1;
							$pageInfo.=" <input type=\"button\" class=\"$this->btnPage\" value=\">\" title=\"Next\" ".
													"onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?page=$nextpage&$option'\" />";
						} else {
							$pageInfo.='';
						}
				
						if($c>=0) {
							if(($c+10)<=$totalpage){
								$nextpage = $c+10;
								$pageInfo.=" <input type=\"button\" class=\"$this->btnPageNoPadding\" value=\">>\" title=\"10 pages next\" ".
														"onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?page=$nextpage&$option';\">";
							} else {
								$pageInfo.='';
							}
					    } else{
							$pageInfo.='';
						}
			} 
	
			return $pageInfo;
	}
		
}// end class
?>