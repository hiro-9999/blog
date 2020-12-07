<?php
		$x = 4;
		$y = 0;
		$z = 0;
		//判断x的值是否大于5，如果是，y=x，否则y=-x
		$y= $x>5?$x:-$x;
		//判断y的值是否大于x，如果是，z=y，否则z=5
		$z= $y>$x?$y:5;
		printf("x=%d \n",$x);
		printf("y=%d \n",$y);
		printf("z=%d \n",$z);


?>