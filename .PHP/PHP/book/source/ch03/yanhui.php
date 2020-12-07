<?php
	$row = 7; 	//假设要打印7行
	print("打印杨辉三角形的行数：".$row."\n");
	calculate($row);


function num($x, $y){
	if($y==1 || $y==$x){
		return 1;
	}
	$c = num($x-1,$y-1)+num($x-1,$y);
	return $c;
}


function calculate($row){
	for($i=1; $i<= $row; $i++){
		for($j=1; $j<=$row-$i; $j++){
			print(" ");
		}
		for($j=1; $j<= $i; $j++){		//打印空格后面的字符,从第1列开始往后打印
			print(num($i,$j) ." ");
		}
		print("\n");
	}
}

