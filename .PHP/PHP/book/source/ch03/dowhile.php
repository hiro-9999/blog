<?php

	$number = 1;
	$result = 1;
	do {
		$result *= $number;
		$number++;
	} while ($number <= 10);
	print("10阶乘结果是：" . $result);

	echo "<hr/>";

   $bookIndex = 1;
   do
   {
   	echo($bookIndex . "　");
       if ($bookIndex % 10 == 0) echo "\r\n";
       $bookIndex++;
   } while ($bookIndex < 51);

