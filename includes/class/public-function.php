<?php
$LongMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");

$ShortMonth=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");	
$ShortDay=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");

$LongMonthTh=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
$ShortMonthTh=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$LongDayThai=array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์');


$ImgType=array('image/pjpeg', 'image/jpeg', 'image/jpg', 'image/gif', 'image/png');	
$ReturnImgType=array('image/pjpeg'=>'jpg', 'image/jpeg'=>'jpg', 'image/jpg'=>'jpg', 'image/gif'=>'gif', 'image/png'=>'png');


function get_context($idname) {
		//Shipping
		if ($idname=='register') { $txt="พัสดุลงทะเบียนในประเทศ"; } 
		if ($idname=='ems') { $txt="พัสดุด่วนในประเทศ (EMS)"; }
		
		//Payment
		if ($idname=='transfer') { $txt="โอนเงินเข้าบัญชีธนาคาร"; }
		if ($idname=='paysbuy') { $txt="ชำระเงินด้วยระบบของ Paysbuy"; }	
		if ($idname=='paypal') { $txt="ชำระเงินด้วยระบบของ Paypal"; }		
		if ($idname=='creditcard') { $txt="ชำระเงินด้วยบัตรเครดิต"; }
		
		return $txt;
}

function getOrderStatus($IsStatus,$ShowColor=NULL) {
	global $arrOrderStatus;
	
	$txt=$arrOrderStatus[$IsStatus];
	
	if ($ShowColor=='yes') {
		return $txt;
	} else {
		return strip_tags($txt);		
	}
	
	/*
	$txt="";
	switch ($IsStatus) {
		case "pending" : $txt='<span class="orange">รอการตรวจสอบ</span>'; break;
		case "processing" : $txt="กำลังดำเนินการ"; break;
		case "shipping" : $txt="อยู่ระหว่างการจัดส่ง"; break;
		case "completed" : $txt="จัดส่งเรียบร้อยแล้ว"; break;
		case "cancel" : $txt="ยกเลิกใบสั่งซื้อ"; break;
	}
	*/
	return $txt;
	
}


function PrefixProvinceBangkok($ProvinceID) {
	$prefix=array();
	if ($ProvinceID=='10') { 
		$prefix[0]="แขวง";
		$prefix[1]="เขต";
		$prefix[2]="";
	} else {					
		$prefix[0]="ต.";
		$prefix[1]="อ.";
		$prefix[2]="จ.";
	}
	
	return $prefix;
	unset($prefix);
}
	
function CheckIncludeFile($Content) { //formate include will be {xxxxxx.xxxx}
	$arrContent=array();
	if (eregi("(\{[a-zA-Z0-9_\-]*.(html|php|htm)\})",$Content)) {
			$Content=eregi_replace("(\{[a-zA-Z0-9_\-]*.html\})","\\1",$Content);
			$Content=str_replace("{","",$Content);
			$Content=str_replace("}","",$Content);
			if (file_exists(strip_tags($Content))) {
				//$Content=file_get_contents(strip_tags($Content));				
				$arrContent[0]=true;
				$arrContent[1]=$Content;
			}
	} 
	return $arrContent;
}

function CheckImageBanner($Path,$Image, $TitleImage) {
	$Picture='';
	if ($Image!='' && file_exists($Path.'/'.$Image)) {
		$etc=substr($Image,-3);				
		if ($etc=='swf') {	
			$Picture=DisplayFlash($Path.'/'.$Image,$w,$h);  
		} else {
			$Arr=getimagesize($Path.'/'.$Image);
			$w=$Arr[0];
			$h=$Arr[1];
			$Picture='<img src="'.$Path.'/'.$Image.'" alt="'.$TitleImage.'" width="'.$w.'" height="'.$h.'" border="0" />';
		} 			
	} 
	return $Picture;
}

function FileWithOutEtc($filename) {
		$arr=explode('.',$filename);
		return $arr[0];
}

function DisplayFlash($Path) {
	$arr=getimagesize($Path);
	$w=$arr[0];
	$h=$arr[1];
				
	$src=FileWithOutEtc($Path);			
	$Flash="<script type='text/javascript'>AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','$w','height','$h','title','Thai-Life','src','$src','quality','high','wmode','transparent','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','$src');</script>
<noscript><object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0\" width='$w' height='$h' title=\"Thai-Life\">
      <param name=\"movie\" value='$src.swf' />
      <param name=\"quality\" value=\"high\" />
      <param name=\"wmode\" value=\"tranparent\" />    
    </object>    
  </noscript>";
  return $Flash;
}

function ShortDateTimeThai($timestamp, $ShowTime=NULL) { //date is timestamp
global $ShortMonthTh;
	$dd=date('j',$timestamp);
	$mm=date('n',$timestamp);
	$yy=date('Y',$timestamp);
	if ($ShowTime=='no') {
		$time='';
	} else {
		$time=' - '.date('H:i:s',$timestamp);
	}
	$ThaiDateTime=$dd.' '.$ShortMonthTh[$mm-1].' '.substr(($yy+543),2,2).$time;
	return $ThaiDateTime;	
}

