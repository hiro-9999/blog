<?php

class School
{
    public $Name="北京大学";
    var $CreateDate="1912年9月25日";
    public function intr()
    {
        echo "主要院系： 文学院，教育科学学院，物理与电子学院，信息工程学院，艺术学院 \n";
    }
    function words()
    {
        echo "校训：明德，新民，止于至善 \n";
    }
}
echo "通过实例访问public方法，输出结果如下：\n";
$s = new School();
echo "$s->Name 创办于 $s->CreateDate \n";
$s->words();
$s->intr();
echo "\n直接访问public方法，输出结果如下：\n";
School::intr();
School::words();
