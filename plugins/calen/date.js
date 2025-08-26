

$(function()
            {
            	$('#reservBut').bind('click',function(){fSearchA();});
				/*Start Calendar*/
				// $('.date-pick').datePicker({clickInput:true});
				// $("#date-in").bind('click', function(){
				// 	$('#start-dateA').trigger('click');
				// });
				var nnum = $('#night').val();

				$('#start-dateA').datePicker().val(new Date().asString()).trigger('change');
				$('#end-dateA').datePicker().val(new Date().addDays(1).asString()).trigger('change');

				// $('#start-dateA').dpSetPosition($.dpConst.POS_TOP, $.dpConst.POS_RIGHT);
				// $('#end-dateA').dpSetPosition($.dpConst.POS_TOP, $.dpConst.POS_RIGHT);
				$('#start-dateA').bind(
					'dpClosed',
					function(e, selectedDates)
					{ enterMode();

						var d = selectedDates[0];
						if (d) {
							d = new Date(d);
							//$('#end-dateA').dpSetStartDate(d.addDays(1).asString());
							$('#end-dateA').datePickerMultiMonth({startDate: d.addDays(1)});
							$('#end-dateA').val(d.addDays(0).asString());
							var $dateInput = $('#end-dateA');
							var status = $dateInput.is('.dp-disabled');
							$dateInput.dpSetDisabled(false);
							var datOUT = $('#end-dateA').val();

						}checknight();//$('.out a').trigger('click');
					}
				);
				$('#end-dateA').bind('dpClosed',function(e, selectedDates)
					{	enterMode();

						var d = selectedDates[0];
						if (d) {
							d = new Date(d);
							//$('#start-date').dpSetEndDate(d.addDays(-1).asString());
						}checknight();
					});
			});

function enterMode(){
$(document).keypress(function(e) {
    if(e.which == 13) {
       $('#reservBut').trigger('click');
    }
});
}

function checknight(){
	var start = $('#start-dateA').val();
	var end = $('#end-dateA').val();
	var startV = new Date(start);
	var endV = new Date(end);

	
	var diff = new Date(endV - startV);	
	var days = diff/1000/60/60/24;
	$('#night').val(days);
	$('#night-num').html(days);
	var objCi = $('#start-dateA').val();
    var objCo = $('#end-dateA').val();
	/*var adults = document.getElementById("adult").value;
     var child = document.getElementById("child").value;*/
	var pcode = document.getElementById("pcode").value;
	//var _strHotelCd = document.getElementById("hotel").value;
    var strMess = "";
	var datei = objCi.substring(0,2);
	var monti = objCi.substring(3,6)
	var yeari = objCi.substring(7,11);
	var dateo = objCo.substring(0,2);
	var monto = objCo.substring(3,6);
	var yearo = objCo.substring(7,11);
	if(monti=="Jan"){var month_in="01";}
	if(monti=="Feb"){var month_in="02";}
	if(monti=="Mar"){var month_in="03";}
	if(monti=="Apr"){var month_in="04";}
	if(monti=="May"){var month_in="05";}
	if(monti=="Jun"){var month_in="06";}
	if(monti=="Jul"){var month_in="07";}
	if(monti=="Aug"){var month_in="08";}
	if(monti=="Sep"){var month_in="09";}
	if(monti=="Oct"){var month_in="10";}
	if(monti=="Nov"){var month_in="11";}
	if(monti=="Dec"){var month_in="12";}
	
	if(monto=="Jan"){var month_out="01";}
	if(monto=="Feb"){var month_out="02";}
	if(monto=="Mar"){var month_out="03";}
	if(monto=="Apr"){var month_out="04";}
	if(monto=="May"){var month_out="05";}
	if(monto=="Jun"){var month_out="06";}
	if(monto=="Jul"){var month_out="07";}
	if(monto=="Aug"){var month_out="08";}
	if(monto=="Sep"){var month_out="09";}
	if(monto=="Oct"){var month_out="10";}
	if(monto=="Nov"){var month_out="11";}
	if(monto=="Dec"){var month_out="12";}

	$("#mouth-in").html(month_in);
	$("#date-in").html(datei);
	$("#year-in").html(yeari);

	$("#mouth-out").html(month_out);
	$("#date-out").html(dateo);
	$("#year-out").html(yearo);
}

$(document).ready(function() {
	checknight();
});

