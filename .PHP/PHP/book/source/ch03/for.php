<?php

	$result = 1;
	for ($number = 1; $number <= 5; $number++) {
		$result *= $number;
	}
	print("5阶乘结果是：" .$result);	// 输出“5阶乘结果是：120”

	echo "<hr/>";


	$result = 0;
	$number = 1;		// 相当于for语句的第1个表达式
	for (; $number < 101; $number++) {
		if ($number % 2 != 0)//如果不能整除2说明是奇数则进行累加
			$result += $number;
	}
	print("100以内所有奇数和为：" . $result); 

	echo "<hr/>";

	$result = 0;
	for ($number = 1; ; $number++) {
		if($number>100)break; 		//相当于for语句的表达式2，满足时就退出for循环
		if ($number % 2 != 0)			//如果不能整除2说明是奇数则进行累加
			$result += $number;
	}
	print("100以内所有奇数和为：" . $result); 


	echo "<hr/>";


	$result = 0;
	for ($number = 1; $number < 101; ) {
		if ($number % 2 != 0)//如果不能整除2说明是奇数则进行累加
			$result += $number;
		$number++;			//相当于for语句的表达式3，每次递增1
	}
	print("100以内所有奇数和为：" . $result); 



	echo "<hr/>";

	$result = 0;
	$number = 1;				// 相当于for语句的表达式1
	for (;;) {
		if ($number > 100)
			break; 			// 相当于for语句的表达式2
		if ($number % 2 != 0)		// 如果不能整除2说明是奇数则进行累加
			$result += $number;
		$number++; 			// 相当于for语句的表达式3
	}
	print("100以内所有奇数和为：  " . $result);
	

	echo "<hr/>";



	print("乘法口诀表：\n");
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			print($j."*".$i."=".$j*$i."\t");
		}
		echo("\n");
	}


