<?php


class Circle								//创建一个Circle类表示圆
{
    const PI=3.1415926;					//常量PI表示圆周率
    public function Area($r)
    {
        return self::PI * $r * $r;			//返回面积
    }
}
$s = new Circle();
echo "PI的值为：".Circle::PI."\n";			//访问Circle类中的常量PI
echo "所求圆面积是：".$s->Area(10);
