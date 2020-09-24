https://www.jianshu.com/p/1f145dc00d1a

Math类中ceil、floor、round取整介绍
Math类中提供了三个与取整有关的方法：ceil、floor、round，这些方法的作用与它们的英文名称的含义相对应，
例如，ceil的英文意义是天花板，该方法就表示向上取整，
所以，Math.ceil(11.3)的结果为12,Math.ceil(-11.3)的结果是-11；floor的英文意义是地板，该方法就表示向下取整，
所以，
Math.floor(11.6)的结果为11,
Math.floor(-11.6)的结果是-12；
最难掌握的是round方法，它表示“四舍五入”，算法为Math.floor(x+0.5)，即将原来的数字加上0.5后再向下取整，所以，Math.round(11.5)的结果为12，Math.round(-11.5)的结果为-11。

ceil 向上取整
floor向下取整
round四舍五入