/*
 * Date prototype extensions. Doesn't depend on any
 * other code. Doens't overwrite existing methods.
 *
 * Adds dayNames, abbrDayNames, monthNames and abbrMonthNames static properties and isLeapYear,
 * isWeekend, isWeekDay, getDaysInMonth, getDayName, getMonthName, getDayOfYear, getWeekOfYear,
 * setDayOfYear, addYears, addMonths, addDays, addHours, addMinutes, addSeconds methods
 *
 * Copyright (c) 2006 Jörn Zaefferer and Brandon Aaron (brandon.aaron@gmail.com || http://brandonaaron.net)
 *
 * Additional methods and properties added by Kelvin Luck: firstDayOfWeek, dateFormat, zeroTime, asString, fromString -
 * I've added my name to these methods so you know who to blame if they are broken!
 * 
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * An Array of day names starting with Sunday.
 * 
 * @example dayNames[0]
 * @result 'Sunday'
 *
 * @name dayNames
 * @type Array
 * @cat Plugins/Methods/Date
 */
Date.dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

/**
 * An Array of abbreviated day names starting with Sun.
 * 
 * @example abbrDayNames[0]
 * @result 'Sun'
 *
 * @name abbrDayNames
 * @type Array
 * @cat Plugins/Methods/Date
 */
Date.abbrDayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

/**
 * An Array of month names starting with Janurary.
 * 
 * @example monthNames[0]
 * @result 'January'
 *
 * @name monthNames
 * @type Array
 * @cat Plugins/Methods/Date
 */
Date.monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

/**
 * An Array of abbreviated month names starting with Jan.
 * 
 * @example abbrMonthNames[0]
 * @result 'Jan'
 *
 * @name monthNames
 * @type Array
 * @cat Plugins/Methods/Date
 */
Date.abbrMonthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

/**
 * The first day of the week for this locale.
 *
 * @name firstDayOfWeek
 * @type Number
 * @cat Plugins/Methods/Date
 * @author Kelvin Luck
 */
Date.firstDayOfWeek = 1;

/**
 * The format that string dates should be represented as (e.g. 'dd/mm/yyyy' for UK, 'mm/dd/yyyy' for US, 'yyyy-mm-dd' for Unicode etc).
 *
 * @name format
 * @type String
 * @cat Plugins/Methods/Date
 * @author Kelvin Luck
 */
Date.format = 'mm/dd/yyyy';
//Date.format = 'mm/dd/yyyy';
//Date.format = 'yyyy-mm-dd';
//Date.format = 'dd mmm yy';

/**
 * The first two numbers in the century to be used when decoding a two digit year. Since a two digit year is ambiguous (and date.setYear
 * only works with numbers < 99 and so doesn't allow you to set years after 2000) we need to use this to disambiguate the two digit year codes.
 *
 * @name format
 * @type String
 * @cat Plugins/Methods/Date
 * @author Kelvin Luck
 */
Date.fullYearStart = '20';

