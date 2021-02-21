# stripslashes
https://www.php.net/manual/ja/function.stripslashes.php


stripslashes — クォートされた文字列のクォート部分を取り除く

https://php-beginner.com/function/strings/stripslashes.html

# HTTP Pocket Reference
https://learning.oreilly.com/library/view/http-pocket-reference/1565928628/

# The PHP Data Objects (PDO) e
https://www.php.net/pdo

# Essential PHP Security
https://learning.oreilly.com/library/view/essential-php-security/059600656X/

# The Open Web Application Security Project
https://owasp.org

# MongoDB and PHP
https://learning.oreilly.com/library/view/mongodb-and-php/9781449324827/

# web-based tool for browsing MongoDB data 
http://genghisapp.com

# pdf 
http://www.fpdf.org

# mail
https://github.com/PHPMailer/PHPMailer
```php
$mail = new PHPMailer(true);

try {
 //Server settings
 $mail->SMTPDebug = SMTP::DEBUG_SERVER;
 $mail->isSMTP();
 $mail->Host = 'smtp1.example.com';
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port = 587;

 $mail->setFrom('from@example.com', 'Mailer');
 $mail->addAddress('joe@example.net');

 $mail->isHTML(false);
 $mail->Subject = 'Here is the subject';
 $mail->Body = 'And here is the body.';

 $mail->send();
 echo 'Message has been sent';
} catch (Exception $e) {
 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


// starting word
$word = new COM("word.application") or die("Unable to start Word app");
echo "Found and Loaded Word, version {$word->Version}\n";

//open an empty document
$word->Documents->add();

//do some weird stuff
$word->Selection->typeText("Hello World");
$word->Documents[1]->saveAs("c:/php_com_test.doc");

//closing word
$word->quit();

//free the object
$word = null;

echo "all done!";
COM is a remote procedure call (RPC) mechanism with a few object-oriented features. It provides a way for the calling program (the controller) to talk to another program (the COM server, or object), regardless of where it resides. If the underlying code is local to the same machine, the technology is COM; if it’s remote,
```

