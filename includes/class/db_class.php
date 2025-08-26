<?php
class db_class extends database {
	var $tblOffer='tbl_offers';
	var $tblSubscribe='tbl_subscribe';
	var $context='';
	var $offerPath='offers-images';
	

	
	//Dissplay Offers List
	function DisplayOfferList($offerID, $Thumbnail, $Title, $ShortDefinition, $IsBook, $LinkBook, $IsTerm, $TermURL, $TermTarget, $TermPopWidth, $TermPopHeight) {
		
		$btnTerm='<img src="images/termandcondition.jpg" width="134" height="22" border="0">';
		
		if ($Thumbnail!='') {
			$Thumbnail='<a href="offers-info.php?id='.$offerID.'">
										<img src="'.$this->offerPath.'/'.$Thumbnail.'" alt="'.$Title.'" title="'.$Title.'" border="0" width="135" height="135" />
									</a>';
		} else {
			$Thumbnail='<img src="'.$this->offerPath.'/not_available.gif" alt="Image Not Available"  title="Image Not Available" border="0" width="135" height="135" />';
		}
		
		if ($IsBook=='1') {
			$BookButton='<a href="'.$LinkBook.'" target="_blank"><img src="images/check_rates.jpg" width="160" height="22" border="0"></a>';
		} else {
			$BookButton='';
		}
		
		if ($IsTerm=='1') {
			if ($TermTarget=='P') { //open popup
			$TermButton='<a href="'.$TermURL.'" onClick="NewWindowTop(this.href,\'Terms and Conditions\','.$TermPopWidth.','.$TermPopHeight.',0,1);return false;"  title="Terms & Conditions">'.$btnTerm.'</a>';
			} else { //Open with URL
				$TermButton='<a href="'.$TermURL.'" target="_blank" title="Terms &amp; Conditions">'.$btnTerm.'</a>';
			}
		} else {
			$TermButton='';
		}
		
		$OfferList='
			<div style="position:relative;">
				<div style="width:135px; float:left;">'.$Thumbnail.'</div>
				<div style="width:570px; float:right;">
					<div class="blacktext" style="padding-bottom:5px;">
						<a href="offers-info.php?id='.$offerID.'" ><h1 class="blacktext">'.$Title.'</h1></a>
					</div>
					<div class="blacktext" style="line-height:15px;">'.$ShortDefinition.'</div>
					<div style="position:relative;">
						<div style="float:left;">'.$BookButton.' '.$TermButton.'</div>
						<div style="float:right">
							<a href="#top"><img src="images/backtotop.jpg" width="79" height="13" border="0"></a>
						</div>
					</div> 
				</div>
		  </div>
		  <p style="clear:both;">&nbsp;</p>
		';
		return $OfferList;
	}
	
	//DiffDate
	function datediff($interval, $datefrom, $dateto, $using_timestamps = false) {
		/*
		$interval can be:
		yyyy - Number of full years
		q - Number of full quarters
		m - Number of full months
		y - Difference between day numbers
		(eg 1st Jan 2004 is "1", the first day. 2nd Feb 2003 is "33". The datediff is "-32".)
		d - Number of full days
		w - Number of full weekdays
		ww - Number of full weeks
		h - Number of full hours
		n - Number of full minutes
		s - Number of full seconds (default)
		*/
		#
		if (!$using_timestamps) {
		$datefrom = strtotime($datefrom, 0);
		$dateto = strtotime($dateto, 0);
		}
		$difference = $dateto - $datefrom; // Difference in seconds
		#
		switch($interval) {
		#
		case 'yyyy': // Number of full years
		 
		$years_difference = floor($difference / 31536000);
		if (mktime(date("H", $datefrom), date("i", $datefrom), date("s", $datefrom), date("n", $datefrom), date("j", $datefrom), date("Y", $datefrom)+$years_difference) > $dateto) {
		$years_difference--;
		}
		if (mktime(date("H", $dateto), date("i", $dateto), date("s", $dateto), date("n", $dateto), date("j", $dateto), date("Y", $dateto)-($years_difference+1)) > $datefrom) {
		$years_difference++;
		}
		$datediff = $years_difference;
		break;
		 
		case "q": // Number of full quarters
		 
		$quarters_difference = floor($difference / 8035200);
		while (mktime(date("H", $datefrom), date("i", $datefrom), date("s", $datefrom), date("n", $datefrom)+($quarters_difference*3), date("j", $dateto), date("Y", $datefrom)) < $dateto) {
		$months_difference++;
		}
		$quarters_difference--;
		$datediff = $quarters_difference;
		break;
		 
		case "m": // Number of full months
		 
		$months_difference = floor($difference / 2678400);
		while (mktime(date("H", $datefrom), date("i", $datefrom), date("s", $datefrom), date("n", $datefrom)+($months_difference), date("j", $dateto), date("Y", $datefrom)) < $dateto) {
		$months_difference++;
		}
		$months_difference--;
		$datediff = $months_difference;
		break;
		 
		case 'y': // Difference between day numbers
		 
		$datediff = date("z", $dateto) - date("z", $datefrom);
		break;
		 
		case "d": // Number of full days
		 
		$datediff = floor($difference / 86400);
		break;
		 
		case "w": // Number of full weekdays
		 
		$days_difference = floor($difference / 86400);
		$weeks_difference = floor($days_difference / 7); // Complete weeks
		$first_day = date("w", $datefrom);
		$days_remainder = floor($days_difference % 7);
		$odd_days = $first_day + $days_remainder; // Do we have a Saturday or Sunday in the remainder?
		if ($odd_days > 7) { // Sunday
		$days_remainder--;
		}
		if ($odd_days > 6) { // Saturday
		$days_remainder--;
		}
		$datediff = ($weeks_difference * 5) + $days_remainder;
		break;
		 
		case "ww": // Number of full weeks
		 
		$datediff = floor($difference / 604800);
		break;
		 
		case "h": // Number of full hours
		 
		$datediff = floor($difference / 3600);
		break;
		 
		case "n": // Number of full minutes
		 
		$datediff = floor($difference / 60);
		break;
		 
		default: // Number of full seconds (default)
		 
		$datediff = $difference;
		break;
		}
		 
		return $datediff;		 
	} //end function datediff
} //end db_class
?>
