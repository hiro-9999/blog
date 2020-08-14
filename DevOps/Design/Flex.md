https://www.toutiao.com/a6698244862593991179/?tt_from=copy_link&utm_campaign=client_share&timestamp=1597369917&app=news_article_social&utm_source=copy_link&utm_medium=toutiao_ios&use_new_style=1&req_id=202008140951560100140411610304386C&group_id=6698244862593991179
一、flex-direction：决定项目（item）的排列方向

# flex-direction有四个值：

1、row（默认值）：主轴为水平方向，起点在左端。

2、row-reverse：主轴为水平方向，起点在右端。

3、column：主轴为垂直方向，起点在上沿。

4、column-reverse：主轴为垂直方向，起点在下沿。

# flex-shrink

定义了Item的缩小比例，默认为1，即如果空间不足，该项目将缩小

# flex

flex属性是flex-grow, flex-shrink 和 flex-basis的简写，默认值为0 1 auto。后两个属性可选。
所以最前面的几个示例，都直接写的flex，其实flex就flex-grow, flex-shrink 和 flex-basis的简写。

# order

Item的排列顺序。数值越小，排列越靠前，默认为0。

# flex-grow

定义Item的放大比例，默认为0，即如果存在剩余空间，也不放大。意思就是将100%宽/高按什么比例分。

# justify-content：定义了item在主轴上的对齐方式

justify-content有五个值：

1、flex-start（默认值）：左对齐

2、flex-end：右对齐

3、center： 居中

4、space-between：两端对齐，项目之间的间隔都相等。

5、space-around：每个item两侧的间隔相等。所以，item之间的间隔比item与边框的间隔大一倍。


# flex-wrap有三个值：

1、nowrap（默认）：不换行

2、wrap：换行，第一行在上方。

3、wrap-reverse：换行，第一行在下方。