function LongDateTimeThai($timestamp, $ShowTime=NULL) { //date is timestamp
global $LongMonthTh;
	$dd=date('j',$timestamp);
	$mm=date('n',$timestamp);
	$yy=date('Y',$timestamp);
	if ($ShowTime=='no') {
		$time='';
	} else {
		$time=' - '.date('H:i:s',$timestamp);
	}
	$ThaiDateTime=$dd.' '.$LongMonthTh[$mm-1].' '.($yy+543).$time;
	return $ThaiDateTime;	
}

//Check Color 6 Char
function colorRGB_format($str) {
		if (!eregi("^[0-9a-fA-F]{6}$",trim($str)))
			return false;
		return true; 
}

function ValidProductCode($str) {
		if (!eregi("^[0-9a-zA-Z\/\-]{1,20}$",trim($str)))
			return false;
		return true; 
}

function IsNumber($str) {
		if (!eregi("^[0-9]{6}$",trim($str)))
			return false;
		return true; 
}

function CheckFormatDate($date,$format) {
	if ($format=='dd-mm-yyyy') {
		if (!eregi("^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$",trim($date))) 
			return false;
		return true;
	}
}

function RolloverRow($overColor,$outColor=NULL) {
	return ' onmouseover="this.bgColor=\''.$overColor.'\';" onmouseout="this.bgColor=\''.$outColor.'\';" ';
}

//Show icon
//$type=> 'delete', 'edit', 'view','update',cancel,publish, unpublish
function ICON($path,$title,$type,$echo=NULL) {
	switch ($type) {
		case 'delete': $info=' src="'.$path.'ico-delete.gif" alt="'.$title.'" '; break;
		case 'edit': $info=' src="'.$path.'ico-edit.gif" alt="'.$title.'" '; break;
		case 'update': $info=' src="'.$path.'ico-update.gif" alt="'.$title.'" '; break;
		case 'cancel': $info=' src="'.$path.'ico-cancel.gif" alt="'.$title.'" '; break;
		case 'true': $info=' src="'.$path.'true.png" alt="'.$title.'" '; break;
		case 'false': $info=' src="'.$path.'false.png" alt="'.$title.'" '; break;
	}
	
	$ico='<img '.$info.' align="absmiddle" border="0">';
	if ($echo!='') {
		echo $ico;
	} else {
		return $ico;
	}
}

//check (Alias)
function alias_format($str) {
		if (eregi("^[0-9a-zA-Zก-๙\เ\-]{1,100}$",trim($str))) {
				//if(preg_match("#[ก-๙]#u",trim($str))){
			return true; 
		} else { 
			return false; 
		}
}

//Check formating email address
function ValidEmail($email) {
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
		return false;			
	return true;
}


//Download File for Save as to client computer
//@param: $file = Path of file to download in server
//Example: DownloadFile("/download/example.pdf");
function DownloadFile($file){

	//First, see if the file exists
	if (!is_file($file)) { die("<b>404 File not found!</b>"); }

	//Gather relevent info about file
	$len = filesize($file);
	$filename = basename($file);
	$file_extension = strtolower(substr(strrchr($filename,"."),1));

	//This will set the Content-Type to the appropriate setting for the file
	switch( $file_extension ) {
	  case "pdf": $ctype="application/pdf"; break;
	  case "exe": $ctype="application/octet-stream"; break;
	  case "zip": $ctype="application/zip"; break;
	  case "doc": $ctype="application/msword"; break;
	  case "xls": $ctype="application/vnd.ms-excel"; break;
	  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
	  case "gif": $ctype="image/gif"; break;
	  case "png": $ctype="image/png"; break;
	  case "jpeg":
	  case "jpg": $ctype="image/jpg"; break;
	  case "mp3": $ctype="audio/mpeg"; break;
	  case "wav": $ctype="audio/x-wav"; break;
	  case "mpeg":
	  case "mpg":
	  case "mpe": $ctype="video/mpeg"; break;
	  case "mov": $ctype="video/quicktime"; break;
	  case "avi": $ctype="video/x-msvideo"; break;

	  //The following are for extensions that shouldn't be downloaded (sensitive stuff, like php files)
	  case "php":
	  case "htm":
	  case "html":
	  case "txt": die("<b>Cannot be used for ". $file_extension ." files!</b>"); break;

	  default: $ctype="application/force-download";
	}

	//Begin writing headers
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
   
	//Use the switch-generated Content-Type
	header("Content-Type: $ctype");

	//Force the download
	$header="Content-Disposition: attachment; filename=".$filename.";";
	header($header );
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".$len);
	@readfile($file);
	exit;
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



?>