(function() {

	/**
	 * Adds a given method under the given name 
	 * to the Date prototype if it doesn't
	 * currently exist.
	 *
	 * @private
	 */
	function add(name, method) {
		if( !Date.prototype[name] ) {
			Date.prototype[name] = method;
		}
	};
	
	/**
	 * Checks if the year is a leap year.
	 *
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.isLeapYear();
	 * @result true
	 *
	 * @name isLeapYear
	 * @type Boolean
	 * @cat Plugins/Methods/Date
	 */
	add("isLeapYear", function() {
		var y = this.getFullYear();
		return (y%4==0 && y%100!=0) || y%400==0;
	});
	
	/**
	 * Checks if the day is a weekend day (Sat or Sun).
	 *
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.isWeekend();
	 * @result false
	 *
	 * @name isWeekend
	 * @type Boolean
	 * @cat Plugins/Methods/Date
	 */
	add("isWeekend", function() {
		return this.getDay()==0 || this.getDay()==6;
	});
	
	/**
	 * Check if the day is a day of the week (Mon-Fri)
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.isWeekDay();

	 * @result false
	 * 
	 * @name isWeekDay
	 * @type Boolean
	 * @cat Plugins/Methods/Date
	 */
	add("isWeekDay", function() {
		return !this.isWeekend();
	});
	
	/**
	 * Gets the number of days in the month.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getDaysInMonth();
	 * @result 31
	 * 
	 * @name getDaysInMonth
	 * @type Number
	 * @cat Plugins/Methods/Date
	 */
	add("getDaysInMonth", function() {
		return [31,(this.isLeapYear() ? 29:28),31,30,31,30,31,31,30,31,30,31][this.getMonth()];
	});
	
	/**
	 * Gets the name of the day.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getDayName();
	 * @result 'Saturday'
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getDayName(true);
	 * @result 'Sat'
	 * 
	 * @param abbreviated Boolean When set to true the name will be abbreviated.
	 * @name getDayName
	 * @type String
	 * @cat Plugins/Methods/Date
	 */
	add("getDayName", function(abbreviated) {
		return abbreviated ? Date.abbrDayNames[this.getDay()] : Date.dayNames[this.getDay()];
	});

	/**
	 * Gets the name of the month.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getMonthName();
	 * @result 'Janurary'
	 *
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getMonthName(true);
	 * @result 'Jan'
	 * 
	 * @param abbreviated Boolean When set to true the name will be abbreviated.
	 * @name getDayName
	 * @type String
	 * @cat Plugins/Methods/Date
	 */
	add("getMonthName", function(abbreviated) {
		return abbreviated ? Date.abbrMonthNames[this.getMonth()] : Date.monthNames[this.getMonth()];
	});

	/**
	 * Get the number of the day of the year.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getDayOfYear();
	 * @result 11
	 * 
	 * @name getDayOfYear
	 * @type Number
	 * @cat Plugins/Methods/Date
	 */
	add("getDayOfYear", function() {
		var tmpdtm = new Date("1/1/" + this.getFullYear());
		return Math.floor((this.getTime() - tmpdtm.getTime()) / 86400000);
	});
	
	/**
	 * Get the number of the week of the year.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.getWeekOfYear();
	 * @result 2
	 * 
	 * @name getWeekOfYear
	 * @type Number
	 * @cat Plugins/Methods/Date
	 */
	add("getWeekOfYear", function() {
		return Math.ceil(this.getDayOfYear() / 7);
	});

	/**
	 * Set the day of the year.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.setDayOfYear(1);
	 * dtm.toString();
	 * @result 'Tue Jan 01 2008 00:00:00'
	 * 
	 * @name setDayOfYear
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("setDayOfYear", function(day) {
		this.setMonth(0);
		this.setDate(day);
		return this;
	});
	
	/**
	 * Add a number of years to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addYears(1);
	 * dtm.toString();
	 * @result 'Mon Jan 12 2009 00:00:00'
	 * 
	 * @name addYears
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addYears", function(num) {
		this.setFullYear(this.getFullYear() + num);
		return this;
	});
	
	/**
	 * Add a number of months to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addMonths(1);
	 * dtm.toString();
	 * @result 'Tue Feb 12 2008 00:00:00'
	 * 
	 * @name addMonths
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addMonths", function(num) {
		var tmpdtm = this.getDate();
		
		this.setMonth(this.getMonth() + num);
		
		if (tmpdtm > this.getDate())
			this.addDays(-this.getDate());
		
		return this;
	});
	
	/**
	 * Add a number of days to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addDays(1);
	 * dtm.toString();
	 * @result 'Sun Jan 13 2008 00:00:00'
	 * 
	 * @name addDays
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addDays", function(num) {
		//this.setDate(this.getDate() + num);
		this.setTime(this.getTime() + (num*86400000) );
		return this;
	});
	
	/**
	 * Add a number of hours to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addHours(24);
	 * dtm.toString();
	 * @result 'Sun Jan 13 2008 00:00:00'
	 * 
	 * @name addHours
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addHours", function(num) {
		this.setHours(this.getHours() + num);
		return this;
	});

	/**
	 * Add a number of minutes to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addMinutes(60);
	 * dtm.toString();
	 * @result 'Sat Jan 12 2008 01:00:00'
	 * 
	 * @name addMinutes
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addMinutes", function(num) {
		this.setMinutes(this.getMinutes() + num);
		return this;
	});
	
	/**
	 * Add a number of seconds to the date object.
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.addSeconds(60);
	 * dtm.toString();
	 * @result 'Sat Jan 12 2008 00:01:00'
	 * 
	 * @name addSeconds
	 * @type Date
	 * @cat Plugins/Methods/Date
	 */
	add("addSeconds", function(num) {
		this.setSeconds(this.getSeconds() + num);
		return this;
	});
	
	/**
	 * Sets the time component of this Date to zero for cleaner, easier comparison of dates where time is not relevant.
	 * 
	 * @example var dtm = new Date();
	 * dtm.zeroTime();
	 * dtm.toString();
	 * @result 'Sat Jan 12 2008 00:01:00'
	 * 
	 * @name zeroTime
	 * @type Date
	 * @cat Plugins/Methods/Date
	 * @author Kelvin Luck
	 */
	add("zeroTime", function() {
		this.setMilliseconds(0);
		this.setSeconds(0);
		this.setMinutes(0);
		this.setHours(0);
		return this;
	});
	
	/**
	 * Returns a string representation of the date object according to Date.format.
	 * (Date.toString may be used in other places so I purposefully didn't overwrite it)
	 * 
	 * @example var dtm = new Date("01/12/2008");
	 * dtm.asString();
	 * @result '12/01/2008' // (where Date.format == 'dd/mm/yyyy'
	 * 
	 * @name asString
	 * @type Date
	 * @cat Plugins/Methods/Date
	 * @author Kelvin Luck
	 */
	add("asString", function(format) {
		var r = format || Date.format;
		if (r.split('mm').length>1) { // ugly workaround to make sure we don't replace the m's in e.g. noveMber
			r = r.split('mmmm').join(this.getMonthName(false))
				.split('mmm').join(this.getMonthName(true))
				.split('mm').join(_zeroPad(this.getMonth()+1))
		} else {
			r = r.split('m').join(this.getMonth()+1);
		}
		r = r.split('yyyy').join(this.getFullYear())
			.split('yy').join((this.getFullYear() + '').substring(2))
			.split('dd').join(_zeroPad(this.getDate()))
			.split('d').join(this.getDate());
		return r;
	});
	
	/**
	 * Returns a new date object created from the passed String according to Date.format or false if the attempt to do this results in an invalid date object
	 * (We can't simple use Date.parse as it's not aware of locale and I chose not to overwrite it incase it's functionality is being relied on elsewhere)
	 *
	 * @example var dtm = Date.fromString("12/01/2008");
	 * dtm.toString();
	 * @result 'Sat Jan 12 2008 00:00:00' // (where Date.format == 'dd/mm/yyyy'
	 * 
	 * @name fromString
	 * @type Date
	 * @cat Plugins/Methods/Date
	 * @author Kelvin Luck
	 */
	// Date.fromString = function(s)
	// {
	// 	var f = Date.format;
		
	// 	var d = new Date('01/01/1970');
		
	// 	if (s == '') return d;

	// 	s = s.toLowerCase();
	// 	var matcher = '';
	// 	var order = [];
	// 	var r = /(dd?d?|mm?m?|yy?yy?)+([^(m|d|y)])?/g;
	// 	var results;
	// 	while ((results = r.exec(f)) != null)
	// 	{
	// 		switch (results[1]) {
	// 			case 'd':
	// 			case 'dd':
	// 			case 'm':
	// 			case 'mm':
	// 			case 'yy':
	// 			case 'yyyy':
	// 				matcher += '(\\d+\\d?\\d?\\d?)+';
	// 				order.push(results[1].substr(0, 1));
	// 				break;
	// 			case 'mmm':
	// 				matcher += '([a-z]{3})';
	// 				order.push('M');
	// 				break;
	// 		}
	// 		if (results[2]) {
	// 			matcher += results[2];
	// 		}
			
	// 	}
	// 	var dm = new RegExp(matcher);
	// 	var result = s.match(dm);
	// 	for (var i=0; i<order.length; i++) {
	// 		var res = result[i+1];
	// 		switch(order[i]) {
	// 			case 'd':
	// 				d.setDate(res);
	// 				break;
	// 			case 'm':
	// 				d.setMonth(Number(res)-1);
	// 				break;
	// 			case 'M':
	// 				for (var j=0; j<Date.abbrMonthNames.length; j++) {
	// 					if (Date.abbrMonthNames[j].toLowerCase() == res) break;
	// 				}
	// 				d.setMonth(j);
	// 				break;
	// 			case 'y':
	// 				d.setYear(res);
	// 				break;
	// 		}
	// 	}

	// 	return d;
	// };

	Date.fromString = function(s)
	{
		var f = Date.format;
		
		var d = new Date('01/01/1970');
		
		if (s == '') return d;

		s = s.toLowerCase();
		var matcher = '';
		var order = [];
		var r = /(dd?d?|mm?m?|yy?yy?)+([^(m|d|y)])?/g;
		var results;
		while ((results = r.exec(f)) != null)
		{
			switch (results[1]) {
				case 'd':
				case 'dd':
				case 'm':
				case 'mm':
				case 'yy':
				case 'yyyy':
					matcher += '(\\d+\\d?\\d?\\d?)+';
					order.push(results[1].substr(0, 1));
					break;
				case 'mmm':
					matcher += '([a-z]{3})';
					order.push('M');
					break;
			}
			if (results[2]) {
				matcher += results[2];
			}
			
		}
		var dm = new RegExp(matcher);
		var result = s.match(dm);
		var resYear, resMonth, resDate;
		for (var i=0; i<order.length; i++) {
			var res = result[i+1];
			switch(order[i]) {
				case 'd':
					resDate = res;
					break;
				case 'm':
					resMonth = Number(res)-1;
					break;
				case 'M':
					for (var j=0; j<Date.abbrMonthNames.length; j++) {
						if (Date.abbrMonthNames[j].toLowerCase() == res) break;
					}
					resMonth = j;
					break;
				case 'y':
					resYear = res;
					break;
			}
		}
		// We need to set in this order to make sure 29 Feb in leap years are accounted for
		if(resYear) d.setYear(resYear);
		if(resMonth) d.setMonth(resMonth);
		if(resDate) d.setDate(resDate);
		return d;
	};
	
	// utility method
	var _zeroPad = function(num) {
		var s = '0'+num;
		return s.substring(s.length-2)
		//return ('0'+num).substring(-2); // doesn't work on IE :(
	};
	
})();
Date.firstDayOfWeek = 0;
Date.format = 'dd mmm yyyy';
var _strHotelCd = "HT08004312";
var _strPath = "https://v3.reservation-system.net/";
var _intDefaultLOS = 1;	

