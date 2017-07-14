<?php


function parseMonth($month){
	switch ($month) {
		case 01:
			$month = "Tháng Một";
			break;
		case 02:
			$month = "Tháng Hai";
			break;
		case 03:
			$month = "Tháng Ba";
			break;
		case 04:
			$month = "Tháng Tư";
			break;
		case 05:
			$month = "Tháng Năm";
			break;
		case 06:
			$month = "Tháng Sáu";
			break;
		case 07:
			$month = "Tháng Bảy";
			break;
		case 8:
			$month = "Tháng Tám";
			break;
		case 9:
			$month = "Tháng Chín";
			break;
		case 10:
			$month = "Tháng Mưới";
			break;
		case 11:
			$month = "Tháng Mười Một";
			break;
		case 12:
			$month = "Tháng Mười Hai";
			break;
	}
	return $month;
}


?>