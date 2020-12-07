<?php

	$num = 1688;
	switch ($num) {
	case 8:
		print("恭喜你，获得了三等奖！");
		break;
	case 88:
		print("恭喜你，获得了二等奖！");
		break;
	case 888:
		print("恭喜你，获得了一等奖！");
		break;
	default:
		print("谢谢参与！");
		break;
	}

echo "<hr/>";



	$week = date("w",time());
	switch ($week) {
		case 0:
			$weekDate="星期日";
			break;
		case 1:
			$weekDate="星期一";
			break;
		case 2:
			$weekDate="星期二";
			break;
		case 3:
			$weekDate="星期三";
			break;
		case 4:
			$weekDate="星期四";
			break;
		case 5:
			$weekDate="星期五";
			break;
		case 6:
			$weekDate="星期六";
			break;
	}
	print("今天是 ".$weekDate);
	
echo "<hr/>";



	$monthday = 521;
	$month = intval($monthday / 100);
	$day = $monthday % 100;
	$xingzuo = "";
	switch ($month) {
	case 1:
		$xingzuo = $day < 21 ? "摩羯座" : "水瓶座";
		break;
	case 2:
		$xingzuo = $day < 20 ? "水瓶座" : "双鱼座";
		break;
	case 3:
		$xingzuo = $day < 21 ? "双鱼座" : "白羊座";
		break;
	case 4:
		$xingzuo = $day < 21 ? "白羊座" : "金牛座";
		break;
	case 5:
		$xingzuo = $day < 22 ? "金牛座" : "双子座";
		break;
	case 6:
		$xingzuo = $day < 22 ? "双子座" : "巨蟹座";
		break;
	case 7:
		$xingzuo = $day < 23 ? "巨蟹座" : "狮子座";
		break;
	case 8:
		$xingzuo = $day < 24 ? "狮子座" : "处女座";
		break;
	case 9:
		$xingzuo = $day < 24 ? "处女座" : "天秤座";
		break;
	case 10:
		$xingzuo = $day < 24 ? "天秤座" : "天蝎座";
		break;
	case 11:
		$xingzuo = $day < 23 ? "天蝎座" : "射手座";
		break;
	case 12:
		$xingzuo = $day < 22 ? "射手座" : "摩羯座";
		break;
	}
	print("您的星座是：" . $xingzuo);