/*function fSearchA() {
	var objCi = document.getElementById("start-dateA").value;
	var objCo = document.getElementById("end-dateA").value;
	
	var adult = document.getElementById("adult").value;
	var kid = document.getElementById("kid").value;
	var room = document.getElementById("room").value;
	
	var page = 'reserve.php';
	var values = 'Input22='+objCi+'&Input2='+objCo+'&room='+room+'&adult='+adult+'&kid='+kid;

	formelem = document.createElement('form');
	formelem.setAttribute("method","post");
	formelem.setAttribute("action",page);
	formelem.setAttribute("id","urlprotect");
	queryarray = values.split("&");
	var i = 0;
	while (i<queryarray.length)
	{
	attrib = queryarray[i].split("=");
	inputelm = document.createElement('input');
	inputelm.setAttribute("name",attrib[0]);
	inputelm.setAttribute("value",attrib[1]);
	inputelm.setAttribute("type","text");
	formelem.appendChild(inputelm);
	i++;
	}
	document.body.appendChild(formelem);
	
	document.getElementById("urlprotect").submit();	
	
}*/


function fSearchA() {
	/*var objCi = document.getElementById("start-dateA").value;
	var objCo = document.getElementById("end-dateA").value;
	
	var adults = document.getElementById("adult").value;
	var child = document.getElementById("child").value;
	var rm = document.getElementById("room").value;*/
	
   // window.location = "reserve.php?adults="+adults+"&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm;
	
	
	
			/*var adults = document.getElementById("adult").value;
             var child = document.getElementById("child").value;*/
			 var pcode = document.getElementById("pcode").value;
			
			
			
			//var _strHotelCd = document.getElementById("hotel").value;
            var strMess = "";	  var strMess = "";

			var date_in=$('#date-in').text();
			var mont_in=$('#mouth-in').text();
			var yeari = $('#year-in').text();
			
			var date_out=$('#date-out').text();
			var mont_out=$('#mouth-out').text();
			var yearo = $('#year-out').text();

				if(mont_in=="January"){var mont_in="01";}
				if(mont_in=="February"){var mont_in="02";}
				if(mont_in=="March"){var mont_in="03";}
				if(mont_in=="April"){var mont_in="04";}
				if(mont_in=="May"){var mont_in="05";}
				if(mont_in=="June"){var mont_in="06";}
				if(mont_in=="July"){var mont_in="07";}
				if(mont_in=="August"){var mont_in="08";}
				if(mont_in=="September"){var mont_in="09";}
				if(mont_in=="October"){var mont_in="10";}
				if(mont_in=="November"){var mont_in="11";}
				if(mont_in=="December"){var mont_in="12";}


				if(mont_out=="January"){var mont_out="01";}
				if(mont_out=="February"){var mont_out="02";}
				if(mont_out=="March"){var mont_out="03";}
				if(mont_out=="April"){var mont_out="04";}
				if(mont_out=="May"){var mont_out="05";}
				if(mont_out=="June"){var mont_out="06";}
				if(mont_out=="July"){var mont_out="07";}
				if(mont_out=="August"){var mont_out="08";}
				if(mont_out=="September"){var mont_out="09";}
				if(mont_out=="October"){var mont_out="10";}
				if(mont_out=="November"){var mont_out="11";}
				if(mont_out=="December"){var mont_out="12";}
				var fm = mont_in;
				var fd = date_in;
				var fy = yeari;

				var tm = mont_out;
				var td = date_out;
				var ty = yearo;
            if(pcode=='Promotion code'){pcode='';}
            // ga_param = false;
			// ga(function(tracker) {ga_param = tracker.get('linkerParam');});
            
   //          var isMobile = {
			//     Android: function() {
			//         return navigator.userAgent.match(/Android/i);
			//     },
			//     BlackBerry: function() {
			//         return navigator.userAgent.match(/BlackBerry/i);
			//     },
			//     iOS: function() {
			//         return navigator.userAgent.match(/iPhone|iPad|iPod/i);
			//     },
			//     Opera: function() {
			//         return navigator.userAgent.match(/Opera Mini/i);
			//     },
			//     Windows: function() {
			//         return navigator.userAgent.match(/IEMobile/i);
			//     },
			//     any: function() {
			//         return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
			//     }
			// };
			checkin=fy+"-"+fm+"-"+fd;
			checkout=ty+"-"+tm+"-"+td;
			window.location = "https://reservation.arcadiasuites.com/propertyibe2/?propertyId=365&onlineId=4&checkin="+checkin+"&checkout="+checkout+"&numofadult=1&numofchild=0&numofroom=1&accesscode="+pcode;
			// if(isMobile.any()){
			// 	window.location = "https://reservation.arcadiasuites.com/propertyibe2/?propertyId=365&onlineId=4&checkin="+checkin+"&checkout="+checkout+"&numofadult=1&numofchild=0&numofroom=1&accesscode="+pcode;
			// 	// window.location = "http://www.globekey.com/reserve.php?hid=BKK251&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm+"&agc="+pcode+"&"+ ga_param;
			// 	// window.location = "https://www.citrus11sukhumvit.com-booking.co/mobile.php?hid=BKK251&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm+"&agc="+pcode;
			// }
			// else{
				// window.location = "http://www.globekey.com/reserve.php?hid=BKK251&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm+"&agc="+pcode+"&"+ ga_param;
			// }
            // window.location = "http://www.globekey.com/reserve.php?hid=BKK251&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm+"&agc="+pcode+"&"+ ga_param;
               /* var numrooms = "1";
                var adults = document.getElementById("adult").value;
                var child = document.getElementById("child").value;
				var rm = document.getElementById("room").value;
				var fm = mCheckin;
				var fd = datei;
				var fy = yeari;
				
				var tm = mCheckout;
				var td = dateo;
				var ty = yearo;
              
			   var sh = "yes";
			   var lang = "en";
			   var hid ="HKT5438";
			   var set2 ="wdDisplay=1;numberNightsDisplay=1;departDateDisplay=1;";
			   var set1 ="daysinAdvance=1;numberNights=1;numberYears=2;numberNightsMin=1;";
				
              window.location = "http://www.key-res.com/reserve.php?"+set2+"&"+set1+"&"+"hid=BKK1643&lang=en&sh=yes&child="+child+"&adults="+adults+"&numrooms="+rm+"&ty="+ty+"&td="+td+"&tm="+tm+"&fy="+fy+"&fd="+fd+"&fm="+fm;
			 */
			   
		   
           
        }
		 
function test(){alert("ssss");}	

