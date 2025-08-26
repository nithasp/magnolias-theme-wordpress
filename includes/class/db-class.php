<?php
class dbClass extends database {
	var $TitlePage ='';
	
	//Max value and +1
	function getMaxID($table, $PKID, $Condition=NULL) {
		$Sql="SELECT MAX(".$PKID.") AS maxID FROM ".$table.$Condition." LIMIT 1; ";
		$re=mysql_query($Sql);

		$maxID=mysql_result($re,0);
		mysql_free_result($re);
		if (empty($maxID)) {
			return '1';
		} else {
			return ($maxID+1);
		}
	}
	
	//Max value 
	function getMaxValue($table, $FieldInt, $Condition=NULL) {
		$Sql="SELECT MAX(".$FieldInt.") AS maxValue FROM ".$table.$Condition." LIMIT 1; ";
		$re=mysql_query($Sql);
		$Value=mysql_result($re,0);
		mysql_free_result($re);
		$MaxValue=($Value<=0 ? '0' : $Value);
		return $MaxValue;
	}

	//min value
	function getMinValue($table, $FieldInt, $condition=NULL) {
		$Sql="SELECT MIN(".$FieldInt.") AS minValue FROM ".$table.$condition;
		$re=mysql_query($Sql);
		$Value= mysql_result($re,0);
		mysql_free_result($re);
		$MinValue=($Value<=0 ? '0' : $Value);
		return $MinValue;
	}
	
	function BgListColor($i,$colorOver, $colorOut) {
		if ($i%2==0) { $bg=$colorOver; } else { $bg=$colorOut;  }
		return ' bgcolor="'.$bg.'"  ';
	}
	
	function BgListColor2($i) {
		if ($i%2==0) { $bg='#F5FCFE'; } else { $bg='#ffffff';  }
		return ' bgcolor="'.$bg.'" onmouseover="this.bgColor=\'#ffffee\';" onmouseout="this.bgColor=\''.$bg.'\';" ';
	}
	
}

?>
