# stripslashes
https://www.php.net/manual/ja/function.stripslashes.php


stripslashes — クォートされた文字列のクォート部分を取り除く

https://php-beginner.com/function/strings/stripslashes.html

```php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
We can remove the "math", "bio", and "cs" elements by telling array_splice() to start at position 2 and remove 3 elements:

$removed = array_splice($subjects, 2, 3);
// $removed is array("math", "bio", "cs")
// $subjects is array("physics", "chem", "drama", "classics")


$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");

extract($array, EXTR_PREFIX_ALL, "book");
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";
//Warning: extract() has been disabled for security reasons 


$new = array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
// $subjects is array("physics", "chem", "math", "bio", "law", "business", "IS")

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
 $keys = array_keys($person); // $keys is array("name", "age", "wife")
 
 print_r( $keys);
 
 $values = array_values($person);
 
  print_r( $values);
 
 $a = array(0, NULL, '');

function tf($v)
{
 return $v ? 'T' : 'F';
}

for ($i=0; $i < 4; $i++) {
 printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i, $a)));
}

$nums = range(1, 7);
print_r($nums);//1,2,3,4,5,6,7
$rows = array_chunk($nums, 3);
print_r($rows);

$person = array("Fred", 35, "Betty");
list($name, $age, $wife) = $person;
// $name is "Fred", $age is 35, $wife is "Betty"

$scores = array(5, 10);
$padded = array_pad($scores, 5, 0); // $padded is now array(5, 10, 0, 0, 0)
Notice how the new values are appended to the array. If you want the new values added to the start of the array, use a negative second argument:

$padded = array_pad($scores, −5, 0); // $padded is now array(0, 0, 0, 5, 10);

$person = array("name" => 'Peter');
print "Hello, {$person["name"]}";

$array = array("really long string here, boy", "this", "middling length", "larger");

usort($array, function($a, $b) {
 return (strlen($a)-strlen($b));
});

print_r($array); //  Array
(
    [0] => this
    [1] => larger
    [2] => middling length
    [3] => really long string here, boy
)
The array is sorted by usort() using the anonymous function, in order of string length.

<?php
$array = array("really long string here, boy", "this", "middling length", 
"larger");
$sortOption = "random";

function sortNonrandom($array)
{
 $sortOption = "random";

 usort($array, function($a, $b) use ($sortOption)
 {
 if ($sortOption == "random") {
 // sort randomly by returning (-1, 0, 1) at random
 return rand(0, 2) - 1;
 }
 else {
 return strlen($a) - strlen($b);
 }
 });

 print_r($array);
}

print_r(sortNonrandom($array));




$array = func_get_args();
$count = func_num_args();
$value = func_get_arg(argument_number);

$names = array("Fred", "Barney", "Wilma", "Betty");

function &findOne($n) {
 global $names;

 return $names[$n];
}

$person =& findOne(1); // Barney
$person = "Barnetta"; // changes $names[1]

<?php

function doubler(&$value)
{
 $value = $value << 1;
}

$a = 3;
doubler($a);

echo $a; //6

// unlink() deletes a file
$result = unlink("functions.txt");
// $result = true or false depending on success or failure

global $var;
$var = & $GLOBALS['var'];

<?php function column()
{ ?>
 </td><td>
<?php }

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


