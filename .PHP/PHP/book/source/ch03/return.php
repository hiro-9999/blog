<?php


		$num1=100;		//假设用户输入的操作数1是100
		$num2=503;		//假设用户输入的操作数1是503
		print("第一个数：".$num1."\n");
		print("第二个数：".$num2."\n");
		$d=sum($num1, $num2);
		print($num1 ."+". $num2. "=". $d);

	/**
	 * 创建sum()函数，返回两数之和
	 * @param i	操作数1
	 * @param j	操作数2	
	 * @return	两个操作数之和
	 */
	function sum( $i, $j){
		$sum = $i + $j;
		return $sum;
	}


