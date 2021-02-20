# stripslashes
https://www.php.net/manual/ja/function.stripslashes.php


stripslashes — クォートされた文字列のクォート部分を取り除く

https://php-beginner.com/function/strings/stripslashes.html

```php
$a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$o = (object) $a;
echo $o->name;
Fred

PHP functions bindec(), decbin(), octdec(), and decoct() to convert numbers back and forth when you are trying to understand binary arithmetic.
echo decbin(650);  // 1010001010
 echo "\n";
echo bindec(1010001010); // 650


class Person
{
 var $name = "Fred";
 var $age = 35;
}

$o = new Person;
$a = (array) $o;

print_r($a);

$var1 = null;
$var2 = 31;

echo $var1 ?? $var2 ; //outputs 31

<?php
$str = "It\'s mine.";
echo stripslashes( $str );
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
 Enter message to appear on button:
 <input type="text" name="message" /><br />
 <input type="submit" value="Create Button" />
 </form>
 
 $callback = function()
{
 echo "callback achieved";
};

call_user_func($callback);

$var1 = 5;
$var2 = 65;

echo $var1 <=> $var2 ; // outputs -1
echo "\n";
echo $var2 <=> $var1 ; // outputs 1

echo "\n";

function updateCounter()
{
 global $counter;
 $counter++;
}

$counter = 10;
updateCounter();
echo $counter;
11
A more cumbersome way to update the global variable is to use PHP’s $GLOBALS array instead of accessing the variable directly:

function updateCounter()
{
 $GLOBALS[‘counter’]++;
}

$counter = 10;
updateCounter();
echo $counter;
11
STATIC VARIABLES
A static variable retains its value between calls to a function but is visible only within that function. You declare a variable static with the static keyword. For example:

function updateCounter()
{
 static $counter = 0;
 $counter++;

 echo "Static counter is now {$counter}<br/>";
}

$counter = 10;
updateCounter();
updateCounter();

echo "Global counter is {$counter}";
Static counter is now 1
Static counter is now 2
Global counter is 10

$a = 5;
$b = 10;
$c = ($a = $b);

print $c; //10
```


