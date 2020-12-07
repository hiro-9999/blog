<?php
	$num = 99;			//假设输入的数字是99
	if ($num>100)					//if判断用户输入的数字是否大于100
		print("输入的数字大于100");
	if ($num==100)					//if判断用户输入的数字是否等于100
		print("输入的数字等于100");
	if ($num<100)					//if判断用户输入的数字是否小于100
		print("输入的数字小于100！");

	echo "<hr/>";


	 $num1=50;
	 $num2=34;
	if ($num1 > $num2)					 
		print("$num1 大于 $num2");
	if ($num1 == $num2)			 
		print("$num1 等于 $num2");
	if ($num1 < $num2)					 
		print("$num1 小于 $num2");

	echo "<hr/>";



	$username = "admin"; 		// 用户名
	$userpass = "123456"; 		// 密码
	$code = "0000";			// 验证码
	if ($username != "admin" || $userpass != "123456" || $code != "1234") 	// 比较
	{
		print("登录失败。");
		print("请检查输入的用户名、密码和验证码是否正确。");
	}

	echo "<hr/>";


	 $num1=50;
	 $num2=34;
	if ($num1 == $num2)			 
		print("$num1 等于 $num2");
	else if ($num1 > $num2)					 
		print("$num1 大于 $num2");
	else
		print("$num1 小于 $num2");

	echo "<hr/>";



	$score = 100;		//接收键盘输入数据
	if($score >= 90){					//考试成绩>=90
		print("优秀");
	}
	else if($score >= 80) {				//90>考试成绩>=80
		print("良好");
	}
	else if($score >= 60) {				//80>考试成绩>=60
		print("中等");
	}
	else {						//考试成绩<60
		print("差");
	}

	echo "<hr/>";

	$month=2;
	$kind=1;
	$result=60000; //原始价格
	//旺季的票价计算
	if($month<=11 && $month>=4){
		if($kind==1){
			//旺季头等舱
			$result=$result*0.9;
		}else if($kind==2){
			//旺季经济舱
			$result=$result*0.8;
		}else {
			print("选择种类有误，请重新输入！");
		}
	}
	//淡季的票价计算
	else if(($month>=1 && $month<=3) || $month==12){
		if($kind==1){
			//淡季头等舱
			$result=$result*0.5;
		}else if($kind==2){
			//淡季经济舱
			$result=$result*0.4;
		}else {
			print("选择种类有误，请重新输入！");
		}
	}else {
		print("日期选择有误，请重新输入！");
	}
	print("您选择的机票价格为：".$result);




