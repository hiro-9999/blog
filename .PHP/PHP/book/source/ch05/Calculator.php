<?php

class Calculator {							//定义计算器类
    function clac($number1,$number2,$op)			//定义执行计算的方法
    {
        if($this->check($op))					//判断操作符是否有效
        {
            switch($op)					//执行相应的计算
            {
                case "+":
                    $result=$number1+$number2;
                    break;
                case "-":
                    $result=$number1-$number2;
                    break;
                case "*":
                    $result=$number1-$number2;
                    break;
                case "/":
                    $result=$number1/$number2;
                    break;
            }
            echo("操作数1：$number1 \n");
            echo("操作数2：$number2 \n");
            echo("操作符：$op \n");
            printf("%d %s %d=%.2f \n",$number1,$op,$number2,$result);
        }
        else{
            echo "出错：操作符必须是'+,-,*,/'之一。\n";
        }
    }
    private function check($op)					//定义操作符检测方法
    {
        return (($op=="+")||($op=="-")||($op=="*")||($op=="/"));
    }
}
