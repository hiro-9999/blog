<?php


$year = 2014;
print("要判断的年份:".$year."\n");
$month = 2;
print("要判断的月份:".$month."\n");
$isRen=false;
if( ($year%4==0 && $year%100!=0) || ($year%400==0) ){
	print($year." 是闰年"."\n");
	$isRen=true;
}
else{
	print($year." 平闰年"."\n");
	$isRen=false;
}
$day=0;
switch($month){
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:
		$day=31;
		break;
	case 4:
	case 6:
	case 9:
	case 11:
		$day=30;
		break;
	default:
		if($isRen){
			$day=29;
		}else{
			$day=28;
		}
		break;
}
print($year."年".$month."月共有".$day."天");