```php
if (PHP_OS == 'WIN32' || PHP_OS == 'WINNT') {
 echo "You are on a Windows System";
}
else {
 // some other platform
 echo "You are NOT on a Windows System";
}

ob_start();
$start = microtime(true);

phpinfo();

$end = microtime(true);
ob_end_clean();

echo "phpinfo() took " . ($end - $start) . " seconds to run.\n";


require_once 'Benchmark/Timer.php';

$timer = new Benchmark_Timer;

$timer->start();
 sleep(1);
 $timer->setMarker('Marker 1');
 sleep(2);
$timer->stop();

$profiling = $timer->getProfiling();

foreach ($profiling as $time) {
 echo $time["name"] . ": " . $time["diff"] . "<br>\n";
}

echo "Total: " . $time["total"] . "<br>\n";


$data = array(1, 2, "three");
$jsonData = json_encode($data);
echo $jsonData;
[1, 2, "three"]

require("../fpdf/fpdf.php"); // path to fpdf.php

$pdf = new FPDF();
$pdf->addPage();

$pdf->setFont("Arial", 'B', 16);
$pdf->cell(40, 10, "Hello Out There!");

$pdf->output();

try {
 // connection successful
 $db = new PDO("mysql:host=localhost;dbname=banking_sys", "petermac", "abc123");
} catch (Exception $error) {
 die("Connection failed: " . $error->getMessage());
}

try {
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $db->beginTransaction();

 $db->exec("insert into accounts (account_id, amount) values (23, '5000')" );
 $db->exec("insert into accounts (account_id, amount) values (27, '-5000')" );

 $db->commit();
} catch (Exception $error) {
 $db->rollback();
 echo "Transaction not completed: " . $error->getMessage();
}

if ($_SERVER['HTTPS'] !== 'on') {
 die("Must be a secure connection.");
}
https://learning.oreilly.com/library/view/programming-php-4th/9781492054122/ch08.html


The __sleep() method is called on an object just before serialization; it can perform any cleanup necessary to preserve the object’s state, such as closing database connections, writing out unsaved persistent data, and so on. It should return an array containing the names of the data members that need to be written into the bytestream. If you return an empty array, no data is written.

Conversely, the __wakeup() method is called on an object immediately after an object is created from a bytestream. The method can take any action it requires, such as reopening database connections and other initialization tasks.
class Log {
 private $filename;
 private $fh;

 function __construct($filename) {
 $this->filename = $filename;
 $this->open();
 }

 function open() {
 $this->fh = fopen($this->filename, 'a') or die("Can't open {$this->filename}");
 }

 function write($note) {
 fwrite($this->fh, "{$note}\n");
 }

 function read() {
 return join('', file($this->filename));
 }

 function __wakeup(array $data): void {
 $this->filename = $data["filename"];
 $this->open();
 }

 function __sleep() {
 // write information to the account file
 fclose($this->fh);

 return ["filename" => $this->filename];
 }
}


# trait 
trait Logger {
 public function log($logString) {
 $className = __CLASS__;
 echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
 }
}

class User {
 use Logger;

 public $name;

 function __construct($name = '') {
 $this->name = $name;
 $this->log("Created user '{$this->name}'");
 }

 function __toString() {
 return $this->name;
 }
}

class UserGroup {
 use Logger;

 public $users = array();

 public function addUser(User $user) {
 if (!in_array($this->users, $user)) {
 $this->users[] = $user;
 $this->log("Added user '{$user}' to group");
 }
 }
}

$group = new UserGroup;
$group->addUser(new User("Franklin"));

interface Printable {
 function printOutput();
}

class ImageComponent implements Printable {
 function printOutput() {
 echo "Printing an image...";
 }
}

methods declared as protected can be called only from within the object’s class methods and the class methods of classes inheriting from the class. 
class Person {
 public $age;

 public function __construct() {
 $this->age = 0;
 }

 public function incrementAge() {
 $this->age += 1;
 $this->ageChanged();
 }

 protected function decrementAge() {
 $this->age -= 1;
 $this->ageChanged();
 }

 private function ageChanged() {
 echo "Age changed to {$this->age}";
 }
}

class SupernaturalPerson extends Person {
 public function incrementAge() {
 // ages in reverse
 $this->decrementAge();
 }
}

$person = new Person;
$person->incrementAge();
$person->decrementAge(); // not allowed
$person->ageChanged(); // also not allowed

$person = new SupernaturalPerson;
$person->incrementAge(); // calls decrementAge under the hood

$f = new Person("Pua", 35);

$b = clone $f; // make a copy
$b->setName("Hei Hei");// change the copy

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());

function isOdd ($element) {
 return $element % 2;
}

$numbers = array(9, 23, 24, 27);
$odds = array_filter($numbers, "isOdd");
// $odds is array(0 => 9, 1 => 23, 3 => 27)

$a1 = array("bill", "claire", "ella", "simon", "judy");
$a2 = array("jack", "claire", "toni");
$a3 = array("ella", "simon", "garfunkel");

// find values of $a1 not in $a2 or $a3
$difference = array_diff($a1, $a2, $a3);
print_r($difference);

$first = array('bill' => "clinton", 'tony' => "danza");
$second = array('bill' => "gates", 'adam' => "west");

$merged = array_merge($first, $second);
// $merged = array('bill' => "gates", 'tony' => "danza", 'adam' => "west")

$u2h = array(
 'gnat' => "/home/staff/nathan",
 'frank' => "/home/action/frank",
 'petermac' => "/home/staff/petermac",
 'ktatroe' => "/home/staff/kevin"
);
$h2u = array_flip($u2h);
$user = $h2u["/home/staff/kevin"]; // $user is now 'ktatroe'

$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
shuffle($weekdays);//array in random order
print_r($weekdays);


$addItUp = function ($runningTotal, $currentValue)
{
 $runningTotal += $currentValue * $currentValue;

 return $runningTotal;
};

$numbers = array(2, 3, 5, 7);
$total = array_reduce($numbers, $addItUp);
$total = array_reduce($numbers, "addItUp", 11);
echo $total;
addItUp(0, 2);
addItUp(4, 3);
addItUp(13, 5);
addItUp(38, 7);

# array_walk
$printRow = function ($value, $key)
{
 print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
};

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");

echo "<table border=1> \n";

array_walk($person, $printRow);

echo "</table>";
$extraData = array('border' => 2, 'color' => "red");
$baseArray = array("Ford", "Chrysler", "Volkswagen", "Honda", "Toyota");

array_walk($baseArray, "walkFunction", $extraData);

function walkFunction($item, $index, $data)
{
 echo "{$item} <- item, then border: {$data['border']}";
 echo " color->{$data['color']}<br />" ;
}


$color = "indigo";
$shape = "curvy";
$floppy = "none";

$a = compact("color", "shape", "floppy");
print_r($a);
// or
$names = array("color", "shape", "floppy");
$a = compact($names);
 Array
(
    [color] => indigo
    [shape] => curvy
    [floppy] => none
)

The Iterator Functions
Every PHP array keeps track of the current element you’re working with; the pointer to the current element is known as the iterator. PHP has functions to set, move, and reset this iterator. The iterator functions are:

current()
Returns the element currently pointed at by the iterator.
reset()
Moves the iterator to the first element in the array and returns it.
next()
Moves the iterator to the next element in the array and returns it.
prev()
Moves the iterator to the previous element in the array and returns it.
end()
Moves the iterator to the last element in the array and returns it.
each()
Returns the key and value of the current element as an array and moves the iterator to the next element in the array.
key()
Returns the key of the current element.



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

class Encoder
{
 const ENCODE_STYLE_HTML = 0;
 const ENCODE_STYLE_JAVASCRIPT = 1;
 const ENCODE_STYLE_CSS = 2;
 const ENCODE_STYLE_URL = 3;
 const ENCODE_STYLE_URL_SPECIAL = 4;

 private static $URL_UNRESERVED_CHARS =
 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcedfghijklmnopqrstuvwxyz-_.~';

 public function encodeForHTML($value) {
 $value = str_replace('&', '&amp;', $value);
 $value = str_replace('<', '&lt;', $value);
 $value = str_replace('>', '&gt;', $value);
 $value = str_replace('"', '&quot;', $value);
 $value = str_replace('\'', '&#x27;', $value); // &apos; is not recommended
 $value = str_replace('/', '&#x2F;', $value); // forward slash can help end 
 HTML entity

 return $value;
 }

 public function encodeForHTMLAttribute($value) {
 return $this->_encodeString($value);
 }

 public function encodeForJavascript($value) {
 return $this->_encodeString($value, self::ENCODE_STYLE_JAVASCRIPT);
 }

 public function encodeForURL($value) {
 return $this->_encodeString($value, self::ENCODE_STYLE_URL_SPECIAL);
 }

 public function encodeForCSS($value) {
 return $this->_encodeString($value, self::ENCODE_STYLE_CSS);
 }

 /**
 * Encodes any special characters in the path portion of the URL. Does not
 * modify the forward slash used to denote directories. If your directory
 * names contain slashes (rare), use the plain urlencode on each directory
 * component and then join them together with a forward slash.
 *
 * Based on http://en.wikipedia.org/wiki/Percent-encoding and
 * http://tools.ietf.org/html/rfc3986
 */
 public function encodeURLPath($value) {
 $length = mb_strlen($value);

 if ($length == 0) {
 return $value;
 }

 $output = '';

 for ($i = 0; $i < $length; $i++) {
 $char = mb_substr($value, $i, 1);

 if ($char == '/') {
 // Slashes are allowed in paths.
 $output .= $char;
 }
 else if (mb_strpos(self::$URL_UNRESERVED_CHARS, $char) == false) {
 // It's not in the unreserved list so it needs to be encoded.
 $output .= $this->_encodeCharacter($char, self::ENCODE_STYLE_URL);
 }
 else {
 // It's in the unreserved list so let it through.
 $output .= $char;
 }
 }

 return $output;
 }

 private function _encodeString($value, $style = self::ENCODE_STYLE_HTML) {
 if (mb_strlen($value) == 0) {
 return $value;
 }

 $characters = preg_split('/(?<!^)(?!$)/u', $value);
 $output = '';

 foreach ($characters as $c) {
 $output .= $this->_encodeCharacter($c, $style);
 }

 return $output;
 }

 private function _encodeCharacter($c, $style = self::ENCODE_STYLE_HTML) {
 if (ctype_alnum($c)) {
 return $c;
 }

 if (($style === self::ENCODE_STYLE_URL_SPECIAL) && ($c == '/' || $c == ':')) {
 return $c;
 }

 $charCode = $this->_unicodeOrdinal($c);

 $prefixes = array(
 self::ENCODE_STYLE_HTML => array('&#x', '&#x'),
 self::ENCODE_STYLE_JAVASCRIPT => array('\\x', '\\u'),
 self::ENCODE_STYLE_CSS => array('\\', '\\'),
 self::ENCODE_STYLE_URL => array('%', '%'),
 self::ENCODE_STYLE_URL_SPECIAL => array('%', '%'),
 );

 $suffixes = array(
 self::ENCODE_STYLE_HTML => ';',
 self::ENCODE_STYLE_JAVASCRIPT => '',
 self::ENCODE_STYLE_CSS => '',
 self::ENCODE_STYLE_URL => '',
 self::ENCODE_STYLE_URL_SPECIAL => '',
 );

 // if ASCII, encode with \\xHH
 if ($charCode < 256) {
 $prefix = $prefixes[$style][0];
 $suffix = $suffixes[$style];

 return $prefix . str_pad(strtoupper(dechex($charCode)), 2, '0') . $suffix;
 }

 // otherwise encode with \\uHHHH
 $prefix = $prefixes[$style][1];
 $suffix = $suffixes[$style];

 return $prefix . str_pad(strtoupper(dechex($charCode)), 4, '0') . $suffix;
 }

 private function _unicodeOrdinal($u) {
 $c = mb_convert_encoding($u, 'UCS-2LE', 'UTF-8');
 $c1 = ord(substr($c, 0, 1));
 $c2 = ord(substr($c, 1, 1));

 return $c2 * 256 + $c1;
 }
}

```


