```php
PHP Functions by Category
This section gives a list of functions provided by PHP’s built-in extensions, grouped by extension category.

Arrays
array_change_key_case
array_chunk
array_combine
array_count_values
array_diff
array_diff_assoc
array_diff_key
array_diff_uassoc
array_diff_ukey
array_fill
array_fill_keys
array_filter
array_flip
array_intersect
array_intersect_assoc
array_intersect_key
array_intersect_uassoc
array_intersect_ukey
array_key_exists
array_keys
array_map
array_merge
array_merge_recursive
array_multisort
array_pad
array_pop
array_product
array_push
array_rand
array_reduce
array_replace
array_replace_recursive
array_reverse
array_search
array_shift
array_slice
array_splice
array_sum
array_udiff
array_udiff_assoc
array_udiff_uassoc
array_uintersect
array_uintersect_assoc
array_uintersect_uassoc
array_unique
array_unshift
array_values
array_walk
array_walk_recursive
arsort
asort
compact
count
current
each
end
extract
in_array
is_countable
key
krsort
ksort
list
natcasesort
natsort
next
prev
range
reset
rsort
shuffle
sort
uasort
uksort
usort
Classes and Objects
class_alias
class_exists
get_called_class
get_class
get_class_methods
get_class_vars
get_declared_classes
get_declared_interfaces
get_declared_traits
get_object_vars
get_parent_class
interface_exists
is_a
is_subclass_of
method_exists
property_exists
trait_exists
Data Filtering
filter_has_var
filter_id
filter_input_array
filter_var
filter_input
filter_list
filter_var_array
Date and Time
checkdate
date
date_default_timezone_get
date_default_timezone_set
date_parse
date_parse_from_format
date_sun_info
date_sunrise
date_sunset
getdate
gettimeofday
gmdate
gmmktime
gmstrftime
hrtime
idate
localtime
microtime
mktime
strftime
strptime
strtotime
time
timezone_name_from_abbr
timezone_version_get
Directories
chdir
chroot
closedir
dir
getcwd
opendir
readdir
rewinddir
scandir
Errors and Logging
debug_backtrace
debug_print_backtrace
error_clear_last
error_get_last
error_log
error_reporting
restore_error_handler
restore_exception_handler
set_error_handler
set_exception_handler
trigger_error
Filesystem
basename
chgrp
chmod
chown
clearstatcache
copy
dirname
disk_free_space
disk_total_space
fclose
feof
fflush
fgetc
fgetcsv
fgets
fgetss
file
file_exists
file_get_contents
file_put_contents
fileatime
filectime
filegroup
fileinode
filemtime
fileowner
fileperms
filesize
filetype
flock
fnmatch
fopen
fpassthru
fputcsv
fread
fscanf
fseek
fstat
ftell
ftruncate
fwrite
glob
is_dir
is_executable
is_file
is_link
is_readable
is_uploaded_file
is_writable
lchgrp
lchown
link
linkinfo
lstat
mkdir
move_uploaded_file
parse_ini_file
parse_ini_string
pathinfo
pclose
popen
readfile
readlink
realpath_cache_get
realpath_cache_size
realpath
rename
rewind
rmdir
stat
symlink
tempnam
tmpfile
touch
umask
unlink
Functions
call_user_func
call_user_func_array
create_function
forward_static_call
forward_static_call_array
func_get_arg
func_get_args
func_num_args
function_exists
get_defined_functions
register_shutdown_function
register_tick_function
unregister_tick_function
Mail
mail
Math
abs
acos
acosh
asin
asinh
atan2
atan
atanh
base_convert
bindec
ceil
cos
cosh
decbin
dechex
decoct
deg2rad
exp
expm1
floor
fmod
getrandmax
hexdec
hypot
is_finite
is_infinite
is_nan
lcg_value
log10
log1p
log
max
min
mt_getrandmax
mt_rand
mt_srand
octdec
pi
pow
rad2deg
rand
random_int
round
sin
sinh
sqrt
srand
tan
tanh
Miscellaneous Functions
connection_aborted
connection_status
constant
define
defined
get_browser
highlight_file
highlight_string
ignore_user_abort
pack
php_strip_whitespace
sleep
sys_getloadavg
time_nanosleep
time_sleep_until
uniqid
unpack
usleep
Network
checkdnsrr
closelog
fsockopen
gethostbyaddr
gethostbyname
gethostbynamel
gethostname
getmxrr
getprotobyname
getprotobynumber
getservbyname
getservbyport
header
header_remove
headers_list
headers_sent
inet_ntop
inet_pton
ip2long
long2ip
openlog
pfsockopen
setcookie
setrawcookie
syslog
Output Buffering
flush
ob_clean
ob_end_clean
ob_end_flush
ob_flush
ob_get_clean
ob_get_contents
ob_get_flush
ob_get_length
ob_get_level
ob_get_status
ob_gzhandler
ob_implicit_flush
ob_list_handlers
ob_start
output_add_rewrite_var
output_reset_rewrite_vars
PHP Language Tokenizer
token_get_all
token_name
PHP Options/Info
assert_options
assert
extension_loaded
gc_collect_cycles
gc_disable
gc_enable
gc_enabled
get_cfg_var
get_current_user
get_defined_constants
get_extension_funcs
get_include_path
get_included_files
get_loaded_extensions
getenv
getlastmod
getmygid
getmyinode
getmypid
getmyuid
getopt
getrusage
ini_get_all
ini_get
ini_restore
ini_set
memory_get_peak_usage
memory_get_usage
php_ini_loaded_file
php_ini_scanned_files
php_logo_guid
php_sapi_name
php_uname
phpcredits
phpinfo
phpversion
putenv
set_include_path
set_time_limit
sys_get_temp_dir
version_compare
zend_logo_guid
zend_thread_id
zend_version
Program Execution
escapeshellarg
escapeshellcmd
exec
passthru
proc_close
proc_get_status
proc_nice
proc_open
proc_terminate
shell_exec
system
Session Handling
session_cache_expire
session_cache_limiter
session_decode
session_destroy
session_encode
session_get_cookie_params
session_id
session_module_name
session_name
session_regenerate_id
session_register_shutdown
session_save_path
session_set_cookie_params
session_set_save_handler
session_start
session_status
session_unset
session_write_close
Streams
stream_bucket_append
stream_bucket_make_writeable
stream_bucket_new
stream_bucket_prepend
stream_context_create
stream_context_get_default
stream_context_get_options
stream_context_get_params
stream_context_set_default
stream_context_set_option
stream_context_set_params
stream_copy_to_stream
stream_encoding
stream_filter_append
stream_filter_prepend
stream_filter_register
stream_filter_remove
stream_get_contents
stream_get_filters
stream_get_line
stream_get_meta_data
stream_get_transports
stream_get_wrappers
stream_is_local
stream_notification_callback
stream_resolve_include_path
stream_select
stream_set_blocking
stream_set_chunk_size
stream_set_read_buffer
stream_set_timeout
stream_set_write_buffer
stream_socket_accept
stream_socket_client
stream_socket_enable_crypto
stream_socket_get_name
stream_socket_pair
stream_socket_recvfrom
stream_socket_sendto
stream_socket_server
stream_socket_shutdown
stream_supports_lock
stream_wrapper_register
stream_wrapper_restore
stream_wrapper_unregister
Strings
addcslashes
addslashes
bin2hex
chr
chunk_split
convert_cyr_string
convert_uudecode
convert_uuencode
count_chars
crc32
crypt
echo
explode
fprintf
get_html_translation_table
hebrev
hex2bin
html_entity_decode
htmlentities
htmlspecialchars
htmlspecialchars_decode
implode
lcfirst
levenshtein
localeconv
ltrim
md5
md5_file
metaphone
nl_langinfo
nl2br
number_format
ord
parse_str
printf
quoted_printable_decode
quoted_printable_encode
quotemeta
random_bytes
rtrim
setlocale
sha1
sha1_file
similar_text
soundex
sprintf
sscanf
str_getcsv
str_ireplace
str_pad
str_repeat
str_replace
str_rot13
str_shuffle
str_split
str_word_count
strcasecmp
strcmp
strcoll
strcspn
strip_tags
stripcslashes
stripos
stripslashes
stristr
strlen
strnatcasecmp
strnatcmp
strncasecmp
strncmp
strpbrk
strpos
strrchr
strrev
strripos
strrpos
strspn
strstr
strtok
strtolower
strtoupper
strtr
substr
substr_compare
substr_count
substr_replace
trim
ucfirst
ucwords
vfprintf
vprintf
vsprintf
wordwrap
URLs
base64_decode
base64_encode
get_headers
get_meta_tags
http_build_query
parse_url
rawurldecode
rawurlencode
urldecode
urlencode
Variables
debug_zval_dump
empty
floatval
get_defined_vars
get_resource_type
gettype
intval
is_array
is_bool
is_callable
is_float
is_int
is_null
is_numeric
is_object
is_resource
is_scalar
is_string
isset
print_r
serialize
settype
strval
unserialize
unset
var_dump
var_export
Zlib
deflate_add
deflate_init
inflate_add
inflate_init
Alphabetical Listing of PHP Functions
abs
int abs(int number) float abs(float number)

Returns the absolute value of number in the same type (float or integer) as the argument.

acos
float acos(float value)

Returns the arc cosine of value in radians.

acosh
float acosh(float value)

Returns the inverse hyberbolic cosine of value.

addcslashes
string addcslashes(string string, string characters)

Returns escaped instances of characters in string by adding a backslash before them. You can specify ranges of characters by separating them with two periods—for example, to escape characters between a and q, use "a..q". Multiple characters and ranges can be specified in characters. The addcslashes() function is the inverse of stripcslashes().

addslashes
string addslashes(string string)

Returns escaped characters in string that have special meaning in SQL database queries. Single quotes (''), double quotes (""), backslashes (\), and the NUL-byte (\0) are escaped. The stripslashes() function is the inverse for this function.

array_change_key_case
array array_change_key_case(array array[, CASE_UPPER|CASE_LOWER])

Returns an array whose elements’ keys are changed to all uppercase or all lowercase. Numeric indices are unchanged. If the optional case parameter is left off, the keys are changed to lowercase.

array_chunk
array array_chunk(array array, int size[, int preserve_keys])

Splits array into a series of arrays, each containing size elements, and returns them in an array. If preserve_keys is true (default is false), the original keys are preserved in the resulting arrays; otherwise, the values are ordered with numeric indices starting at 0.

array_combine
array array_combine(array keys, array values)

Returns an array created by using each element in the keys array as the key and the element in the values array as the value. If either array has no elements, if the number of elements in each array differs, or if an element exists in one array but not in the other, false is returned.

array_count_values
array array_count_values(array array)

Returns an array whose elements’ keys are the input array’s values. The value of each key is the number of times that key appears in the input array as a value.

array_diff
array array_diff(array array1, array array2[, ... array arrayN])

Returns an array that contains all of the values from the first array that are not present in any of the other provided arrays. The keys of the values are preserved.

array_diff_assoc
array array_diff_assoc(array array1, array array2[, ... array arrayN])

Returns an array containing all the values in array1 that are not present in any of the other provided arrays. Unlike in array_diff(), both the keys and values must match to be considered identical. The keys of the values are preserved.

array_diff_key
array array_diff_key(array array1, array array2[, ... array arrayN])

Returns an array that contains all of the values from the first array whose keys are not present in any of the other provided arrays. The keys of the values are preserved.

array_diff_uassoc
array array_diff_uassoc(array array1, array array2 [, ... array arrayN], callable function)

Returns an array containing all the values in array1 that are not present in any of the other provided arrays. Unlike in array_diff(), both the keys and values must match to be considered identical. The function function is used to compare the values of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than 0 if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than 0 if the first argument is greater than the second. The keys of the values are preserved.

array_diff_ukey
array array_diff_ukey(array array1, array array2 [, ... array arrayN], callable function)

Returns an array containing all the values in array1 whose keys are not present in any of the other provided arrays. The function function is used to compare the keys of the elements for equality. The function is called with two parameters—the keys to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_fill
array array_fill(int start, int count, mixed value)

Returns an array with count elements with the value value. Numeric indices are used, starting at start and counting upward by 1 for each element. If count is zero or less, an error is produced.

array_fill_keys
array array_fill_keys(array keys, mixed value)

Returns an array containing values for each item in keys, using the elements in keys for each element’s key and value for each element’s value.

array_filter
array array_filter(array array, mixed callback)

Creates an array containing all values from the original array for which the given callback function returns true. If the input array is an associative array, the keys are preserved. For example:

function isBig($inValue)
{
 return($inValue > 10);
}

$array = array(7, 8, 9, 10, 11, 12, 13, 14);
$newArray = array_filter($array, "isBig"); // contains (11, 12, 13, 14)
array_flip
array array_flip(array array)

Returns an array in which the elements’ keys are the original array’s values, and vice versa. If multiple values are found, the last one encountered is retained. If any of the values in the original array are any type except strings and integers, array_flip() will issue a warning, and the key-value pair in question will not be included in the result. array_flip() returns NULL on failure.

array_intersect
array array_intersect(array array1, array array2[, ... array arrayN])

Returns an array consisting of every element in array1 that also exists in every other array.

array_intersect_assoc
array array_intersect_assoc(array array1, array array2[, ... array arrayN])

Returns an array containing all the values present in all of the given arrays. Unlike in array_intersect(), both the keys and values must match to be considered identical. The keys of the values are preserved.

array_intersect_key
array array_intersect_key(array array1, array array2[, ... array arrayN])

Returns an array consisting of every element in array1 whose keys also exist in every other array.

array_intersect_uassoc
array array_intersect_uassoc(array array1, array array2 [, ... array arrayN], callable function)

Returns an array containing all the values present in all of the given arrays.

The function function is used to compare the keys of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_intersect_ukey
array array_intersect_ukey(array array1, array array2 [, ... array arrayN], callable function)

Returns an array consisting of every element in array1 whose keys also exist in every other array.

The function function is used to compare the values of the elements for equality. The function is called with two parameters—the keys to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second.

array_key_exists
bool array_key_exists(mixed key, array array)

Returns true if array contains a key with the value key. If no such key is available, returns false.

array_keys
array array_keys(array array[, mixed value[, bool strict]])

Returns an array containing all of the keys in the given array. If the second parameter is provided, only keys whose values match value are returned in the array. If strict is specified and is true, a matched element is returned only when it is of the same type and value as value.

array_map
array array_map(mixed callback, array array1[, ... array arrayN])

Creates an array by applying the callback function referenced in the first parameter to the remaining parameters (provided arrays); the callback function should take as parameters a number of values equal to the number of arrays passed into array_map(). For example:

function multiply($inOne, $inTwo) {
 return $inOne * $inTwo;
}
$first = (1, 2, 3, 4);
$second = (10, 9, 8, 7);
$array = array_map("multiply", $first, $second); // contains (10, 18, 24, 28)
array_merge
array array_merge(array array1, array array2[, ... array arrayN])

Returns an array created by appending the elements of every provided array to the previous. If any array has a value with the same string key, the last value encountered for the key is returned in the array; any elements with identical numeric keys are inserted into the resulting array.

array_merge_recursive
array array_merge_recursive(array array1, array array2[, ... array arrayN])

Like array_merge(), creates and returns an array by appending each input array to the previous. However, unlike in array_merge(), when multiple elements have the same string key, an array containing each value is inserted into the resulting array.

array_multisort
bool array_multisort(array array1[, SORT_ASC|SORT_DESC [, SORT_REGULAR|SORT_NUMERIC|SORT_STRING]] [, array array2[, SORT_ASC|SORT_DESC [, SORT_REGULAR|SORT_NUMERIC|SORT_STRING]], ...])

Used to sort several arrays simultaneously, or to sort a multidimensional array in one or more dimensions. The input arrays are treated as columns in a table to be sorted by rows—the first array is the primary sort. Any values that compare the same according to that sort are sorted by the next input array, and so on.

The first argument is an array; following that, each argument may be an array or one of the following order flags (the order flags are used to change the default order of the sort):

SORT_ASC (default)	Sort in ascending order
SORT_DESC	Sort in descending order
After that, a sorting type from the following list can be specified:

SORT_REGULAR (default)	Compare items normally
SORT_NUMERIC	Compare items numerically
SORT_STRING	Compare items as strings
The sorting flags apply only to the immediately preceding array, and they revert to SORT_ASC and SORT_REGULAR before each new array argument.

This function returns true if the operation was successful and false otherwise.

array_pad
array array_pad(array input, int size[, mixed padding])

Returns a copy of the input array padded to the length specified by size. Any new elements added to the array have the value of the optional third value. You can add elements to the beginning of the array by specifying a negative size—in this case, the new size of the array is the absolute value of the size.

If the array already has the specified number of elements or more, no padding takes place and an exact copy of the original array is returned.

array_pop
mixed array_pop(array &stack)

Removes the last value from the given array and returns it. If the array is empty (or the argument is not an array), returns NULL. Note that the array pointer is reset on the provided array.

array_product
number array_product(array array)

Returns the product of every element in array. If each value in array is an integer, the resulting product is an integer; otherwise, the resulting product is a float.

array_push
int array_push(array &array, mixed value1[, ... mixed valueN])

Adds the given values to the end of the array specified in the first argument and returns the new size of the array. Performs the same function as calling $array[] = $value for each of the values in the list.

array_rand
mixed array_rand(array array[, int count])

Picks a random element from the given array. The second (optional) parameter can be given to specify a number of elements to pick and return. If more than one element is returned, an array of keys is returned, rather than the element’s value.

array_reduce
mixed array_reduce(array array, mixed callback[, int initial])

Returns a value derived by iteratively calling the given callback function with pairs of values from the array. If the third parameter is supplied, it, along with the first element in the array, is passed to the callback function for the initial call.

array_replace
array array_replace(array array1, array array2[, ... array arrayN])

Returns an array created by replacing values in array1 with values from the other arrays. Elements in array1 with keys matching in the replacement arrays are replaced with the values of those elements.

If multiple replacement arrays are provided, they are processed in order. Any elements in array1 whose keys do not match any keys in the replacement arrays are preserved.

array_replace_recursive
array array_replace_recursive(array array1, array array2[, ... array arrayN])

Returns an array created by replacing values in array1 with values from the other arrays. Elements in array1 with keys matching in the replacement arrays are replaced with the values of those elements.

If the value in both array1 and a replacement array for a particular key are arrays, those values in those arrays are recursively merged using the same process.

If multiple replacement arrays are provided, they are processed in order. Any elements in array1 whose keys do not match any keys in the replacement arrays are preserved.

array_reverse
array array_reverse(array array[, bool preserve_keys])

Returns an array containing the same elements as the input array, but whose order is reversed. If preserve_keys is set to true, then numeric keys are preserved. Non-numeric keys are not affected by this parameter and are always preserved.

array_search
mixed array_search(mixed value, array array[, bool strict])

Performs a search for a value in an array, as with in_array(). If the value is found, the key of the matching element is returned; NULL is returned if the value is not found. If strict is specified and is true, a matched element is returned only when it is of the same type and value as value.

array_shift
mixed array_shift(array stack)

Similar to array_pop(), but instead of removing and returning the last element in the array, it removes and returns the first element in the array. If the array is empty, or if the argument is not an array, returns NULL.

array_slice
array array_slice(array array, int offset[, int length][, bool keepkeys])

Returns an array containing a set of elements pulled from the given array. If offset is a positive number, elements starting from that index onward are used; if offset is a negative number, elements starting that many elements from the end of the array are used. If the third argument is provided and is a positive number, that many elements are returned; if negative, the sequence stops that many elements from the end of the array. If the third argument is omitted, the sequence returned contains all elements from the offset to the end of the array. If keepkeys, the fourth argument, is true, then the order of numeric keys will be preserved; otherwise, they will be renumbered and resorted.

array_splice
array array_splice(array array, int offset[, int length[, array replacement]])

Selects a sequence of elements using the same rules as array_slice(), but instead of being returned, those elements are either removed or, if the fourth argument is provided, replaced with that array. An array containing the removed (or replaced) elements is returned.

array_sum
number array_sum(array array)

Returns the sum of every element in the array. If all of the values are integers, an integer is returned. If any of the values are floats, a float is returned.

array_udiff
array array_udiff(array array1, array array2[, ... array arrayN], string function)

Returns an array containing all the values in array1 that are not present in any of the other arrays. Only the values are used to check for equality; that is, "a" => 1 and "b" => 1 are considered equal. The function function is used to compare the values of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_udiff_assoc
array array_udiff_assoc(array array1, array array2 [, ... array arrayN], string function)

Returns an array containing all the values in array1 that are not present in any of the other arrays. Both keys and values are used to check for equality; that is, "a" => 1 and "b" => 1 are not considered equal. The function function is used to compare the values of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_udiff_uassoc
array array_udiff_uassoc(array array1, array array2[, ... array arrayN], string function1, string function2)

Returns an array containing all the values in array1 that are not present in any of the other arrays. Both keys and values are used to check for equality; that is, "a" => 1 and "b" => 1 are not considered equal. The function function1 is used to compare the values of the elements for equality. The function function2 is used to compare the values of the keys for equality. Each function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_uintersect
array array_uintersect(array array1, array array2 [, ... array arrayN], string function)

Returns an array containing all the values in array1 that are present in all of the other arrays. Only the values are used to check for equality; that is, "a" => 1 and "b" => 1 are considered equal. The function function is used to compare the values of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_uintersect_assoc
array array_uintersect_assoc(array array1, array array2[, ... array arrayN], string function)

Returns an array containing all the values in array1 that are present in all of the other arrays. Both keys and values are used to check for equality; that is, "a" => 1 and "b" => 1 are not considered equal. The function function is used to compare the values of the elements for equality. The function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_uintersect_uassoc
array array_uintersect_uassoc(array array1, array array2[, ... array arrayN], string function1, string function2)

Returns an array containing all the values in the first array that are also present in all of the other arrays. Both keys and values are used to check for equality; that is, "a" => 1 and "b" => 1 are not considered equal. The function function1 is used to compare the values of the elements for equality. The function function2 is used to compare the values of the keys for equality. Each function is called with two parameters—the values to compare. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The keys of the values are preserved.

array_unique
array array_unique(array array[, int sort_flags])

Creates and returns an array containing each element in the given array. If any values are duplicated, the later values are ignored. The sort_flags optional argument can be used to alter the sorting methods with constants: SORT_REGULAR, SORT_NUMERIC, SORT_STRING (default), and SORT_LOCALE_STRING. Keys from the original array are preserved.

array_unshift
int array_unshift(array stack, mixed value1[, ... mixed valueN])

Returns a copy of the given array with the additional arguments added to the beginning of the array; the added elements are added as a whole, so the elements as they appear in the array are in the same order as they appear in the argument list. Returns the number of elements in the new array.

array_values
array array_values(array array)

Returns an array containing all of the values from the input array. The keys for those values are not retained.

array_walk
bool array_walk(array input, string callback[, mixed user_data])

Calls the named function for each element in the array. The function is called with the element’s value, key, and optional user data as arguments. To ensure that the function works directly on the values of the array, define the first parameter of the function by reference. Returns true on success, and false on failure.

array_walk_recursive
bool array_walk_recursive(array input, string function[, mixed user_data])

Like array_walk(), calls the named function for each element in the array. Unlike in array_walk(), if an element’s value is an array, the function is called for each element in that array as well. The function is called with the element’s value, key, and optional user data as arguments. To ensure that the function works directly on the values of the array, define the first parameter of the function by reference. Returns true on success, and false on failure.

arsort
bool arsort(array array[, int flags])

Sorts an array in reverse order, maintaining the keys for the array values. The optional second parameter contains additional sorting flags. Returns true on success, and false on failure. See Chapter 5 and sort for more information on using this function.

asin
float asin(float value)

Returns the arc sine of value in radians.

asinh
float asinh(float value)

Returns the inverse hyperbolic sine of value.

asort
bool asort(array array[, int flags])

Sorts an array, maintaining the keys for the array values. The optional second parameter contains additional sorting flags. Returns true on success, and false on failure. See Chapter 5 and sort for more information on using this function.

assert
bool assert(string|bool assertion[, string description])

If assertion is true, generates a warning in executing the code. If assertion is a string, assert() evaluates that string as PHP code. The optional second argument allows for additional text to be added in with the failure message. Check the assert_options() function to see its related connection.

assert_options
mixed assert_options(int option[, mixed value])

If value is specified, sets the assert control option option to value and returns the previous setting. If value is not specified, returns the current value of option. The following values for option are allowed:

ASSERT_ACTIVE	Enable assertions
ASSERT_WARNING	Have assertions generate warnings
ASSERT_BAIL	Have execution of the script halt on an assertion
ASSERT_QUIET_EVAL	Disable error reporting while evaluating assertion code given to the assert() function
ASSERT_CALLBACK	Call the specified user function to handle an assertion. Assertion callbacks are called with three arguments: the file, the line, and the expression where the assertion failed
atan
float atan(float value)

Returns the arc tangent of value in radians.

atan2
float atan2(float y, float x)

Using the signs of both parameters to determine the quadrant the value is in, returns the arc tangent of x and y in radians.

atanh
float atanh(float value)

Returns the inverse hyperbolic tangent of value.

base_convert
string base_convert(string number, int from, int to)

Converts number from one base to another. The base the number is currently in is from, and the base to convert to is to. The bases to convert from and to must be between 2 and 36. Digits in a base higher than 10 are represented with the letters a (10) through z (35). Up to a 32-bit number, or 2,147,483,647 decimal, can be converted.

base64_decode
string base64_decode(string data)

Decodes data, which is base-64-encoded data, into a string (which may contain binary data). For more information on base-64 encoding, see RFC 2045.

base64_encode
string base64_encode(string data)

Returns a base-64-encoded version of data. MIME base-64 encoding is designed to allow binary or other 8-bit data to survive transition through protocols that may not be 8-bit safe, such as email messages.

basename
string basename(string path[, string suffix])

Returns the filename component from the full path path. If the file’s name ends in suffix, that string is removed from the name. For example:

$path = "/usr/local/httpd/index.html";
echo(basename($path)); // index.html
echo(basename($path, '.html')); // index
bin2hex
string bin2hex(string binary)

Converts binary to a hexadecimal (base-16) value. Up to a 32-bit number, or 2,147,483,647 decimal, can be converted.

bindec
number bindec(string binary)

Converts binary to a decimal value. Up to a 32-bit number, or 2,147,483,647 decimal, can be converted.

call_user_func
mixed call_user_func(string function[, mixed parameter1[, ... mixed parameterN]])

Calls the function given in the first parameter. Additional parameters are used as such when calling the function. The comparison to check for a matching function is case-insensitive. Returns the value returned by the function.

call_user_func_array
mixed call_user_func_array(string function, array parameters)

Similar to call_user_func(), this function calls the function named function with the parameters in the array parameters. The comparison to check for a matching function is case-insensitive. Returns the value returned by the function.

ceil
float ceil(float number)

Returns the next highest value to number, rounding upward if needed.

chdir
bool chdir(string path)

Sets the current working directory to path; returns true if the operation was successful and false if not.

checkdate
bool checkdate(int month, int day, int year)

Returns true if the month, date, and year as given in the parameters are valid (Gregorian), and false if not. A date is considered valid if the year falls between 1 and 32,767 inclusive, the month is between 1 and 12 inclusive, and the day is within the number of days the specified month has (including leap years).

checkdnsrr
bool checkdnsrr(string host[, string type])

Searches DNS records for a host having the given type. Returns true if any records are found, and false if none are found. The host type can take any of the following values (if no value is specified, MX is the default):

A	IP address
MX (default)	Mail exchanger
NS	Name server
SOA	Start of authority
PTR	Pointer to information
CNAME	Canonical name
AAAA	128-bit IPv6 address
A6	Defined as part of early IPv6 but downgraded to experimental
SRV	Generalized service location record
NAPTR	Regular expression–based rewriting of domain names
TXT	Originally for human-readable text. However, this record also carries machine-readable data
ANY	Any of the above
Check the DNS record entry on Wikipedia for more details.

chgrp
bool chgrp(string path, mixed group)

Changes the group for the file path to group; PHP must have appropriate privileges for this function to work. Returns true if the change was successful and false if not.

chmod
bool chmod(string path, int mode)

Attempts to change the permissions of path to mode. mode is expected to be an octal number, such as 0755. An integer value such as 755 or a string value such as "u+x" will not work as expected. Returns true if the operation was successful and false if not.

chown
bool chown(string path, mixed user)

Changes ownership for the file path to the user named user. PHP must have appropriate privileges (generally, root for this function) for the function to operate. Returns true if the change was successful and false if not.

chr
string chr(int char)

Returns a string consisting of the single ASCII character char.

chroot
bool chroot(string path)

Changes the root directory of the current process to path. You cannot use chroot() to restore the root directory to / when running PHP in a web server environment. Returns true if the change was successful and false if not.

chunk_split
string chunk_split(string string[, int size[, string postfix]])

Inserts postfix into string after every size characters and at the end of the string; returns the resulting string. If not specified, postfix defaults to \r\n and size defaults to 76. This function is most useful for encoding data to the RPF 2045 standard. For example:

$data = "...some long data...";
$converted = chunk_split(base64_encode($data));
class_alias
bool class_alias(string name, string alias)

Creates an alias to the class name. From then on, you can reference the class (for example, to instantiate objects) with either name or alias. Returns true if the alias could be created; if not, it returns false.

class_exists
bool class_exists(string name[, bool autoload_class])

Returns true if a class with the same name as the string has been defined; if not, it returns false. The comparison for class names is case-insensitive. If autoload_class is set and is true, the class is loaded through the class’s __autoload() function before getting the interfaces it implements.

class_implements
array class_implements(mixed class[, bool autoload_class])

If class is an object, returns an array containing the names of the interfaces implemented by class’s object class. If class is a string, returns an array containing the names of the interfaces implemented by the class named class. Returns false if class is neither an object nor a string, or if class is a string but no object class of that name exists. If autoload_class is set and is true, the class is loaded through the class’s __autoload() function before getting the interfaces it implements.

class_parents
array class_parents(mixed class[, bool autoload_class])

If class is an object, returns an array containing the names of the parents of class’s object class. If class is a string, returns an array containing the class names of the parents of the class named class. Returns false if class is neither an object nor a string, or if class is a string but no object class of that name exists. If autoload_class is set and is true, the class is loaded through the class’s __autoload() function before getting its parents.

clearstatcache
void clearstatcache([bool clear_realpath_cache[, string file]])

Clears the file status functions cache. The next call to any of the file status functions will retrieve the information from the disk. The clear_realpath_cache parameter allows for clearing the realpath cache. The file parameter allows for the clearing of the realpath and stat caches for a specific filename only, and it can be used only if clear_realpath_cache is true.

closedir
void closedir([int handle])

Closes the directory stream referenced by handle. See opendir() for more information on directory streams. If handle is not specified, the most recently opened directory stream is closed.

closelog
int closelog()

Closes the file descriptor used to write to the system logger after an openlog() call. Returns true if the change was successful and false if not.

compact
array compact(mixed variable1[, ... mixed variableN])

Creates an array by retrieving the values of the variables named in the parameters. If any of the parameters are arrays, the values of variables named in the arrays are also retrieved. The array returned is an associative array, with the keys being the arguments provided to the function and the values being the values of the named variables. This function is the opposite of extract().

connection_aborted
int connection_aborted()

Returns true (1) if the client disconnected (for example, clicked Stop in the browser) at any point before the function is called. Returns false (0) if the client is still connected.

connection_status
int connection_status()

Returns the status of the connection as a bitfield with three states: NORMAL (0), ABORTED (1), and TIMEOUT (2).

constant
mixed constant(string name)

Returns the value of the constant called name.

convert_cyr_string
string convert_cyr_string(string value, string from, string to)

Converts value from one Cyrillic set to another. The from and to parameters are single-character strings representing the set and have the following valid values:

k	koi8-r
w	Windows-1251
i	ISO 8859-5
a or d	x-cp866
m	x-mac-cyrillic
convert_uudecode
string convert_uudecode(string value)

Decodes the uuencoded string value and returns it.

convert_uuencode
string convert_uuencode(string value)

Encodes the string value using uuencode and returns it.

copy
int copy(string path, string destination[, resource context])

Copies the file at path to destination. If the operation succeeds, the function returns true; otherwise, it returns false. If the file at the destination exists, it will be replaced. The optional context parameter can make use of a valid context resource created with the stream_context_create() function.

cos
float cos(float value)

Returns the cosine of value in radians.

cosh
float cosh(float value)

Returns the hyperbolic cosine of value.

count
int count(mixed value[, int mode])

Returns the number of elements in the value; for arrays or objects, this is the number of elements; for any other value, this is 1. If the parameter is a variable and the variable is not set, 0 is returned. If mode is set and is COUNT_RECURSIVE, the number of elements is counted recursively, counting the number of values in arrays inside arrays.

count_chars
mixed count_chars(string string[, int mode])

Returns the number of occurrences of each byte value from 0 to 255 in string; mode determines the form of the result. The possible values of mode are:

0 (default)	Returns an associative array with each byte value as a key and the frequency of that byte value as the value
1	Same as above, except that only byte values with a nonzero frequency are listed
2	Same as above, except that only byte values with a frequency of zero are listed
3	Returns a string containing all byte values with a nonzero frequency
4	Returns a string containing all byte values with a frequency of zero
crc32
int crc32(string value)

Calculates and returns the cyclic redundancy checksum (CRC) for value.

create_function
string create_function(string arguments, string code)

Creates an anonymous function with the given arguments and code; returns a generated name for the function. Such anonymous functions (also called lambda functions) are useful for short-term callback functions, such as when using usort().

crypt
string crypt(string string[, string salt])

Encrypts string using the DES encryption algorithm seeded with the two-character salt value salt. If salt is not supplied, a random salt value is generated the first time crypt() is called in a script; this value is used on subsequent calls to crypt(). Returns the encrypted string.

current
mixed current(array array)

Returns the value of the element to which the internal pointer is set. The first time that current() is called, or when current() is called after reset, the pointer is set to the first element in the array.

date
string date(string format[, int timestamp])

Formats a time and date according to the format string provided in the first parameter. If the second parameter is not specified, the current time and date is used. The following characters are recognized in the format string:

a	“am” or “pm”
A	“AM” or “PM”
B	Swatch internet time
d	Day of the month as two digits, including a leading zero if necessary (e.g., “01” through “31”)
D	Name of the day of the week as a three-letter abbreviation (e.g., “Mon”)
F	Name of the month (e.g., “August”)
g	Hour in 12-hour format (e.g., “1” through “12”)
G	Hour in 24-hour format (e.g., “0” through “23”)
h	Hour in 12-hour format, including a leading zero if necessary; e.g., “01” through “12”
H	Hour in 24-hour format, including a leading zero if necessary (e.g., “00” through “23”)
i	Minutes, including a leading zero if necessary (e.g., “00” through “59”)
I	“1” if Daylight Saving Time; “0” otherwise
j	Day of the month (e.g., “1” through “31”)
l	Name of the day of the week (e.g., “Monday”)
L	“0” if the year is not a leap year; “1” if it is
m	Month, including a leading zero if necessary (e.g., “01” through “12”)
M	Name of the month as a three-letter abbreviation (e.g., “Aug”)
n	Month without leading zeros (e.g., “1” to “12”)
r	Date formatted according to RFC 822 (e.g., “Thu, 21 Jun 2001 21:27:19 +0600”)
s	Seconds, including a leading zero if necessary (e.g., “00” through “59”)
S	English ordinal suffix for the day of the month; either “st”, “nd”, or “th”
t	Number of days in the month, from “28” to “31”
T	Time zone setting of the machine running PHP (e.g., “MST”)
u	Seconds since the Unix epoch
w	Numeric day of the week, starting with “0” for Sunday
W	Numeric week of the year according to ISO 8601
Y	Year with four digits (e.g., “1998”)
y	Year with two digits (e.g., “98”)
z	Day of the year, from “0” through “365”
Z	Time zone offset in seconds, from “–43200” (far west of UTC) to “43200” (far east of UTC)
Any characters in the format string not matching one of the above will be kept in the resulting string as is. If a non-numeric value is provided for timestamp, then false is returned and a warning is issued.

date_default_timezone_get
string date_default_timezone_get()

Returns the current default time zone, set previously by the date_default_timezone_set() function or via the date.timezone option in the php.ini file. Returns "UTC" if neither is set.

date_default_timezone_set
string date_default_timezone_set(string timezone)

Sets the current default time zone.

date_parse
array date_parse(string time)

Converts an English description of a time and date into an array describing that time and date. Returns false if the value could not be converted into a valid date. The returned array contains the same values as returned from date_parse_from_format().

date_parse_from_format
array date_parse_from_format(string format, string time)

Parses time into an associative array representing a date. The string time is given in the format specified by format, using the same character codes as described in date(). The returned array contains the following entries:

year	Year
month	Month
day	Day of the month
hour	Hours
minute	Minutes
second	Seconds
fraction	Fractions of seconds
warning_count	Number of warnings that occurred during parsing
warnings	An array of warnings that occurred during parsing
error_count	Number of errors that occurred during parsing
errors	An array of errors that occurred during parsing
is_localtime	True if the time represents a time in the current default time zone
zone_type	The type of time zone zone represents
zone	The time zone the time is in
is_dst	True if the time represents a time in Daylight Saving Time
date_sun_info
array date_sun_info(int timestamp, float latitude, float longitude)

Returns information as an associative array about the times of sunrise and sunset, and the times twilight begins and ends, at a given latitude and longitude. The resulting array contains the following keys:

sunrise	The time sunrise occurs
sunset	The time sunset occurs
transit	The time the sun is at its zenith
civil_twilight_begin	The time civil twilight begins
civil_twilight_end	The time civil twilight ends
nautical_twilight_begin	The time nautical twilight begins
nautical_twilight_end	The time nautical twilight ends
astronomical_twilight_begin	The time astronomical twilight begins
astronomical_twilight_end	The time astronomical twilight ends
date_sunrise
mixed date_sunrise(int timestamp[, int format[, float latitude[, float longitude [, float zenith[, float gmt_offset]]]]])

Returns the time of the sunrise for the day in timestamp; false on failure. The format parameter determines the format the time is returned as (with a default of SUNFUNCS_RET_STRING), while the latitude, longitude, zenith, and gmt_offset parameters provide a specific location. They default to values given in the PHP configuration options (php.ini). Parameters include:

SUNFUNCS_RET_STRING	Returns the value as a string; for example, “06:14”
SUNFUNCS_RET_DOUBLE	Returns the value as a float; for example, 6.233
SUNFUNCS_RET_TIMESTAMP	Returns the value as a Unix epochal timestamp
date_sunset
mixed date_sunset(int timestamp[, int format[, float latitude[, float longitude [, float zenith[, float gmt_offset]]]]])

Returns the time of the sunset for the day in timestamp; false on failure. The format parameter determines the format the time is returned as (with a default of SUNFUNCS_RET_STRING), while the latitude, longitude, zenith, and gmt_offset parameters provide a specific location. They default to values given in the PHP configuration options (php.ini). Parameters include:

SUNFUNCS_RET_STRING	Returns the value as a string; for example, “19:02”
SUNFUNCS_RET_DOUBLE	Returns the value as a float; for example, 19.033
SUNFUNCS_RET_TIMESTAMP	Returns the value as a Unix epochal timestamp
debug_backtrace
array debug_backtrace([ int options [, int limit]])

Returns an array of associative arrays containing a backtrace of where PHP is currently executing. One element is included per function or file include, with the following elements:

function	If in a function, the function’s name as a string
line	The line number within the file where the current function or file include is located
file	The name of the file the element is in
class	If in an object instance or class method, the name of the class the element is in
object	If in an object, that object’s name
type	The current call type: :: if a static method; -> if a method; nothing if a function
args	If in a function, the arguments used to call that function; if in a file include, the include file’s name
Each function call or file include generates a new element in the array. The innermost function call or file include is the element with an index of 0; further elements are less deep function calls or file includes.

debug_print_backtrace
void debug_print_backtrace()

Prints the current debug backtrace (see debug_backtrace) to the client.

decbin
string decbin(int decimal)

Converts the provided decimal value to a binary representation of it. Up to a 32-bit number, or 2,147,483,647 decimal, can be converted.

dechex
string dechex(int decimal)

Converts decimal to a hexadecimal (base-16) representation of it. Up to a 32-bit number, or 2,147,483,647 decimal (0x7FFFFFFF hexadecimal), can be converted.

decoct
string decoct(int decimal)

Converts decimal to an octal (base-8) representation of it. Up to a 32-bit number, or 2,147,483,647 decimal (017777777777 octal), can be converted.

define
bool define(string name, mixed value[, int case_insensitive])

Defines a constant named name and sets its value to value. If case_insensitive is set and is true, the operation fails if a constant with the same name, compared case-insensitively, is previously defined. Otherwise, the check for existing constants is done case-sensitively. Returns true if the constant could be created, and false if a constant with the given name already exists.

define_syslog_variables
void define_syslog_variables()

Initializes all variables and constants used by the syslog functions openlog(), syslog(), and closelog(). This function should be called before using any of the syslog functions.

defined
bool defined(string name)

Returns true if a constant with the name name exists, and false if a constant with that name does not exist.

deflate_add
void deflate_init(resource context, string data[, int flush_mode])

Adds data to the deflate context context, and checks if the context should be flushed based on flush_mode, which is one of ZLIB_BLOCK, ZLIB_NO_FLUSH, ZLIB_PARTIAL_FLUSH, ZLIB_SYNC_FLUSH (the default), ZLIB_FULL_FLUSH, or ZLIB_FINISH. When adding most chunks of data, choose ZLIB_NO_FLUSH to maximize compression attempts. After the last chunk has been added, use ZLIB_FINISH to indicate the context is complete.

deflate_init
void deflate_init(int encoding[, array options])

Initializes and returns an incremental deflation context. This context can be used to incrementally deflate data using calls to deflate_add() using that context.

level	The compression range from –1 through 9
memory	The compression memory level from 1 through 9
window	The zlib window size from 8 through 15
strategy	The compression strategy to use; either ZLIB_FILTERED, ZLIB_HUFFMAN_ONLY, ZLIB_RLE, ZLIB_FIXED, or ZLIB_DEFAULT_STRATEGY (default)
dictionary	A string or array of strings of the compression preset dictionary
deg2rad
float deg2rad(float number)

Converts number from degrees to radians and returns the result.

dir
directory dir(string path[, resource context])

Returns an instance of the directory class initialized to the given path. You can use the read(), rewind(), and close() methods on the object as equivalent to the readdir(), rewinddir(), and closedir() procedural functions.

dirname
string dirname(string path)

Returns the directory component of path. This includes everything up to the filename portion (see basename) and doesn’t include the trailing path separator.

disk_free_space
float disk_free_space(string path)

Returns the number of bytes of free space available on the disk partition or filesystem at path.

disk_total_space
float disk_total_space(string path)

Returns the number of bytes of total space available (including both used and free) on the disk partition or filesystem at path.

each
array each(array &array)

Creates an array containing the keys and values of the element currently pointed at by the array’s internal pointer. The array contains four elements: elements with the keys 0 and key containing the key of the element, and elements with the keys 1 and value containing the value of the element.

If the internal pointer of the array points beyond the end of the array, each() returns false.

echo
void echo string string[, string string2[, string stringN ...]]

Outputs the given strings. echo is a language construct, and enclosing the parameters in parentheses is optional, unless multiple parameters are given—in which case, you cannot use parentheses.

empty
bool empty(mixed value)

Returns true if value is either 0 or not set, and false otherwise.

end
mixed end(array &array)

Advances the array’s internal pointer to the last element and returns the element’s value.

error_clear_last
array error_clear_last()

Clears the most recent error; it will no longer be returned by error_get_last().

error_get_last
array error_get_last()

Returns an associative array of information about the most recent error that occurred, or NULL if no errors have yet occurred while processing the current script. The following values are included in the array:

type	The type of error
message	Printable version of the error
file	The full path to the file where the error occurred
line	The line number within the file where the error occurred
error_log
bool error_log(string message, int type[, string destination[, string headers]])

Records an error message to the web server’s error log, to an email address, or to a file. The first parameter is the message to log. The type is one of the following:

0	message is sent to the PHP system log; the message is put into the file pointed at by the error_log configuration directive.
1	message is sent to the email address destination. If specified, headers provides optional headers to use when creating the message (see mail for more information on the optional headers).
3	Appends message to the file destination.
4	message is sent directly to the Server Application Programming Interface (SAPI) logging handler.
error_reporting
int error_reporting([int level])

Sets the level of errors reported by PHP to level and returns the current level; if level is omitted, the current level of error reporting is returned. The following values are available for the function:

E_ERROR	Fatal runtime errors (script execution halts)
E_WARNING	Runtime warnings
E_PARSE	Compile-time parse errors
E_NOTICE	Runtime notices
E_CORE_ERROR	Errors generated internally by PHP
E_CORE_WARNING	Warnings generated internally by PHP
E_COMPILE_ERROR	Errors generated internally by the Zend scripting engine
E_COMPILE_WARNING	Warnings generated internally by the Zend scripting engine
E_USER_ERROR	Runtime errors generated by a call to trigger_error()
E_USER_WARNING	Runtime warnings generated by a call to trigger_error()
E_STRICT	Direct PHP to suggest code changes to assist with forward compatibility
E_RECOVERABLE_ERROR	If a potentially fatal error has occurred, was caught, and properly handled, the code can continue execution
E_DEPRECATED	If enabled, warnings will be issued about deprecated code that will eventually not work properly
E_USER_DEPRECATED	If enabled, any warning message triggered by deprecated code can be user-generated with the trigger_error() function
E_ALL	All of the above options
Any number of these options can be ORed (bitwise OR, |) together, so that errors in each of the levels are reported. For example, the following code turns off user errors and warnings, performs some actions, and then restores the original level:

<$level = error_reporting();
 error_reporting($level & ~(E_USER_ERROR | E_USER_WARNING));
 // do some stuff
 error_reporting($level);>
escapeshellarg
string escapeshellarg(string argument)

Properly escapes argument so it can be used as a safe argument to a shell function. When directly passing user input (such as from forms) to a shell command, you should use this function to escape the data to ensure that the argument isn’t a security risk.

escapeshellcmd
string escapeshellcmd(string command)

Escapes any characters in command that could cause a shell command to run additional commands. When directly passing user input (such as from forms) to the exec() or system() functions, you should use this function to escape the data to ensure that the argument isn’t a security risk.

exec
string exec(string command[, array output[, int return]])

Executes command via the shell and returns the last line of output from the command’s result. If output is specified, it is filled with the lines returned by the command. If return is specified, it is set to the return status of the command.

If you want to have the results of the command output into the PHP page, use passthru().

exp
float exp(float number)

Returns e raised to the number power.

explode
array explode(string separator, string string[, int limit])

Returns an array of substrings created by splitting string wherever separator is found. If supplied, a maximum of limit substrings will be returned, with the last substring returned containing the remainder of the string. If separator is not found, returns the original string.

expm1
float expm1(float number)

Returns exp(number) – 1, computed such that the returned value is accurate even when number is near 0.

extension_loaded
bool extension_loaded(string name)

Returns true if the named extension is loaded, and false if it is not.

extract
int extract(array array[, int type[, string prefix]])

Sets the value of variables to the values of elements from an array. For each element in the array, the key is used to determine the variable name to set, and that variable is set to the value of the element.

The second argument, if given, takes one of the following values to determine behavior if the values in the array have the same name as variables that already exist in the local scope:

EXTR_OVERWRITE (default)	Overwrite the existing variable
EXTR_SKIP	Don’t overwrite the existing variable (ignore the value provided in the array)
EXTR_PREFIX_SAME	Prefix the variable name with the string given as the third argument
EXTR_PREFIX_ALL	Prefix all variable names with the string given as the third argument
EXTR_PREFIX_INVALID	Prefix any invalid or numeric variable names with the string given as the third argument
EXTR_IF_EXISTS	Replace variable only if it exists in the current symbol table
EXTR_PREFIX_IF_EXISTS	Create prefixed variable names only if the nonprefixed version of the same variable exists
EXTR_REFS	Extract variables as references
The function returns the number of successfully set variables.

fclose
bool fclose(int handle)

Closes the file referenced by handle; returns true if successful and false if not.

feof
bool feof(int handle)

Returns true if the marker for the file referenced by handle is at the end of the file (EOF) or if an error occurs. If the marker is not at EOF, returns false.

fflush
bool fflush(int handle)

Commits any changes to the file referenced by handle to disk, ensuring that the file contents are on disk and not just in a disk buffer. If the operation succeeds, the function returns true; otherwise, it returns false.

fgetc
string fgetc(int handle)

Returns the character at the marker for the file referenced by handle and moves the marker to the next character. If the marker is at the end of the file, the function returns false.

fgetcsv
array fgetcsv(resource handle[, int length[, string delimiter[, string enclosure [, string escape]]]])

Reads the next line from the file referenced by handle and parses the line as a comma-separated values (CSV) line. The longest line to read is given by length. If delimiter is supplied, it is used to delimit the values for the line instead of commas. If supplied, enclosure is a single character that is used to enclose values (by default, the double quote character, "). escape sets the escape character to use; the default is backslash \; only one character can be specified. For example, to read and display all lines from a file containing tab-separated values, use:

$fp = fopen("somefile.tab", "r");

while($line = fgetcsv($fp, 1024, "\t")) {
 print "<p>" . count($line) . "fields:</p>";
 print_r($line);
}
fclose($fp);
fgets
string fgets(resource handle [, int length])

Reads a string from the file referenced by handle; a string of no more than length characters is returned, but the read ends at length − 1 (for the end-of-line character) characters, at an end-of-line character, or at EOF. Returns false if any error occurs.

fgetss
string fgetss(resource handle [, int length[, string tags]])

Reads a string from the file referenced by handle; a string of no more than length characters is returned, but the read ends at length − 1 (for the end-of-line character) characters, at an end-of-line character, or at EOF. Any PHP and HTML tags in the string, except those listed in tags, are stripped before returning it. Returns false if any error occurs.

file
array file(string filename[, int flags [, resource context]])

Reads the file into an array. flags can be one or more of the following constants:

FILE_USE_INCLUDE_PATH	Search for the file in the include path as set in the php.ini file
FILE_IGNORE_NEW_LINES	Do not add a newline at the end of the array elements
FILE_SKIP_EMPTY_LINES	Skip any empty lines
file_exists
bool file_exists(string path)

Returns true if the file at path exists and false if not.

fileatime
int fileatime(string path)

Returns the last access time, as a Unix timestamp value, for the file path. Because of the cost involved in retrieving this information from the filesystem, this information is cached; you can clear the cache with clearstatcache().

filectime
int filectime(string path)

Returns the inode change time value for the file at path. Because of the cost involved in retrieving this information from the filesystem, this information is cached; you can clear the cache with clearstatcache().

file_get_contents
string file_get_contents(string path[, bool include [, resource context [, int offset [, int maxlen]]]])

Reads the file at path and returns its contents as a string, optionally starting at offset. If include is specified and is true, the include path is searched for the file. The length of the returned string can also be controlled with the maxlen parameter.

filegroup
int filegroup(string path)

Returns the group ID of the group owning the file path. Because of the cost involved in retrieving this information from the filesystem, this information is cached; you can clear the cache with clearstatcache().

fileinode
int fileinode(string path)

Returns the inode number of the file path, or false if an error occurs. This information is cached; see clearstatcache.

filemtime
int filemtime(string path)

Returns the last-modified time, as a Unix timestamp value, for the file path. This information is cached; you can clear the cache with clearstatcache().

fileowner
int fileowner(string path)

Returns the user ID of the owner of the file path, or false if an error occurs. This information is cached; you can clear the cache with clearstatcache().

fileperms
int fileperms(string path)

Returns the file permissions for the file path, or false if an error occurs. This information is cached; you can clear the cache with clearstatcache().

file_put_contents
int file_put_contents(string path, mixed string [, int flags[, resource context]])

Opens the file specified by path, writes string to the file, and then closes the file. Returns the number of bytes written to the file, or −1 on error. The flags argument is a bitfield with two possible values:

FILE_USE_INCLUDE_PATH	If specified, the include path is searched for the file and the file is written at the first location where it already exists
FILE_APPEND	If specified and if the file indicated by path already exists, string is appended to the existing contents of the file
LOCK_EX	Exclusively lock the file before writing to it
filesize
int filesize(string path)

Returns the size, in bytes, of the file path. If the file does not exist or any other error occurs, the function returns false. This information is cached; you can clear the cache with clearstatcache().

filetype
string filetype(string path)

Returns the type of file given in path. The possible types are:

Fifo	The file is a FIFO pipe
Char	The file is a text file
Dir	path is a directory
Block	A block reserved for use by the filesystem
Link	The file is a symbolic link
File	The file contains binary data
Socket	A socket interface
Unknown	The file’s type could not be determined
filter_has_var
bool filter_has_var(int context, string name)

Returns true if a value named name exists in the specified context, and false if it doesn’t. The context is one of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.

filter_id
int filter_id(string name)

Returns the ID for the filter identified by name, or false if no such filter exists.

filter_input
mixed filter_input(mixed var[, int filter_id[, mixed options]])

Performs the filter identified by ID filter_id on var in the given context and returns the result. The context is one of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV. If filter_id is not specified, the default filter is used. The options parameter can either be a bitfield of flags or an associative array of options appropriate to the filter. See Chapter 4 for more information on using filters.

filter_input_array
mixed filter_input_array(array variables[, mixed filters])

Performs a series of filters against variables in the associative array variables and returns the results as an associative array. The context is one of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.

The optional parameter is an associative array where each element’s key is a variable name, with the associated value defining the filter and options to use to filter that variable’s value. The definition is either the ID of the filter to use or an array containing one or more of the following elements:

filter	The ID of the filter to apply
flags	A bitfield of flags
options	An associative array of options specific to the filter
filter_list
array filter_list()

Returns an array of the name of each available filter; these names can be passed into filter_id() to obtain a filter ID for use in the other filtering functions.

filter_var
mixed filter_var(mixed var[, int filter_id[, mixed options]])

Performs the filter identified by ID filter_id on var and returns the result. If filter_id is not specified, the default filter is used. The options parameter can either be a bitfield of flags or an associative array of options appropriate to the filter. See Chapter 4 for more information on using filters.

filter_var_array
mixed filter_var_array(mixed var[, mixed options])

Performs a series of filters against variables in the specified context and returns the results as an associative array. The context is one of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.

The options parameter is an associative array where each element’s key is a variable name, with the associated value defining the filter and options to use to filter that variable’s value. The definition is either the ID of the filter to use or an array containing one or more of the following elements:

filter	The ID of the filter to apply
flags	A bitfield of flags
options	An associative array of options specific to the filter
floatval
float floatval(mixed value)

Returns the float value for value. If value is a nonscalar (object or array), 1 is returned.

flock
bool flock(resource handle, int operation[, int would_block])

Attempts to lock the file path of the file specified by handle. The operation is one of the following values:

LOCK_SH	Shared lock (reader)
LOCK_EX	Exclusive lock (writer)
LOCK_UN	Release a lock (either shared or exclusive)
LOCK_NB	Add to LOCK_SH or LOCK_EX to obtain a nonblocking lock
If specified, would_block is set to true if the operation would cause a block on the file. The function returns false if the lock could not be obtained, and true if the operation succeeded.

Because file locking is implemented at the process level on most systems, flock() cannot prevent two PHP scripts running in the same web server process from accessing a file at the same time.

floor
float floor(float number)

Returns the largest integer value less than or equal to number.

flush
void flush()

Sends the current output buffer to the client and empties the output buffer. See Chapter 15 for more information on using the output buffer.

fmod
float fmod(float x, float y)

Returns the floating-point modulo of the division of x by y.

fnmatch
bool fnmatch(string pattern, string string[, int flags])

Returns true if string matches the shell wildcard pattern given in pattern. See glob for the pattern-matching rules. The flags value is a bitwise OR of any of the following values:

FNM_NOESCAPE	Treat backslashes in pattern as backslashes, rather than as the start of an escape sequence
FNM_PATHNAME	Slash characters in string must be matched explicitly by slashes in pattern
FNM_PERIOD	A period at the beginning of the string, or before any slash if FNM_PATHNAME is also specified, must be explicitly matched by periods in pattern
FNM_CASEFOLD	Ignore case when matching string to pattern
fopen
resource fopen(string path, string mode[, bool include [, resource context]])

Opens the file specified by path and returns a file resource handle to the open file. If path begins with http://, an HTTP connection is opened and a file pointer to the start of the response is returned. If path begins with ftp://, an FTP connection is opened and a file pointer to the start of the file is returned; the remote server must support passive FTP.

If path is php://stdin, php://stdout, or php://stderr, a file pointer to the appropriate stream is returned.

The parameter mode specifies the permissions to open the file with. It must be one of the following:

r	Open the file for reading; file pointer will be at beginning of file.
r+	Open the file for reading and writing; file pointer will be at beginning of file.
w	Open the file for writing. If the file exists, it will be truncated to zero length; if the file doesn’t already exist, it will be created.
w+	Open the file for reading and writing. If the file exists, it will be truncated to zero length; if the file doesn’t already exist, it will be created. The file pointer starts at the beginning of the file.
a	Open the file for writing. If the file exists, the file pointer will be at the end of the file; if the file does not exist, it is created.
a+	Open the file for reading and writing. If the file exists, the file pointer will be at the end of the file; if the file does not exist, it is created.
x	Create and open file for writing only; place the file pointer at the beginning of the file.
x+	Create and open file for reading and writing.
c	Open the file for writing only. If the file does not exist, it is created. If it exists, it is not truncated (as is the case with w), nor does the call to this function fail (as is the case with x). The file pointer is positioned at the beginning of the file.
c+	Open the file for reading and writing.
If include is specified and is true, fopen() tries to locate the file in the current include path.

If any error occurs while attempting to open the file, false is returned.

forward_static_call
mixed forward_static_call(callable function[, mixed parameter1[, ... mixed parameterN]])

Calls the function named function in the current object’s context with the parameters provided. If function includes a class name, it uses late static binding to find the appropriate class for the method. Returns the value returned by the function.

forward_static_call_array
mixed forward_static_call_array(callable function, array parameters)

Calls the function named function in the current object’s context with the parameters in the array parameters. If function includes a class name, it uses late static binding to find the appropriate class for the method. Returns the value returned by the function.

fpassthru
int fpassthru(resource handle)
Outputs the file pointed to by handle and closes the file. The file is output from the current file pointer location to EOF. If any error occurs, false is returned; if the operation is successful, true is returned.

fprintf
int fprintf(resource handle, string format[, mixed value1[, ... valueN]])

Writes a string created by filling format with the given arguments to the stream resource handle. See printf() for more information on using this function.

fputcsv
int fputcsv(resource handle[, array fields[, string delimiter[, string enclosure]]])

Formats the items contained in fields in comma-separated values (CSV) format and writes the result to the file handle handle. If supplied, delimiter is a single character used to delimit the values for the line instead of commas. If supplied, enclosure is a single character that is used to enclose values (by default, the double quote character, "). Returns the length of the string written, or false if a failure occurred.

fread
string fread(int handle, int length)

Reads length bytes from the file referenced by handle and returns them as a string. If fewer than length bytes are available before EOF is reached, the bytes up to EOF are returned.

fscanf
mixed fscanf(resource handle, string format[, string name1[, ... string nameN]])

Reads data from the file referenced by handle and returns a value from it based on format. For more information on how to use this function, see sscanf.

If the optional name1 through nameN parameters are not given, the values scanned from the file are returned as an array; otherwise, they are put into the variables named by name1 through nameN.

fseek
int fseek(resource handle, int offset[, int from])

Moves the file pointer in handle to the byte offset. If from is specified, it determines how to move the file pointer. from must be one of the following values:

SEEK_SET	Sets the file pointer to the byte offset (the default)
SEEK_CUR	Sets the file pointer to the current location plus offset bytes
SEEK_END	Sets the file pointer to EOF minus offset bytes
This function returns 0 if the function was successful and −1 if the operation failed.

fsockopen
resource fsockopen(string host, int port[, int error[, string message[, float timeout]]])

Opens a TCP or UDP connection to a remote host on a specific port. By default, TCP is used; to connect via UDP, host must begin with the protocol udp://. If specified, timeout indicates the length of time in seconds to wait before timing out.

If the connection is successful, a virtual file pointer is returned, which can be used with functions such as fgets() and fputs(). If the connection fails, false is returned. If error and message are supplied, they are set to the error number and error string, respectively.

fstat
array fstat(resource handle)

Returns an associative array of information about the file referenced by handle. The following values (given here with their numeric and key indices) are included in the array:

dev (0)	The device on which the file resides
ino (1)	The file’s inode
mode (2)	The mode with which the file was opened
nlink (3)	The number of links to this file
uid (4)	The user ID of the file’s owner
gid (5)	The group ID of the file’s owner
rdev (6)	The device type (if the file is on an inode device)
size (7)	The file’s size (in bytes)
atime (8)	The time of last access (in Unix timestamp format)
mtime (9)	The time of last modification (in Unix timestamp format)
ctime (10)	The time the file was created (in Unix timestamp format)
blksize (11)	The blocksize (in bytes) for the filesystem
blocks (12)	The number of blocks allocated to the file
ftell
int ftell(resource handle)

Returns the byte offset to which the file referenced by handle is set. If an error occurs, returns false.

ftruncate
bool ftruncate(resource handle, int length)

Truncates the file referenced by handle to length bytes. Returns true if the operation is successful and false if not.

func_get_arg
mixed func_get_arg(int index)

Returns the index element in the function argument array. If called outside a function, or if index is greater than the number of arguments in the argument array, func_get_arg() generates a warning and returns false.

func_get_args
array func_get_args()

Returns the array of arguments given to the function as an indexed array. If called outside a function, func_get_args() returns false and generates a warning.

func_num_args
int func_num_args()

Returns the number of arguments passed to the current user-defined function. If called outside a function, func_num_args() returns false and generates a warning.

function_exists
bool function_exists(string function)

Returns true if a function with function has been defined (both user-defined and built-in functions are checked), and false otherwise. The comparison to check for a matching function is case-insensitive.

fwrite
int fwrite(resource handle, string string[, int length])

Writes string to the file referenced by handle. The file must be open with write privileges. If length is given, only that many bytes of the string will be written. Returns the number of bytes written, or −1 on error.

gc_collect_cycles
int gc_collect_cycles()

Performs a garbage collection cycle and returns the number of references that were freed. Does nothing if garbage collection is not currently enabled.

gc_disable
void gc_disable()

Disables the garbage collector. If the garbage collector was on, performs a collection prior to disabling it.

gc_enable
void gc_enable()

Enables the garbage collector; typically, only very long-running scripts can benefit from the garbage collector.

gc_enabled
bool gc_enabled()

Returns true if the garbage collector is currently enabled, and false if it’s disabled.

get_browser
mixed get_browser([string name[, bool return_array]])

Returns an object containing information about the user’s current browser, as found in $HTTP_USER_AGENT, or the browser identified by the user agent name. The information is gleaned from the browscap.ini file. The version of the browser and various capabilities of the browser—such as whether or not the browser supports frames, cookies, and so on—are returned in the object. If return_array is true, an array will be returned rather than an object.

get_called_class
string get_called_class()

Returns the name of the class that a static method was called on via late static binding, or false if called outside a class static method.

get_cfg_var
string get_cfg_var(string name)

Returns the value of the PHP configuration variable name. If name does not exist, get_cfg_var() returns false. Only those configuration variables set in a configuration file, as returned by cfg_file_path(), are returned by this function; compile-time settings and Apache configuration file variables are not returned.

get_class
string get_class(object object)

Returns the name of the class of which the given object is an instance. The class name is returned as a lowercase string. If object is not an object, then false is returned.

get_class_methods
array get_class_methods(mixed class)

If the parameter is a string, returns an array containing the names of each method defined for the specified class. If the parameter is an object, this function returns the methods defined in the class of which the object is an instance.

get_class_vars
array get_class_vars(string class)

Returns an associative array of default properties for the given class. For each property, an element with a key of the property name and a value of the default value is added to the array. Properties that do not have default values are not returned in the array.

get_current_user
string get_current_user()

Returns the name of the user under whose privileges the current PHP script is executing.

get_declared_classes
array get_declared_classes()

Returns an array containing the name of each defined class. This includes any classes defined in extensions currently loaded in PHP.

get_declared_interfaces
array get_declared_interfaces()

Returns an array containing the name of each declared interface. This includes any interfaces declared in extensions currently loaded in PHP and built-in interfaces.

get_declared_traits
array get_declared_traits()

Returns an array containing the name of each defined trait. This includes any traits defined in extensions currently loaded in PHP.

get_defined_constants
array get_defined_constants([bool categories])

Returns an associative array of all constants defined by extensions and the define() function and their values. If categories is set and is true, the associative array contains subarrays, one for each category of constant.

get_defined_functions
array get_defined_functions()

Returns an array containing the name of each defined function. The returned array is an associative array with two keys, internal and user. The value of the first key is an array containing the names of all internal PHP functions; the value of the second key is an array containing the names of all user-defined functions.

get_defined_vars
array get_defined_vars()

Returns an array of all variables defined in the environment, server, global, and local scopes.

get_extension_funcs
array get_extension_funcs(string name)

Returns an array of functions provided by the extension specified by name.

get_headers
array get_headers(string url[, int format])

Returns an array of headers that are sent by the remote server for the page given in url. If format is 0 or not set, the headers are returned in a simple array, with each entry in the array corresponding to a single header. If format is set and is 1, an associative array is returned with keys and values corresponding to the header fields.

get_html_translation_table
array get_html_translation_table([int which[, int style[, string encoding]]])

Returns the translation table used by either htmlspecialchars() or htmlentities(). If which is HTML_ENTITIES, the table used by htmlentities() is returned; if which is HTML_SPECIALCHARS, the table used by htmlspecialchars() is returned. Optionally, you can specify which quotes style you want returned; the possible values are the same as those in the translation functions:

ENT_COMPAT (default)	Converts double quotes, but not single quotes
ENT_NOQUOTES	Does not convert either double quotes or single quotes
ENT_QUOTES	Converts both single and double quotes
ENT_HTML401	Table for HTML 4.01 entities
ENT_XML1	Table for XML 1 entities
ENT_XHTML	Table for XHTML entities
ENT_HTML5	Table for HTML 5 entities
The encoding optional parameter has the following possible selections:

ISO-8859-1	Western European, Latin-1.
ISO-8859-5	Cyrillic charset (Latin/Cyrillic), rarely used.
ISO-8859-15	Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1.
UTF-8	ASCII compatible multibyte 8-bit Unicode.
cp866	DOS-specific Cyrillic charset.
cp1251	Windows-specific Cyrillic charset.
cp1252	Windows-specific charset for Western European.
KOI8-R	Russian.
BIG5	Traditional Chinese, mainly used in Taiwan.
GB2312	Simplified Chinese, national standard character set.
BIG5-HKSCS	Big5 with Hong Kong extensions, Traditional Chinese.
Shift_JIS	Japanese.
EUC-JP	Japanese.
MacRoman	Charset that was used by macOS.
""	An empty string activates detection from script encoding (Zend multibyte), default_charset, and current locale, in this order. Not recommended.
get_included_files
array get_included_files()

Returns an array of the files included into the current script by include(), include_once(), require(), and require_once().

get_include_path
string get_include_path()

Returns the value of the include path configuration option, giving you a list of include path locations. If you want to split the returned value into individual entries, be sure to split on the PATH_SEPARATOR constant, which is set separately for Unix and Windows compiles:

$paths = split(PATH_SEPARATOR, get_include_path());
get_loaded_extensions
array get_loaded_extensions([ bool zend_extensions])

Returns an array containing the names of every extension compiled and loaded into PHP. If the zend_extensions option is true, only return the Zend extensions; it defaults to false.

get_meta_tags
array get_meta_tags(string path[, int include])

Parses the file path and extracts any HTML meta tags it locates. Returns an associative array, the keys of which are name attributes for the meta tags, and the values of which are the appropriate values for the tags. The keys are in lowercase regardless of the case of the original attributes. If include is specified and true, the function searches for path in the include path.

getmygid
int getmygid()

Returns the group ID for the PHP process executing the current script. If the group ID cannot be determined, false is returned.

getmyuid
int getmyuid()

Returns the user ID for the PHP process executing the current script. If the user ID cannot be determined, false is returned.

get_object_vars
array get_object_vars(object object)

Returns an associative array of the properties for the given object. For each property, an element with a key of the property name and a value of the current value is added to the array. Properties that do not have current values are not returned in the array, even if they are defined in the class.

get_parent_class
string get_parent_class(mixed object)

Returns the name of the parent class for the given object. If the object does not inherit from another class, returns an empty string.

get_resource_type
string get_resource_type(resource handle)

Returns a string representing the type of the specified resource handle. If handle is not a valid resource, the function generates an error and returns false. The kinds of resources available are dependent on the extensions loaded, but include file, mysql link, and so on.

getcwd
string getcwd()

Returns the path of the PHP process’s current working directory.

getdate
array getdate([int timestamp])

Returns an associative array containing values for various components for the given timestamp time and date. If no timestamp is given, the current date and time is used. A variation of the date() function. The array contains the following keys and values:

seconds	Seconds
minutes	Minutes
hours	Hours
mday	Day of the month
wday	Numeric day of the week (Sunday is 0)
mon	Month
year	Year
yday	Day of the year
weekday	Name of the day of the week (Sunday through Saturday)
month	Name of the month (January through December)
getenv
string getenv(string name)

Returns the value of the environment variable name. If name does not exist, getenv() returns false.

gethostbyaddr
string gethostbyaddr(string address)

Returns the hostname of the machine with the IP address address. If no such address can be found, or if address doesn’t resolve to a hostname, address is returned.

gethostbyname
string gethostbyname(string host)

Returns the IP address for host. If no such host exists, host is returned.

gethostbynamel
array gethostbynamel(string host)

Returns an array of IP addresses for host. If no such host exists, returns false.

gethostname
string gethostname()

Returns the hostname of the machine running the current script.

getlastmod
int getlastmod()

Returns the Unix timestamp value for the last modification date of the file containing the current script. If an error occurs while retrieving the information, returns false.

getmxrr
bool getmxrr(string host, array &hosts[, array &weights])

Searches DNS for all Mail Exchanger (MX) records for host. The results are put into the array hosts. If given, the weights for each MX record are put into weights. Returns true if any records are found and false if none are found.

getmyinode
int getmyinode()

Returns the inode value of the file containing the current script. If an error occurs, returns false.

getmypid
int getmypid()

Returns the process ID for the PHP process executing the current script. When PHP runs as a server module, any number of scripts may share the same process ID, so it is not necessarily a unique number.

getopt
array getopt(string short_options[, array long_options])

Parses the command-line arguments list used to invoke the current script and returns an associative array of optional name/value pairs. The short_options and long_options parameters define the command-line arguments to parse.

The short_options parameter is a single string, with each character representing a single argument passed into the script via a single hyphen. For example, the short options string "ar" matches the command-line arguments -a -r. Any character followed by a single colon : requires a value to match, while any character followed by two colons :: optionally includes a value to match. For example, "a:r::x" would match the command-line arguments -aTest -r -x but not -a -r -x.

The long_options parameter is an array of strings, with each element representing a single argument passed into the script via a double hyphen. For example, the element "verbose" matches the command-line argument --verbose. All parameters specified in the long_options parameter optionally match values in the command line separated from the option name with an equals sign. For example, "verbose" will match both --verbose and --verbose=1.

getprotobyname
int getprotobyname(string name)

Returns the protocol number associated with name in /etc/protocols.

getprotobynumber
string getprotobynumber(int protocol)

Returns the protocol name associated with protocol in /etc/protocols.

getrandmax
int getrandmax()

Returns the largest value that can be returned by rand().

getrusage
array getrusage([int who])

Returns an associative array of information describing the resources being used by the process running the current script. If who is specified and is equal to 1, information about the process’s children is returned. A list of the keys and descriptions of the values can be found under the getrusage(2) Unix command.

getservbyname
int getservbyname(string service, string protocol)

Returns the port associated with service in /etc/services. protocol must be either TCP or UDP.

getservbyport
string getservbyport(int port, string protocol)

Returns the service name associated with port and protocol in /etc/services. protocol must be either TCP or UDP.

gettimeofday
mixed gettimeofday([ bool return_float])

Returns an associative array containing information about the current time, as obtained through gettimeofday(2). When return_float is set to true, a float is returned rather than an array.

The array contains the following keys and values:

sec	The current number of seconds since the Unix epoch
usec	The current number of microseconds to add to the number of seconds
minuteswest	The number of minutes west of Greenwich the current time zone is
dsttime	The type of Daylight Saving Time correction to apply (during the appropriate time of year, a positive number if the time zone observes Daylight Saving Time)
gettype
string gettype(mixed value)

Returns a string description of the type of value. The possible values for value are "boolean", "integer", "float", "string", "array", "object", "resource", "NULL", and "unknown type".

glob
globarray(string pattern[, int flags])

Returns a list of filenames matching the shell wildcard pattern given in pattern. The following characters and sequences make matches:

*	Matches any number of any character (equivalent to the regex pattern .*)
?	Matches any one character (equivalent to the regex pattern .)
For example, to process every JPEG file in a particular directory, you might write:

foreach(glob("/tmp/images/*.jpg") as $filename) {
 // do something with $filename
}
The flags value is a bitwise OR of any of the following values:

GLOB_MARK	Adds a slash to each item returned
GLOB_NOSORT	Returns files in the same order as found in the directory itself. If this is not specified, the names are sorted by ASCII value
GLOB_NOCHECK	If no files matching pattern are found, pattern is returned
GLOB_NOESCAPE	Treat backslashes in pattern as backslashes, rather than as the start of an escape sequence
GLOB_BRACE	In addition to the normal matches, strings in the form {foo, bar, baz} match either "foo", "bar", or "baz"
GLOB_ONLYDIR	Returns only directories matching pattern
GLOB_ERR	Stop on read errors
gmdate
string gmdate(string format[, int timestamp])

Returns a formatted string for a timestamp date and time. Identical to date(), except that it always uses Greenwich Mean Time (GMT) rather than the time zone specified on the local machine.

gmmktime
int gmmktime(int hour, int minutes, int seconds, int month, int day, int year, int is_dst)

Returns a timestamp date and time value from the provided set of values. Identical to mktime(), except that the values represent a GMT time and date rather than one in the local time zone.

gmstrftime
string gmstrftime(string format[, int timestamp])

Formats a GMT timestamp. See strftime for more information on how to use this function.

hash
string hash(string algorithm, string data [, bool output])

Generates a hash value on the provided data based on the given algorithm. When output is set to true, defaults to false; the returned hash value is raw binary data. Algorithm values can be md5, sha1, sha256, and so on. See hash_algos for more algorithm information.

hash_algos
array hash_algos(void)

Returns a numerically indexed array of all the supported hash algorithms.

hash_file
string hash_file(string algorithm, string filename [, bool output])

Generates a hash value string on the contents of filename (URL for location of the file) based on the given algorithm. When output is set to true, defaults to false; the returned hash value is raw binary data. Algorithm values can be md5, sha1, sha256, and so on.

header
void header(string header[, bool replace [, int http_response_code]])

Sends header as a raw HTTP header string; must be called before any output is generated (including blank lines—a common mistake). If the header is a Location header, PHP also generates the appropriate REDIRECT status code. If replace is specified and false, the header does not replace a header of the same name; otherwise, the header replaces any header of the same name.

header_remove
void header_remove([string header])

If header is specified, removes the HTTP header with named header from the current response. If header is not specified, or is an empty string, removes all headers generated by the header() function from the current response. Note that the headers cannot be removed if they have already been sent to the client.

headers_list
array headers_list()

Returns an array of the HTTP response headers that have been prepared for sending (or have been sent) to the client.

headers_sent
bool headers_sent([ string &file [, int &line]])

Returns true if the HTTP headers have already been sent. If they have not yet been sent, the function returns false. If file and line options are provided, the filename and the line number where the output began are placed in file and line variables.

hebrev
string hebrev(string string[, int size])

Converts the logical Hebrew text string to visual Hebrew text. If the second parameter is specified, each line will contain no more than size characters; the function attempts to avoid breaking words.

hex2bin
string hex2bin(string hex)

Converts hex to its binary value.

hexdec
number hexdec(string hex)

Converts hex to its decimal value. Up to a 32-bit number, or 2,147,483,647 decimal (0x7FFFFFFF hexadecimal), can be converted.

highlight_file
mixed highlight_file(string filename [, bool return])

Prints a syntax-colored version of the PHP source file filename using PHP’s built-in syntax highlighter. Returns true if filename exists and is a PHP source file; otherwise, returns false. If return is true, the highlighted code is returned as a string rather than being sent to the output device.

highlight_string
mixed highlight_string(string source [, bool return])

Prints a syntax-colored version of the string source using PHP’s built-in syntax highlighter. Returns true if successful; otherwise, returns false. If return is true, then the highlighted code is returned as a string rather than being sent to the output device.

hrtime
mixed hrtime([bool get_as_number])

Returns the system’s high-resolution time as an array, counted from an arbitrary point in time. The delivered timestamp is monotonic and cannot be adjusted. get_as_number returns as an array (false) or a number (true); defaults to false.

htmlentities
string htmlentities(string string[, int style[, string encoding [, bool double_encode]]])

Converts all characters in string that have special meaning in HTML and returns the resulting string. All entities defined in the HTML standard are converted. If supplied, style determines the manner in which quotes are translated. The possible values for style are:

ENT_COMPAT (default)	Converts double quotes, but not single quotes
ENT_NOQUOTES	Does not convert either double quotes or single quotes
ENT_QUOTES	Converts both single and double quotes
ENT_SUBSTITUTE	Replace invalid code unit sequences with a Unicode Replacement Character
ENT_DISALLOWED	Replace invalid code points for the given document type with a Unicode Replacement Character
ENT_HTML401	Handle code as HTML 4.01
ENT_XML1	Handle code as XML 1
ENT_XHTML	Handle code as XHTML
ENT_HTML5	Handle code as HTML 5
If supplied, encoding determines the final encoding for the characters. The possible values for encoding are:

ISO-8859-1	Western European, Latin-1
ISO-8859-5	Cyrillic charset (Latin/Cyrillic), rarely used
ISO-8859-15	Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1.
UTF-8	ASCII-compatible multi-byte 8-bit Unicode
cp866	DOS-specific Cyrillic charset
cp1251	Windows-specific Cyrillic charset
cp1252	Windows-specific charset for Western European
KOI8-R	Russian
BIG5	Traditional Chinese, mainly used in Taiwan
GB2312	Simplified Chinese, national standard character set
BIG5-HKSCS	Big5 with Hong Kong extensions, Traditional Chinese
Shift_JIS	Japanese
EUC-JP	Japanese
MacRoman	Charset that was used by Mac OS
""	An empty string activates detection from script encoding (Zend multibyte), default_charset, and current locale, in this order. Not recommended.
html_entity_decode
string html_entity_decode(string string[, int style[, string encoding]])

Converts all HTML entities in string to the equivalent character. All entities defined in the HTML standard are converted. If supplied, style determines the manner in which quotes are translated. The possible values for style are the same as those for htmlentities.

If supplied, encoding determines the final encoding for the characters. The possible values for encoding are the same as those for htmlentities.

htmlspecialchars
string htmlspecialchars(string string[, int style[, string encoding[, bool double_encode]]])

Converts characters in string that have special meaning in HTML and returns the resulting string. A subset of all HTML entities covering the most common characters is used to perform the translation. If supplied, style determines the manner in which quotes are translated. The characters translated are:

Ampersand (&) becomes &amp;

Double quotes (") become &quot;

Single quote (') becomes &#039;

Less than sign (<) becomes &lt;

Greater than sign (>) becomes &gt;

The possible values for style are the same as those for htmlentities. If supplied, encoding determines the final encoding for the characters. The possible values for encoding are the same as those for htmlentities. When double_encode is turned off, PHP will not encode existing htmlentities.

htmlspecialchars_decode
string htmlspecialchars_decode(string string[, int style])

Converts HTML entities in string to characters. A subset of all HTML entities covering the most common characters is used to perform the translation. If supplied, style determines the manner in which quotes are translated. See htmlentities() for the possible values for style. The characters translated are those found in htmlspecialchars().

http_build_query
string http_build_query(mixed values[, string prefix [, string arg_separator [, int enc_type]]])

Returns a URL-encoded query string from values. The array values can be either numerically indexed or associative (or a combination). Because strictly numeric names may be illegal in some languages interpreting the query string on the other side (PHP, for example), if you use numeric indices in values, you should also provide prefix. The value of prefix is prepended to all numeric names in the resulting query string. The arg_separator allows for assigning a customized delimiter and the enc_type option allows for selecting different encoding types.

hypot
float hypot(float x, float y)

Calculates and returns the length of the hypotenuse of a right-angle triangle whose other sides have lengths x and y.

idate
int idate(string format[, int timestamp])

Formats a time and date as an integer according to the format string provided in the first parameter. If the second parameter is not specified, the current time and date is used. The following characters are recognized in the format string:

B	Swatch internet time
d	Day of the month
h	Hour in 12-hour format
H	Hour in 24-hour format
i	Minutes
I	1 if Daylight Saving Time; 0 otherwise
j	Day of the month (e.g., 1 through 31)
L	0 if the year is not a leap year; 1 if it is
m	Month (1 through 12)
s	Seconds
t	Number of days in the month, from 28 to 31
U	Seconds since the Unix epoch
w	Numeric day of the week, starting with 0 for Sunday
W	Numeric week of the year according to ISO 8601
Y	Year with four digits (e.g., 1998)
y	Year with one or two digits (e.g., 98)
z	Day of the year, from 1 through 365
Z	Time zone offset in seconds, from −43200 (far west of UTC) to 43200 (far east of UTC)
Any characters in the format string not matching one of the above are ignored. Although the character strings used in idate are similar to those in date, because idate returns an integer, in places where date would return a two-digit number with leading zero, the leading zero is not preserved; for example, date('y'); will return 05 for a timestamp in 2005, while idate('y'); will return 5.

ignore_user_abort
int ignore_user_abort([string ignore])

Sets whether the client disconnecting from the script should stop processing of the PHP script. If ignore is true, the script will continue processing, even after a client disconnect. Returns the current value; if ignore is not given, the current value is returned without a new value being set.

implode
string implode(string separator, array strings)

Returns a string created by joining every element in strings with separator.

inet_ntop
string inet_ntop(string address)

Unpacks the packed IPv4 or IPv6 IP address address and returns it as a human-readable string.

inet_pton
string inet_pton(string address)

Packs the human-readable IP address address into a 32- or 128-bit value and returns it.

in_array
bool in_array(mixed value, array array[, bool strict])

Returns true if the given value exists in the array. If the third argument is provided and is true, the function will return true only if the element exists in the array and has the same type as the provided value (that is, "1.23" in the array will not match 1.23 as the argument). If the argument is not found in the array, the function returns false.

ini_get
string ini_get(string variable)

Returns the value for the configuration option variable. If variable does not exist, returns false.

ini_get_all
array ini_get_all([string extension [, bool details]])

Returns all configuration options as an associative array. If a valid extension is specified then only values pertaining to that named extension are returned. If details is true (default), then detail settings are retrieved. Each value returned in the array is an associative array with three keys:

global_value	The global value for the configuration option, as set in php.ini
local_value	The local override for the configuration option, as set through ini_set(), for example
access	A bitmask with the levels at which the value can be set (see ini_set for more information on access levels)
ini_restore
void ini_restore(string variable)

Restores the value for the configuration option variable. This is done automatically when a script completes execution for all configuration options set using ini_set() during the script.

ini_set
string ini_set(string variable, string value)

Sets the configuration option variable to value. Returns the previous value if successful, or false if not. The new value is kept for the duration of the current script and is restored after the script ends.

intdiv
int intdiv (int dividend, int vdivisor)

Returns the quotient of the division of dividend by divisor. The quotient is returned as an integer.

interface_exists
bool interface_exists(string name [, bool autoload_interface])

Returns true if an interface named name has been defined and false otherwise. By default, the function will call __autoload() on the interface; if autoload_interface is set and is false, __autoload() will not be called.

intval
int intval(mixed value[, int base])

Returns the integer value for value using the optional base base (if unspecified, base-10 is used). If value is a nonscalar value (object or array), the function returns 0.

ip2long
int ip2long(string address)

Converts a dotted (standard format) IP address to an IPv4 address.

is_a
bool is_a(object object, string class [, bool allow_string])

Returns true if object is of the class class, or if its class has class as one of its parents; otherwise, returns false. If allow_string is false, then string class name as object is not allowed.

is_array
bool is_array(mixed value)

Returns true if value is an array; otherwise, returns false.

is_bool
bool is_bool(mixed value)

Returns true if value is a boolean; otherwise, returns false.

is_callable
int is_callable(callable callback[, int lazy[, string name]])

Returns true if callback is a valid callback, false otherwise. To be valid, callback must either be the name of a function or an array containing two values—an object and the name of a method on that object. If lazy is given and is true, the actual existence of the function in the first form, or that the first element in callback is an object with a method named the second element, is not checked. The arguments merely have to have the correct kind of values to qualify as true. If supplied, the final argument is filled with the callable name for the function—though in the case of the callback being a method on an object, the resulting name in name is not actually usable to call the function directly.

is_countable
bool is_countable(mixed variable)

Verify that the contents of variable is an array or an object implementing Countable.

is_dir
bool is_dir(string path)

Returns true if path exists and is a directory; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

is_executable
bool is_executable(string path)

Returns true if path exists and is executable; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

is_file
bool is_file(string path)

Returns true if path exists and is a file; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

is_finite
bool is_finite(float value)

Returns true if value is not positive or negative infinity, and false otherwise.

is_float
bool is_float(mixed value)

Returns true if value is a float; otherwise, returns false.

is_infinite
bool is_infinite(float value)

Returns true if value is positive or negative infinity, and false otherwise.

is_int
bool is_int(mixed value)

Returns true if value is an integer; otherwise, returns false.

is_iterable
bool is_iterable(mixed value)

Returns true if value is an iterable pseudotype, an array, or a traversable object; otherwise, returns false.

is_link
bool is_link(string path)

Returns true if path exists and is a symbolic link file; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

is_nan
bool is_nan(float value)

Returns true if value is a “not a number” value, or false if value is a number.

is_null
bool is_null(mixed value)

Returns true if value is null (that is, the keyword NULL); otherwise, returns false.

is_numeric
bool is_numeric(mixed value)

Returns true if value is an integer, a floating-point value, or a string containing a number; otherwise, returns false.

is_object
bool is_object(mixed value)

Returns true if value is an object; otherwise, returns false.

is_readable
bool is_readable(string path)

Returns true if path exists and is readable; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

is_resource
bool is_resource(mixed value)

Returns true if value is a resource; otherwise, returns false.

is_scalar
bool is_scalar(mixed value)

Returns true if value is a scalar value—an integer, boolean, floating-point value, resource, or string. If value is not a scalar value, the function returns false.

is_string
bool is_string(mixed value)

Returns true if value is a string; otherwise, returns false.

is_subclass_of
bool is_subclass_of(object object, string class [, bool allow_string])

Returns true if object is an instance of the class class or an instance of a subclass of class. If not, the function returns false. If the allow_string parameter is set to false, class “as object” is not allowed.

is_uploaded_file
bool is_uploaded_file(string path)

Returns true if path exists and was uploaded to the web server using the file element in a web page form; otherwise, returns false. See Chapter 8 for more information on using uploaded files.

is_writable
bool is_writable(string path)

Returns true if path exists and is a directory; otherwise, returns false. This information is cached; you can clear the cache with clearstatcache().

isset
bool isset(mixed value1)[, ... mixed valueN])

Returns true if value, a variable, has been set; if the variable has never been set or has been unset(), the function returns false. If multiple values are provided, then isset will return true only if they are all set.

json_decode
mixed json_decode(string json[, bool assoc [, int depth [, int options]]])

Takes a JSON-encoded string, json, and returns it as a converted PHP variable. If the JSON cannot be decoded, then NULL is returned. When assoc is true, objects will be converted into associative arrays. depth is user-controlled recursion level. options controls how some of the provided data in the string can be alternatively returned.

json_encode
mixed json_encode(mixed value [, int options [, int depth]])

Returns a string containing the JSON representation of value. options controls how some of the provided data in the string can be alternatively returned. If depth is used, it must be greater than zero.

key
mixed key(array &array)

Returns the key for the element currently pointed to by the internal array pointer.

krsort
int krsort(array array[, int flags])

Sorts an array by key in reverse order, maintaining the keys for the array values. The optional second parameter contains additional sorting flags. See Chapter 5 and sort for more information on using this function.

ksort
int ksort(array array[, int flags])

Sorts an array by key, maintaining the keys for the array values. The optional second parameter contains additional sorting flags. See Chapter 5 and sort for more information on using this function.

lcfirst
string lcfirst(string string)

Returns string with the first character, if alphabetic, converted to lowercase. The table used for converting characters is locale-specific.

lcg_value
float lcg_value()

Returns a pseudorandom float number between 0 and 1, inclusive, using a linear congruential number generator.

lchgrp
bool lchgrp(string path, mixed group)

Changes the group for the symlink path to group; PHP must have appropriate privileges for this function to work. Returns true if the change was successful and false if not.

lchown
bool lchown(string path, mixed user)

Changes ownership for the symlink path to the user named user. PHP must have appropriate privileges (generally, root) for the function to operate. Returns true if the change was successful and false if not.

levenshtein
int levenshtein(string one, string two[, int insert, int replace,int delete]) int levenshtein(string one, string two[, mixed callback])

Calculates the Levenshtein distance between two strings. This is the number of characters you have to replace, insert, or delete to transform one into two. By default, replacements, inserts, and deletes have the same cost, but you can specify different costs with insert, replace, and delete. In the second form, just the total cost of inserts, replaces, and deletes are returned, not broken down.

link
bool link(string path, string new)

Creates a hard link to path at the path new. Returns true if the link was successfully created and false if not.

linkinfo
int linkinfo(string path)

Returns true if path is a link and if the file referenced by path exists. Returns false if path is not a link, if the file referenced by it does not exist, or if an error occurs.

list
array list(mixed value1[, ... valueN])

Assigns a set of variables from elements in an array. For example:

list($first, $second) = array(1, 2); // $first = 1, $second = 2
NOTE
list is actually a language construct.

localeconv
array localeconv()

Returns an associative array of information about the current locale’s numeric and monetary formatting. The array contains the following elements:

decimal_point	Decimal-point character
thousands_sep	Separator character for thousands
grouping	Array of numeric groupings; indicates where the number should be separated using the thousands separator character
int_curr_symbol	International currency symbol (e.g., USD)
currency_symbol	Local currency symbol (e.g., $)
mon_decimal_point	Decimal-point character for monetary values
mon_thousands_sep	Separator character for thousands in monetary values
positive_sign	Sign for positive values
negative_sign	Sign for negative values
int_frac_digits	International fractional digits
frac_digits	Local fractional digits
p_cs_precedes	true if the local currency symbol precedes a positive value; false if it follows the value
p_sep_by_space	true if a space separates the local currency symbol from a positive value
p_sign_posn	0 if parentheses surround the value and currency symbol for positive values, 1 if the sign precedes the currency symbol and value, 2 if the sign follows the currency symbol and value, 3 if the sign precedes the currency symbol, and 4 if the sign follows the currency symbol
n_cs_precedes	true if the local currency symbol precedes a negative value; false if it follows the value
n_sep_by_space	true if a space separates the local currency symbol from a negative value
n_sign_posn	0 if parentheses surround the value and currency symbol for negative values, 1 if the sign precedes the currency symbol and value, 2 if the sign follows the currency symbol and value, 3 if the sign precedes the currency symbol, and 4 if the sign follows the currency symbol
localtime
array localtime([int timestamp[, bool associative]])

Returns an array of values as given by the C function of the same name. The first argument is the timestamp; if the second argument is provided and is true, the values are returned as an associative array. If the second argument is not provided or is false, a numeric array is returned. The keys and values returned are:

tm_sec	Seconds
tm_min	Minutes
tm_hour	Hour
tm_mday	Day of the month
tm_mon	Month of the year
tm_year	Number of years since 1900
tm_wday	Day of the week
tm_yday	Day of the year
tm_isdst	1 if Daylight Saving Time was in effect at the date and time
If a numeric array is returned, the values are in the order given above.

log
float log(float number [, float base])

Returns the natural log of number. The base option controls the logarithmic base that will be used; it defaults to e, which is a natural logarithm.

log10
float log10(float number)

Returns the base-10 logarithm of number.

log1p
float log1p(float number)

Returns the log(1 + number), computed in such a way that the returned value is accurate even when number is close to zero.

long2ip
string long2ip(string address)

Converts an IPv4 address to a dotted (standard format) address.

lstat
array lstat(string path)

Returns an associative array of information about the file path. If path is a symbolic link, information about path is returned, rather than information about the file to which path points. See fstat for a list of the values returned and their meanings.

ltrim
string ltrim(string string[, string characters])

Returns string with all characters in characters stripped from the beginning. If characters is not specified, the characters stripped are \n, \r, \t, \v, \0, and spaces.

mail
bool mail(string recipient, string subject, string message[, string headers [, string parameters]])

Sends message to recipient via email with the subject subject and returns true if the message was successfully sent and false if it wasn’t. If given, headers is added to the end of the headers generated for the message, allowing you to add cc:, bcc:, and other headers. To add multiple headers, separate them with \n characters (or \r\n characters on Windows servers). Finally, if specified, parameters is added to the parameters of the call to the mailer program used to send the mail.

max
mixed max(mixed value1[, mixed value2[, ... mixed valueN]])

If value1 is an array, returns the largest number found in the values of the array. If not, returns the largest number found in the arguments.

md5
string md5(string string [, bool binary])

Calculates the MD5 encryption hash of string and returns it. If the binary option is true, then the MD5 hash returned is in raw binary format (length of 16); binary defaults to false, thus making md5 return a full 32-character hex string.

md5_file
string md5_file(string path[, bool binary])

Calculates and returns the MD5 encryption hash for the file at path. An MD5 hash is a 32-character hexadecimal value that can be used to checksum a file’s data. If binary is supplied and is true, the result is sent as a 16-bit binary value instead.

memory_get_peak_usage
int memory_get_peak_usage([bool actual])

Returns the peak memory usage so far, in bytes, of the currently running script. If actual is specified and true, returns the actual bytes allocated; otherwise, it returns the bytes allocated through PHP’s internal memory allocation routines.

memory_get_usage
int memory_get_usage([bool actual])

Returns the current memory usage, in bytes, of the currently running script. If actual is specified and true, returns the actual bytes allocated; otherwise, it returns the bytes allocated through PHP’s internal memory allocation routines.

metaphone
string metaphone(string string, int max_phonemes)

Calculates the metaphone key for string. The maximum number of phonemes to use in calculating the value is given in max_phonemes. Similar-sounding English words generate the same key.

method_exists
bool method_exists(object object, string name)

Returns true if the object contains a method with the name given in the second parameter, and false otherwise. The method may be defined in the class of which the object is an instance, or in any superclass of that class.

microtime
mixed microtime([ bool get_as_float])

Returns a string in the format microseconds seconds, where seconds is the number of seconds since the Unix epoch (January 1, 1970), and microseconds is the microseconds portion of the time since the Unix epoch. If get_as_float is true, a float will be returned instead of a string.

min
mixed min(mixed value1[, mixed value2[, ... mixed valueN]])

If value1 is an array, returns the smallest number found in the values of the array. If not, returns the smallest number found in the arguments.

mkdir
bool mkdir(string path[, int mode [, bool recursive [, resource context]]])

Creates the directory path with mode permissions. The mode is expected to be an octal number such as 0755. An integer value such as 755 or a string value such as "u+x" will not work as expected. Returns true if the operation was successful and false if not. If recursive is used, it allows for the creation of nested directories.

mktime
int mktime(int hours, int minutes, int seconds, int month, int day, int year [, int is_dst])

Returns the Unix timestamp value corresponding to the parameters, which are supplied in the order hours, minutes, seconds, month, day, year, and (optionally) whether the value is in Daylight Saving Time. This timestamp is the number of seconds elapsed between the Unix epoch and the given date and time.

The order of the parameters is different from that of the standard Unix mktime() call, to make it simpler to leave out unneeded arguments. Any arguments left out are given the current local date and time.

move_uploaded_file
bool move_uploaded_file(string from, string to)

Moves the file from to the new location to. The function moves the file only if from was uploaded by an HTTP POST. If from does not exist or is not an uploaded file, or if any other error occurs, false is returned; if the operation is successful, true is returned.

mt_getrandmax
int mt_getrandmax()

Returns the largest value that can be returned by mt_rand().

mt_rand
int mt_rand([int min, int max])

Returns a random number from min to max, inclusive, generated using the Mersenne Twister pseudorandom number generator. If min and max are not provided, returns a random number from 0 to the value returned by mt_getrandmax().

mt_srand
void mt_srand(int seed)

Seeds the Mersenne Twister generator with seed. You should call this function with a varying number, such as that returned by time(), before making calls to mt_rand().

natcasesort
void natcasesort(array array)

Sorts the elements in the given array using a case-insensitive natural order algorithm; see natsort for more information.

natsort
bool natsort(array array)

Sorts the values of the array using “natural order”: numeric values are sorted in the manner expected by language, rather than the often bizarre order in which computers insist on putting them (ASCII ordered). For example:

$array = array("1.jpg", "4.jpg", "12.jpg", "2,.jpg", "20.jpg");
$first = sort($array); // ("1.jpg", "12.jpg", "2.jpg", "20.jpg", "4.jpg")
$second = natsort($array); // ("1.jpg", "2.jpg", "4.jpg", "12.jpg", "20.jpg")
next
mixed next(array array)

Increments the internal pointer to the element after the current element and returns the value of the element to which the internal pointer is now set. If the internal pointer already points beyond the last element in the array, the function returns false.

Be careful when iterating over an array using this function—if an array contains an empty element or an element with a key value of 0, a value equivalent to false is returned, causing the loop to end. If an array might contain empty elements or an element with a key of 0, use the each function instead of a loop with next.

nl_langinfo
string nl_langinfo(int item)

Returns the string containing the information for item in the current locale; item is one of a number of different values such as day names, time format strings, and so on. The actual possible values are different on different implementations of the C library; see <langinfo.h> on your machine for the values on your OS.

nl2br
string nl2br(string string [, bool xhtml_lb])

Returns a string created by inserting <br /> before all newline characters in string. If xhtml_lb is true, then nl2br will use XHTML-compatible line breaks.

number_format
string number_format(float number[, int precision[, string decimal_separator, string thousands_separator]])

Creates a string representation of number. If precision is given, the number is rounded to that many decimal places; the default is no decimal places, creating an integer. If decimal_separator and thousands_separator are provided, they are used as the decimal-place character and thousands separator, respectively. They default to the English locale versions (. and ,). For example:

$number = 7123.456;
$english = number_format($number, 2); // 7,123.45
$francais = number_format($number, 2, ',', ' '); // 7 123,45
$deutsche = number_format($number, 2, ',', '.'); // 7.123,45
If rounding occurs, proper rounding is performed, which may not be what you expect (see round).

ob_clean
void ob_clean()

Discards the contents of the output buffer. Unlike ob_end_clean(), the output buffer is not closed.

ob_end_clean
bool ob_end_clean()

Turns off output buffering and empties the current buffer without sending it to the client. See Chapter 15 for more information on using the output buffer.

ob_end_flush
bool ob_end_flush()

Sends the current output buffer to the client and stops output buffering. See Chapter 15 for more information on using the output buffer.

ob_flush
void ob_flush()

Sends the contents of the output buffer to the client and discards the contents. Unlike calling ob_end_flush(), the output buffer itself is not closed.

ob_get_clean
string ob_get_clean()

Returns the contents of the output buffer and ends output buffering.

ob_get_contents
string ob_get_contents()

Returns the current contents of the output buffer; if buffering has not been enabled with a previous call to ob_start(), returns false. See Chapter 15 for more information on using the output buffer.

ob_get_flush
string ob_get_flush()

Returns the contents of the output buffer, flushes the output buffer to the client, and ends output buffering.

ob_get_length
int ob_get_length()

Returns the length of the current output buffer, or false if output buffering isn’t enabled. See Chapter 15 for more information on using the output buffer.

ob_get_level
int ob_get_level()

Returns the count of nested output buffers, or 0 if output buffering is not currently active.

ob_get_status
array ob_get_status([bool verbose])

Returns status information about the current output buffer. If verbose is supplied and is true, returns information about all nested output buffers.

ob_gzhandler
string ob_gzhandler(string buffer[, int mode])

This function gzip-compresses output before it is sent to the browser. You don’t call this function directly. Rather, it is used as a handler for output buffering using the ob_start() function. To enable gzip-compression, call ob_start() with this function’s name:

<ob_start("ob_gzhandler");>
ob_implicit_flush
void ob_implicit_flush([int flag])

If flag is true or unspecified, turns on output buffering with implicit flushing. When implicit flushing is enabled, the output buffer is cleared and sent to the client after any output (such as the printf() and echo() functions). See Chapter 15 for more information on using the output buffer.

ob_list_handlers
array ob_list_handlers()

Returns an array with the names of the active output handlers. If PHP’s built-in output buffering is enabled, the array contains the value default output handler. If no output handlers are active, it returns an empty array.

ob_start
bool ob_start([string callback [, int chunk [, bool erase]]])

Turns on output buffering, which causes all output to be accumulated in a buffer instead of being sent directly to the browser. If callback is specified, it is a function (called before sending the output buffer to the client) that can modify the data in any way; the ob_gzhandler() function is provided to compress the output buffer in a client-aware manner. The chunk option can be used to trigger the flushing of the buffer when the buffer size equals the chunk number. If the erase option is set to false, then the buffer will not be deleted until the end of the script. See Chapter 15 for more information on using the output buffer.

octdec
number octdec(string octal)

Converts octal to its decimal value. Up to a 32-bit number, or 2,147,483,647 decimal (017777777777 octal), can be converted.

opendir
resource opendir(string path[, resource context])

Opens the directory path and returns a directory handle for the path that is suitable for use in subsequent readdir(), rewinddir(), and closedir() calls. If path is not a valid directory, if permissions do not allow the PHP process to read the directory, or if any other error occurs, false is returned.

openlog
bool openlog(string identity, int options, int facility)

Opens a connection to the system logger. Each message sent to the logger with a subsequent call to syslog() is prepended by identity. Various options can be specified by options; OR any options you want to include. The valid options are:

LOG_CONS	If an error occurs while writing to the system log, write the error to the system console
LOG_NDELAY	Open the system log immediately
LOG_ODELAY	Delay opening the system log until the first message is written to it
LOG_PERROR	Print this message to standard error in addition to writing it to the system log
LOG_PID	Include the PID in each message
The third parameter, facility, tells the system log what kind of program is logging to the system log. The following facilities are available:

LOG_AUTH	Security and authorization errors (deprecated; if LOG_AUTHPRIV is available, use it instead)
LOG_AUTHPRIV	Security and authorization errors
LOG_CRON	Clock daemon (cron and at) errors
LOG_DAEMON	Errors for system daemons not given their own codes
LOG_KERN	Kernel errors
LOG_LPR	Line printer subsystem errors
LOG_MAIL	Mail errors
LOG_NEWS	USENET news system errors
LOG_SYSLOG	Errors generated internally by syslogd
LOG_AUTHPRIV	Security and authorization errors
LOG_USER	Generic user-level errors
LOG_UUCP	UUCP errors
ord
int ord(string string)

Returns the ASCII value of the first character in string.

output_add_rewrite_var
bool output_add_rewrite_var(string name, string value)

Begins using the value rewriting output handler by appending the name and value to all HTML anchor elements and forms. For example:

output_add_rewrite_var('sender', 'php');

echo "<a href=\"foo.php\">\n";
echo '<form action="bar.php"></form>';

// outputs:
// <a href="foo.php?sender=php">
// <form action="bar.php"><input type="hidden" name="sender" value="php" />
// </form>
output_reset_rewrite_vars
bool output_reset_rewrite_vars()

Resets the value writing output handler; if the value writing output handler was in effect, any still unflushed output will no longer be affected by rewriting even if put into the buffer before this call.

pack
string pack(string format, mixed arg1[, mixed arg2[, ... mixed argN]])

Creates a binary string containing packed versions of the given arguments according to format. Each character may be followed by a number of arguments to use in that format, or an asterisk (*), which uses all arguments to the end of the input data. If no repeater argument is specified, a single argument is used for the format character. The following characters are meaningful in the format string:

a	NUL-byte-padded string
A	Space-padded string
h	Hexadecimal string, with the low nibble first
H	Hexadecimal string, with the high nibble first
c	Signed char
C	Unsigned char
s	16-bit, machine-dependent byte-ordered signed short
S	16-bit, machine-dependent byte-ordered unsigned short
n	16-bit, big-endian byte-ordered unsigned short
v	16-bit, little-endian byte-ordered unsigned short
i	Machine-dependent size and byte-ordered signed integer
I	Machine-dependent size and byte-ordered unsigned integer
l	32-bit, machine-dependent byte-ordered signed long
L	32-bit, machine-dependent byte-ordered unsigned long
N	32-bit, big-endian byte-ordered unsigned long
V	32-bit, little-endian byte-ordered unsigned long
f	Float in machine-dependent size and representation
d	Double in machine-dependent size and representation
x	NUL-byte
X	Back up one byte
@	Fill to absolute position (given by the repeater argument) with NUL-bytes
parse_ini_file
array parse_ini_file(string filename[, bool process_sections[, int scanner_mode]])

Loads filename—which must be a file in the standard php.ini format—and returns the values contained in it as an associative array, or false if the file could not be parsed. If process_sections is set and is true, a multidimensional array with values for the sections in the file is returned. The scanner_mode option is either INI_SCANNER_NORMAL, the default, or INI_SCANNER_RAW, indicating that the function should not parse option values.

parse_ini_string
array parse_ini_string(string config[, bool process_sections[, int scanner_mode]])

Parses a string in the php.ini format and returns the values contained in it in an associative array, or false if the string could not be parsed. If process_sections is set and is true, a multidimensional array with values for the sections in the file is returned. The scanner_mode option is either INI_SCANNER_NORMAL, the default, or INI_SCANNER_RAW, indicating that the function should not parse option values.

parse_str
void parse_str(string string[, array variables])

Parses string as if coming from an HTTP POST request, setting variables in the local scope to the values found in the string. If variables is given, the array is set with keys and values from the string.

parse_url
mixed parse_url(string url)[, int component])

Returns an associative array of the component parts of url. The array contains the following values:

fragment	The named anchor in the URL
host	The host
pass	The user’s password
path	The requested path (which may be a directory or a file)
port	The port to use for the protocol
query	The query information
scheme	The protocol in the URL, such as “http”
user	The user given in the URL
The array will not contain values for components not specified in the URL. For example:

$url = "http://www.oreilly.net/search.php#place?name=php&type=book";
$array = parse_url($url);
print_r($array); // contains values for "scheme", "host", "path", "query",
 // and "fragment"
If the component option is provided, then just that particular component of the URL will be returned.

passthru
void passthru(string command[, int return])

Executes command via the shell and outputs the results of the command into the page. If return is specified, it is set to the return status of the command. If you want to capture the results of the command, use exec().

pathinfo
mixed pathinfo(string path[, int options])

Returns an associative array containing information about path. If the options parameter is given, it specifies a particular element to be returned. PATHINFO_DIRNAME, PATHINFO_BASENAME, PATHINFO_EXTENSION, and PATHINFO_FILENAME are valid options values.

The following elements are in the returned array:

dirname	The directory in which path is contained.
basename	The basename (see basename) of path, including the file’s extension.
extension	The extension, if any, on the file’s name. Does not include the period at the beginning of the extension.
pclose
int pclose(resource handle)

Closes the pipe referenced by handle. Returns the termination code of the process that was run in the pipe.

pfsockopen
resource pfsockopen(string host, int port[, int error[, string message [, float timeout]]])

Opens a persistent TCP or UDP connection to a remote host on a specific port. By default, TCP is used; to connect via UDP, host must begin with udp://. If specified, timeout indicates the length of time in seconds to wait before timing out.

If the connection is successful, the function returns a virtual file pointer that can be used with functions such as fgets() and fputs(). If the connection fails, it returns false. If error and message are supplied, they are set to the error number and error string, respectively.

Unlike fsockopen(), the socket opened by this function does not close automatically after completing a read or write operation on it; you must close it explicitly with a call to fsclose().

php_ini_loaded_file
string php_ini_loaded_file()

Returns the path of the current php.ini file if there is one, or false otherwise.

php_ini_scanned_files
string php_ini_scanned_files()

Returns a string containing the names of the configuration files parsed when PHP started up. The files are returned in a comma-separated list. If the compile-time configuration option --with-config-file-scan-dir was not set, false is returned instead.

php_logo_guid
string php_logo_guid()

Returns an ID that you can use to link to the PHP logo. For example:

<?php $current = basename($PHP_SELF); ?>
<img src="<?= "$current?=" . php_logo_guid(); ?>" border="0" />
php_sapi_name
string php_sapi_name()

Returns a string describing the server API under which PHP is running—for example, "cgi" or "apache".

php_strip_whitespace
string php_strip_whitespace(string path)

Returns a string containing the source from the file path with whitespace and comment tokens stripped.

php_uname
string php_uname(string mode)

Returns a string describing the operating system under which PHP is running. The mode parameter is a single character used to control what is returned. The possible values are:

a (default)	All modes included (s, n, r, v, m)
s	Name of the operating system
n	The hostname
r	Release name
v	Version information
m	Machine type
phpcredits
bool phpcredits([int what])

Outputs information about PHP and its developers; the information that is displayed is based on the value of what. To use more than one option, OR the values together. The possible values of what are:

CREDITS_ALL (default)	All credits except CREDITS_SAPI
CREDITS_GENERAL	General credits about PHP
CREDITS_GROUP	A list of the core PHP developers
CREDITS_DOCS	Information about the documentation team
CREDITS_MODULES	A list of the extension modules currently loaded and the authors for each
CREDITS_SAPI	A list of the server API modules and the authors for each
CREDITS_FULLPAGE	Indicates that the credits should be returned as a full HTML page, rather than just a fragment of HTML code. Must be used in conjunction with one or more other options—for example, phpcredits(CREDITS_MODULES | CREDITS_FULLPAGE)
phpinfo
bool phpinfo([int what])

Outputs a great deal of information about the state of the current PHP environment, including loaded extensions, compilation options, version, server information, and so on. If specified, what can limit the output to specific pieces of information; what may contain several options ORed together. The possible values of what are:

INFO_ALL (default)	All information
INFO_GENERAL	General information about PHP
INFO_CREDITS	Credits for PHP, including the authors
INFO_CONFIGURATION	Configuration and compilation options
INFO_MODULES	Currently loaded extensions
INFO_ENVIRONMENT	Information about the PHP environment
INFO_VARIABLES	A list of the current variables and their values
INFO_LICENSE	The PHP license
phpversion
string phpversion(string extension)

Returns the version of the currently running PHP parser. If the extension option is used, by naming a particular extension, the version information about that extension is all that is returned.

pi
float pi()

Returns an approximate value of pi (3.14159265359).

popen
resource popen(string command, string mode)

Opens a pipe to a process executed by running command on the shell.

The parameter mode specifies the permissions to open the file with, which can only be unidirectional (that is, for reading or writing only). mode must be one of the following:

r	Open file for reading; file pointer will be at beginning of file
w	Open file for writing. If the file exists, it will be truncated to zero length; if the file doesn’t already exist, it will be created
If any error occurs while attempting to open the pipe, false is returned. If not, the resource handle for the pipe is returned.

pow
number pow(number base, number exponent)

Returns base raised to the exponent power. When possible, the return value is an integer; if not, it is a float.

prev
mixed prev(array array)

Moves the internal pointer to the element before its current location and returns the value of the element to which the internal pointer is now set. If the internal pointer is already set to the first element in the array, returns false. Be careful when iterating over an array using this function—if an array has an empty element or an element with a key value of 0, a value equivalent to false is returned, causing the loop to end. If an array might contain empty elements or an element with a key of 0, use the each() function instead of a loop with prev().

print_r
mixed print_r(mixed value[, bool return])

Outputs value in a human-readable manner. If value is a string, integer, or float, the value itself is output; if it is an array, the keys and elements are shown; and if it is an object, the keys and values for the object are displayed. This function returns true. If return is set to true, then the output is returned rather than displayed.

printf
int printf(string format[, mixed arg1 ...])

Outputs a string created by using format and the given arguments. The arguments are placed into the string in various places denoted by special markers in the format string.

Each marker starts with a percent sign (%) and consists of the following elements, in order. Except for the type specifier, the specifiers are all optional. To include a percent sign in the string, use %%.

An optional sign specifier that forces a sign (– or +) to be used on a number. By default, only the – sign is used on a number if it’s negative. Additionally, this specifier forces positive numbers to have the + sign attached.

A padding specifier denoting the character to use to pad the results to the appropriate string size (given below). Either 0, a space, or any character prefixed with a single quote may be specified; padding with spaces is the default.

An alignment specifier. By default, the string is padded to make it right-justified. To make it left-justified, specify a dash (–) here.

The minimum number of characters this element should contain. If the result would be less than this number of characters, the preceding specifiers determine the behavior to pad to the appropriate width.

For floating-point numbers, a precision specifier consisting of a period and a number; this dictates how many decimal digits will be displayed. For types other than float, this specifier is ignored.

Finally, a type specifier. This specifier tells printf() what type of data is being handed to the function for this marker. There are eight possible types:

b	The argument is an integer and is displayed as a binary number
c	The argument is an integer and is displayed as the character with that value
d	The argument is an integer and is displayed as a decimal number
f	The argument is a float and is displayed as a floating-point number
o	The argument is an integer and is displayed as an octal (base-8) number
s	The argument is treated and displayed as a string
x	The argument is an integer and is displayed as a hexadecimal (base-16) number; lowercase letters are used
X	Same as x, except uppercase letters are used
proc_close
int proc_close(resource handle)

Closes the process referenced by handle and previously opened by proc_open(). Returns the termination code of the process.

proc_get_status
array proc_get_status(resource handle)

Returns an associative array containing information about the process handle, previously opened by proc_open(). The array contains the following values:

command	The command string this process was opened with
pid	The process ID
running	true if the process is currently running, and false otherwise
signaled	true if the process has been terminated by an uncaught signal, and false otherwise
stopped	true if the process has been stopped by a signal, and false otherwise
exitcode	If the process has terminated, the exit code from the process, and –1 otherwise
termsig	The signal that caused the process to be terminated if signaled is true, and undefined otherwise
stopsig	The signal that caused the process to be stopped if stopped is true, and undefined otherwise
proc_nice
bool proc_nice(int increment)

Changes the priority of the process executing the current script by increment. A negative value raises the priority of the process, while a positive value lowers the priority of the process. Returns true if the operation was successful, and false otherwise.

proc_open
resource proc_open(string command, array descriptors, array pipes[, string dir[, array env[, array options]]])

Opens a pipe to a process executed by running command on the shell, with a variety of options. The descriptors parameter must be an array with three elements—in order, they describe the stdin, stdout, and stderr descriptors. For each, specify either an array containing two elements or a stream resource. In the first case, if the first element is "pipe", the second element is either "r" to read from the pipe or "w" to write to the pipe. If the first is "file", the second must be a filename. The pipes array is filled with an array of file pointers corresponding to the processes’ descriptors. If dir is specified, the process has its current working directory set to that path. If env is specified, the process has its environment set up with the values from that array. Finally, options contains an associative array with additional options. The following options can be set in the array:

suppress_errors	If set and true, suppresses errors generated by the process (Windows only)
bypass_shell	If set and true, bypasses cmd.exe when running the process
context	If set, specifies the stream context when opening files
If any error occurs while attempting to open the process, false is returned. If not, the resource handle for the process is returned.

proc_terminate
bool proc_terminate(resource handle[, int signal])

Signals to the process referenced by handle and previously opened by proc_open() that it should terminate. If signal is supplied, the process is sent that signal. The call returns immediately, which may be prior to the process finishing termination. To poll for a process’s status, use proc_get_status(). Returns true if the operation was successful, and false otherwise.

property_exists
bool property_exists(mixed class, string name)

Returns true if the object or class has a data member named name defined on it, and false if it does not.

putenv
bool putenv(string setting)

Sets an environment variable using setting, which is typically in the form name = value. Returns true if successful and false if not.

quoted_printable_decode
string quoted_printable_decode(string string)

Decodes string, which is data encoded using the quoted printable encoding, and returns the resulting string.

quoted_printable_encode
string quoted_printable_encode(string string)

Returns string formatted in quoted printable encoding. See RFC 2045 for a description of the encoding format.

quotemeta
string quotemeta(string string)

Escapes instances of certain characters in string by appending a backslash (\) to them and returns the resulting string. The following characters are escaped: period (.), backslash (\), plus sign (+), asterisk (*), question mark (?), brackets ([ and ]), caret (^), parentheses (( and )), and dollar sign ($).

rad2deg
float rad2deg(float number)

Converts number from radians to degrees and returns the result.

rand
int rand([int min, int max])

Returns a random number from min to max, inclusive. If the min and max parameters are not provided, returns a random number from 0 to the value returned by the getrandmax() function.

random_bytes
string random_bytes(int length)

Generates an arbitrary length string of cryptographic random bytes that are suitable for cryptographic use, such as when generating salts, keys, or initialization vectors.

random_int
int random_int(int min, int max)

Generates cryptographic random integers that can be used where unbiased results are mandatory, such as when mixing “balls” for Bingo. Min sets the lowest value range to be returned (must be PHP_INT_MIN or greater), max sets the highest (must be PHP_INT_MAX or lower).

range
array range(mixed first, mixed second[, number step])

Creates and returns an array containing integers or characters from first to second, inclusive. If second is smaller than first, the sequence is returned in reverse order. If step is provided, then the created array will have the specified step gaps in it.

rawurldecode
string rawurldecode(string url)

Returns a string created from decoding the URI-encoded url. Sequences of characters beginning with a % followed by a hexadecimal number are replaced with the literal the sequence represents.

rawurlencode
string rawurlencode(string url)

Returns a string created by URI encoding url. Certain characters are replaced by sequences of characters beginning with a % followed by a hexadecimal number; for example, spaces are replaced with %20.

readdir
string readdir([resource handle])

Returns the name of the next file in the directory referenced by handle. If not specified, handle defaults to the last directory handle resource returned by opendir(). The order in which files in a directory are returned by calls to readdir() is undefined. If there are no more files in the directory to return, readdir() returns false.

readfile
int readfile(string path[, bool include[, resource context]])

Reads the file at path, in the streams context context if provided, and outputs the contents. If include is specified and is true, the include path is searched for the file. If path begins with http://, an HTTP connection is opened and the file is read from it. If path begins with ftp://, an FTP connection is opened and the file is read from it; the remote server must support passive FTP.

This function returns the number of bytes output.

readlink
string readlink(string path)

Returns the path contained in the symbolic link file path. If path does not exist or is not a symbolic link file, or if any other error occurs, the function returns false.

realpath
string realpath(string path)

Expands all symbolic links, resolves references to /./ and /../, removes extra / characters in path, and returns the result.

realpath_cache_get
array realpath_cache_get()

Returns the contents of the realpath cache as an associative array. The key for each item is the path name, and the value for each item is an associative array containing values that have been cached for the path. The possible values include:

expires	The time when this cache entry will expire
is_dir	Whether this path represents a directory or not
key	A unique ID for the cache entry
realpath	The resolved path for the path
realpath_cache_size
int realpath_cache_size()

Returns the size in bytes the realpath cache currently occupies in memory.

register_shutdown_function
void register_shutdown_function(callable function[, mixed arg1 [, mixed arg2 [, ... mixed argN]]])

Registers a shutdown function. The function is called when the page completes processing with the given arguments. You can register multiple shutdown functions, and they will be called in the order in which they were registered. If a shutdown function contains an exit command, functions registered after that function will not be called.

Because the shutdown function is called after the page has completely processed, you cannot add data to the page with print(), echo(), or similar functions or commands.

register_tick_function
bool register_tick_function(callable function[, mixed arg1 [, mixed arg2 [, ... mixed argN]]])

Registers the function name to be called on each tick. The function is called with the given arguments. Obviously, registering a tick function can have a serious impact on the performance of your script. Returns true if the operation was successful, and false otherwise.

rename
bool rename(string old, string new[, resource context]))

Renames the file old, using the streams context context if provided, to new; returns true if the renaming was successful and false if not.

reset
mixed reset(array array)

Resets the array’s internal pointer to the first element and returns the value of that element.

restore_error_handler
bool restore_error_handler()

Reverts to the error handler in place prior to the most recent call to set_error_handler() and returns true.

restore_exception_handler
bool restore_exception_handler()

Reverts to the exception handler in place prior to the most recent call to set_exception_handler() and returns true.

rewind
int rewind(resource handle)

Sets the file pointer for handle to the beginning of the file. Returns true if the operation was successful and false if not.

rewinddir
void rewinddir([resource handle])

Sets the file pointer for handle to the beginning of the list of files in the directory. If not specified, handle defaults to the last directory handle resource returned by opendir().

rmdir
int rmdir(string path[, resource context])

Removes the directory path, using the streams context context if provided. If the directory is not empty, or the PHP process does not have appropriate permissions, or if any other error occurs, false is returned. If the directory is successfully deleted, true is returned.

round
float round(float number[, int precision[, int mode]])

Returns the integer value nearest to number at the precision number of decimal places. The default for precision is 0 (integer rounding). The mode parameter dictates the method of rounding used:

PHP_ROUND_HALF_UP (default)	Round up
PHP_ROUND_HALF_DOWN	Round down
PHP_ROUND_HALF_EVEN	Round up if the significant digits are even
PHP_ROUND_HALF_ODD	Round down if the significant digits are odd
rsort
void rsort(array array[, int flags])

Sorts an array in reverse order by value. The optional second parameter contains additional sorting flags. See Chapter 5 and unserialize() for more information on using this function.

rtrim
string rtrim(string string[, string characters])

Returns string with all characters in characters stripped from the end. If characters is not specified, the characters stripped are \n, \r, \t, \v, \0, and spaces.

scandir
array scandir(string path [, int sort_order [, resource context]])

Returns an array of filenames existing at path, in the streams context context if provided, or false if an error occurred. The filenames are sorted according to the sort_order parameter, which is one of the following types:

SCANDIR_SORT_ASCENDING (default)	Sort ascending
SCANDIR_SORT_DESCENDING	Sort descending
SCANDIR_SORT_NONE	Perform no sorting (the resulting order is undefined)
serialize
string serialize(mixed value)

Returns a string containing a binary data representation of value. This string can be used to store the data in a database or file, for example, and later restored using unserialize(). Except for resources, any kind of value can be serialized.

set_error_handler
string set_error_handler(string function)

Sets the named function as the current error handler, or unsets the current error handler if function is NULL. The error-handler function is called whenever an error occurs; the function can do whatever it wants, but typically will print an error message and clean up after a critical error happens.

The user-defined function is called with two parameters, an error code and a string describing the error. Three additional parameters may also be supplied—the filename in which the error occurred, the line number at which the error occurred, and the context in which the error occurred (which is an array pointing to the active symbol table).

set_error_handler() returns the name of the previously installed error-handler function, or false if an error occurred while setting the error handler (e.g., when function doesn’t exist).

set_exception_handler
callable set_exception_handler(callable function)

Sets the named function as the current exception handler. The exception handler is called whenever an exception is thrown in a try...catch block, but is not caught; the function can do whatever it wants, but typically will print an error message and clean up after a critical error happens.

The user-defined function is called with one parameter—the exception object that was thrown.

set_exception_handler() returns the previously installed exception-handler function, an empty string if no previous handler was set, or false if an error occurred while setting the error handler (e.g., when function doesn’t exist).

set_include_path
string set_include_path(string path)

Sets the include path configuration option; it lasts until the end of the script’s execution, or until a call to restore_include_path in the script. Returns the value of the previous include path.

set_time_limit
void set_time_limit(int timeout)

Sets the timeout for the current script to timeout seconds and restarts the timeout timer. By default, the timeout is set to 30 seconds or the value for max_execution_time set in the current configuration file. If a script does not finish executing within the time provided, a fatal error is generated and the script is killed. If timeout is 0, the script will never time out.

setcookie
void setcookie(string name[, string value[, int expiration[, string path [, string domain[, bool is_secure]]]]])

Generates a cookie and passes it along with the rest of the header information. Because cookies are set in the HTTP header, setcookie() must be called before any output is generated.

If only name is specified, the cookie with that name is deleted from the client. The value argument specifies a value for the cookie to take, expiration is a Unix timestamp value defining a time the cookie should expire, and the path and domain parameters define a domain for the cookie to be associated with. If is_secure is true, the cookie will be transmitted only over a secure HTTP connection.

setlocale
string setlocale(mixed category, string locale[, string locale, ...]) string setlocale(mixed category, array locale)

Sets the locale for category functions to locale. Returns the current locale after being set, or false if the locale cannot be set. Any number of options for category can be added (or ORed) together. The following options are available:

LC_ALL (default)	All of the following categories
LC_COLLATE	String comparisons
LC_CTYPE	Character classification and conversion
LC_MONETARY	Monetary functions
LC_NUMERIC	Numeric functions
LC_TIME	Time and date formatting
If locale is 0 or the empty string, the current locale is unaffected.

setrawcookie
void setrawcookie(string name[, string value[, int expiration[, string path [, string domain[, bool is_secure]]]]])

Generates a cookie and passes it along with the rest of the header information. Because cookies are set in the HTTP header, setcookie() must be called before any output is generated.

If only name is specified, the cookie with that name is deleted from the client. The value argument specifies a value for the cookie to take—unlike setcookie(), the value specified here is not URL-encoded before being sent, expiration is a Unix timestamp value defining a time the cookie should expire, and the path and domain parameters define a domain for the cookie to be associated with. If is_secure is true, the cookie will be transmitted only over a secure HTTP connection.

settype
bool settype(mixed value, string type)

Converts value to the given type. Possible types are "boolean", "integer", "float", "string", "array", and "object". Returns true if the operation was successful and false if not. Using this function is the same as typecasting value to the appropriate type.

sha1
string sha1(string string[, bool binary])

Calculates the sha1 encryption hash of string and returns it. If binary is set and is true, the raw binary is returned instead of a hex string.

sha1_file
string sha1_file(string path[, bool binary])

Calculates and returns the sha1 encryption hash for the file at path. A sha1 hash is a 40-character hexadecimal value that can be used to checksum a file’s data. If binary is supplied and is true, the result is sent as a 20-bit binary value instead.

shell_exec
string shell_exec(string command)

Executes command via the shell and returns the output from the command’s result. This function is called when you use the backtick operator (`).

shuffle
void shuffle(array array)

Rearranges the values in array into a random order. Keys for the values are lost.

similar_text
int similar_text(string one, string two[, float percent])

Calculates the similarity between the strings one and two. If passed by reference, percent gets the percent by which the two strings differ.

sin
float sin(float value)

Returns the sine of value in radians.

sinh
float sinh(float value)

Returns the hyperbolic sine of value in radians.

sleep
int sleep(int time)

Pauses execution of the current script for time seconds. Returns 0 if the operation was successful, or false otherwise.

sort
bool sort(array array[, int flags])

Sorts the values in the given array in ascending order. For more control over the behavior of the sort, provide the second parameter, which is one of the following values:

SORT_REGULAR (default)	Compare the items normally
SORT_NUMERIC	Compare the items numerically
SORT_STRING	Compare the items as strings
SORT_LOCALE_STRING	Compare the items as strings using the current locale sorting rules
SORT_NATURAL	Compare the items as strings using “natural ordering”
SORT_FLAG_CASE	Combine with SORT_STRING or SORT_NATURAL using a bitwise OR operation to sort using case-insensitive comparison
Returns true if the operation was successful, and false otherwise. See Chapter 5 for more information on using this function.

soundex
string soundex(string string)

Calculates and returns the soundex key of string. Words that are pronounced similarly (and begin with the same letter) have the same soundex key.

sprintf
string sprintf(string format[, mixed value1[, ... mixed valueN]])

Returns a string created by filling format with the given arguments. See printf() for more information on using this function.

sqrt
float sqrt(float number)

Returns the square root of number.

srand
void srand([int seed])

Seeds the standard pseudorandom number generator with seed, or with a random seed if none is provided.

sscanf
mixed sscanf(string string, string format[, mixed variableN ...])

Parses string for values of types given in format; the values found are either returned in an array or, if variable1 through variableN (which must be variables passed by reference) are given, in those variables.

The format string is the same as that used in sprintf(). For example:

$name = sscanf("Name: k.tatroe", "Name: %s"); // $name has "k.tatroe"
list($month, $day, $year) = sscanf("June 30, 2001", "%s %d, %d");
$count = sscanf("June 30, 2001", "%s %d, %d", &$month, &$day, &$year);
stat
array stat(string path)

Returns an associative array of information about the file path. If path is a symbolic link, information about the file path references is returned. See fstat for a list of the values returned and their meanings.

str_getcsv
array str_getcsv(string input[, string delimiter[, string enclosure [, string escape]]]])

Parses a string as a comma-separated values (CSV) list and returns it as an array of values. If supplied, delimiter is used to delimit the values for the line instead of commas. If supplied, enclosure is a single character that is used to enclose values (by default, the double-quote character, "). escape sets the escape character to use; the default is a backslash, \.

str_ireplace
mixed str_ireplace(mixed search, mixed replace, mixed string[, int &count])

Performs a case-insensitive search for all occurrences of search in string and replaces them with replace. If all three parameters are strings, a string is returned. If string is an array, the replacement is performed for every element in the array and an array of results is returned. If search and replace are both arrays, elements in search are replaced with the elements in replace with the same numeric indices. Finally, if search is an array and replace is a string, any occurrence of any element in search is changed to replace. If supplied, count is filled with the number of instances replaced.

str_pad
string str_pad(string string, string length[, string pad[, int type]])

Pads string using pad until it is at least length characters and returns the resulting string. By specifying type, you can control where the padding occurs. The following values for type are accepted:

STR_PAD_RIGHT (default)	Pad to the right of string
STR_PAD_LEFT	Pad to the left of string
STR_PAD_BOTH	Pad on either side of string
str_repeat
string str_repeat(string string, int count)

Returns a string consisting of count copies of string appended to each other. If count is not greater than zero, an empty string is returned.

str_replace
mixed str_replace(mixed search, mixed replace, mixed string[, int &count])

Searches for all occurrences of search in string and replaces them with replace. If all three parameters are strings, a string is returned. If string is an array, the replacement is performed for every element in the array and an array of results is returned. If search and replace are both arrays, elements in search are replaced with the elements in replace with the same numeric indices. Finally, if search is an array and replace is a string, any occurrence of any element in search is changed to replace. If supplied, count is filled with the number of instances replaced.

str_rot13
string str_rot13(string string)

Converts string to its rot13 version and returns the resulting string.

str_shuffle
string str_shuffle(string string)

Rearranges the characters in string into a random order and returns the resulting string.

str_split
array str_split(string string[, int length])

Splits string into an array of characters, each containing length characters; if length is not specified, it defaults to 1.

str_word_count
mixed str_word_count(string string[, int format[, string characters]])

Counts the number of words in string using locale-specific rules. The value of format dictates the returned value:

0 (default)	The number of words found in string
1	An array of all words found in string
2	An associative array, with keys being the positions and values being the words found at those positions in string
If characters is specified, it provides additional characters that are considered to be inside words (that is, are not word boundaries).

strcasecmp
int strcasecmp(string one, string two)

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-insensitive—that is, “Alphabet” and “alphabet” are considered equal.

strcmp
int strcmp(string one, string two)

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-sensitive—that is, “Alphabet” and “alphabet” are not considered equal.

strcoll
int strcoll(string one, string two)

Compares two strings using the rules of the current locale; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-sensitive—that is, “Alphabet” and “alphabet” are not considered equal.

strcspn
int strcspn(string string, string characters[, int offset[, int length]])

Returns the length of the subset of string starting at offset, examining a maximum of length characters, to the first instance of a character from characters.

strftime
string strftime(string format[, int timestamp])

Formats a time and date according to the format string provided in the first parameter and the current locale. If the second parameter is not specified, the current time and date is used. The following characters are recognized in the format string:

%a	Name of the day of the week as a three-letter abbreviation (e.g., Mon)
%A	Name of the day of the week (e.g., Monday)
%b	Name of the month as a three-letter abbreviation (e.g., Aug)
%B	Name of the month (e.g., August)
%c	Date and time in the preferred format for the current locale
%C	The last two digits of the century
%d	Day of the month as two digits, including a leading zero if necessary (e.g., 01 through 31)
%D	Same as %m/%d/%y
%e	Day of the month as two digits, including a leading space if necessary (e.g., 1 through 31)
%h	Same as %b
%H	Hour in 24-hour format, including a leading zero if necessary (e.g., 00 through 23)
%I	Hour in 12-hour format (e.g., 1 through 12)
%j	Day of the year, including leading zeros as necessary (e.g., 001 through 366)
%m	Month, including a leading zero if necessary (e.g., 01 through 12)
%M	Minutes
%n	The newline character (\n)
%p	am or pm
%r	Same as %I:%M:%S %p
%R	Same as %H:%M:%S
%S	Seconds
%t	The tab character (\t)
%T	Same as %H:%M:%S
%u	Numeric day of the week, starting with 1 for Monday
%U	Numeric week of the year, starting with the first Sunday
%V	ISO 8601:1998 numeric week of the year—Week 1 starts on the Monday of the first week that has at least four days
%W	Numeric week of the year, starting with the first Monday
%w	Numeric day of the week, starting with 0 for Sunday
%x	The preferred date format for the current locale
%X	The preferred time format for the current locale
%y	Year with two digits (e.g., 98)
%Y	Year with four digits (e.g., 1998)
%Z	Time zone or name or abbreviation
%%	The percent sign (%)
stripcslashes
string stripcslashes(string string, string characters)

Converts instances of characters after a backslash in string by removing the backslash before them. You can specify ranges of characters by separating them by two periods; for example, to unescape characters between a and q, use "a..q". Multiple characters and ranges can be specified in characters. The stripcslashes() function is the inverse of addcslashes().

stripslashes
string stripslashes(string string)

Converts instances of escape sequences that have special meaning in SQL queries in string by removing the backslash before them. Single quotes ('), double quotes ("), backslashes (\), and the NUL-byte ("\0") are escaped. This function is the inverse of addslashes().

strip_tags
string strip_tags(string string[, string allowed])

Removes PHP and HTML tags from string and returns the result. The allowed parameter can be specified to not remove certain tags. The string should be a comma-separated list of the tags to ignore; for example, "<b>,<i>" will leave bold and italic tags.

stripos
int stripos(string string, string value[, int offset])

Returns the position of the first occurrence of value in string using case-insensitive comparison. If specified, the function begins its search at position offset. Returns false if value is not found.

stristr
string stristr(string string, string search[, int before])

Returns the portion of string from the first occurrence of search using case-insensitive comparison until the end of string, or from the first occurrence of search until the beginning of string if before is specified and true. If search is not found, the function returns false. If search contains more than one character, only the first is used.

strlen
int strlen(string string)

Returns the number of characters in string.

strnatcasecmp
int strnatcasecmp(string one, string two)

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-insensitive—that is, “Alphabet” and “alphabet” are considered equal. The function uses a “natural order” algorithm—numbers in the strings are compared more naturally than computers normally do. For example, the values "1", "10", and "2" are sorted in that order by strcmp(), but strnatcasecmp() orders them "1", "2", and "10". This function is a case-insensitive version of strnatcmp().

strnatcmp
int strnatcmp(string one, string two)

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-sensitive—that is, “Alphabet” and “alphabet” are not considered equal. The strnatcmp() function uses a “natural order” algorithm—numbers in the strings are compared more naturally than computers normally do. For example, the values "1", "10", and "2" are sorted in that order by strcmp(), but strnatcmp() orders them "1", "2", and "10".

strncasecmp
int strncasecmp(string one, string two, int length)

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-insensitive—that is, “Alphabet” and “alphabet” are considered equal. This function is a case-insensitive version of strcmp(). If either string is shorter than length characters, the length of that string determines how many characters are compared.

strncmp
int strncmp(string one, string two[, int length])

Compares two strings; returns a number less than zero if one is less than two, 0 if the two strings are equal, and a number greater than zero if one is greater than two. The comparison is case-sensitive—that is, “Alphabet” and “alphabet” are not considered equal. If specified, no more than length characters are compared. If either string is shorter than length characters, the length of that string determines how many characters are compared.

strpbrk
string strpbrk(string string, string characters)

Returns a string consisting of the substring of string, starting from the position of the first instance of a character from characters in string to the end of the string, or false if none of the characters in characters is found in string.

strpos
int strpos(string string, string value[, int offset])

Returns the position of the first occurrence of value in string. If specified, the function begins its search at position offset. Returns false if value is not found.

strptime
array strptime(string date, string format)

Parses a time and date according to the format string and the current locale. The format uses the same format as strftime(). Returns an associative array with information about the parsed time containing the following elements:

tm_sec	Seconds
tm_min	Minutes
tm_hour	Hours
tm_mday	Day of the month
tm_wday	Numeric day of the week (Sunday is 0)
tm_mon	Month
tm_year	Year
tm_yday	Day of the year
unparsed	The portion of date that was not parsed according to the given format
strrchr
string strrchr(string string, string character)

Returns the portion of string from the last occurrence of character until the end of string. If character is not found, the function returns false. If character contains more than one character, only the first is used.

strrev
string strrev(string string)

Returns a string containing the characters of string in reverse order.

strripos
int strripos(string string, string search[, int offset])

Returns the position of the last occurrence of search in string using a case-insensitive search, or false if search is not found. If specified and positive, the search begins offset characters from the start of string. If specified and negative, the search begins offset characters from the end of string. This function is a case-insensitive version of strrpos().

strrpos
int strrpos(string string, string search[, int offset])

Returns the position of the last occurrence of search in string, or false if search is not found. If specified and positive, the search begins offset characters from the start of string. If specified and negative, the search begins offset characters from the end of string.

strspn
int strspn(string string, string characters[, int offset[, int length]])

Returns the length of the substring in string that consists solely of characters in characters. If offset is positive, the search starts at that character; if it is negative, the substring starts at the character offset characters from the string’s end. If length is given and is positive, that many characters from the start of the substring are checked. If length is given and is negative, the check ends length characters from the end of string.

strstr
string strstr(string string, string character[, bool before])

Returns the portion of string from the first occurrence of character until the end of string, or from the first occurrence of character until the beginning of string if before is specified and true. If character is not found, the function returns false. If character contains more than one character, only the first is used.

strtok
string strtok(string string, string token) string strtok(string token)

Breaks string into tokens separated by any of the characters in token and returns the next token found. The first time you call strtok() on a string, use the first function prototype; afterward, use the second, providing only the tokens. The function contains an internal pointer for each string it is called with. For example:

$string = "This is the time for all good men to come to the aid of their 
country."
$current = strtok($string, " .;,\"'");
while(!($current === false)) {
 print($current . "<br />";
}
strtolower
string strtolower(string string)

Returns string with all alphabetic characters converted to lowercase. The table used for converting characters is locale-specific.

strtotime
int strtotime(string time[, int timestamp])

Converts an English description of a time and date into a Unix timestamp value. Optionally, a timestamp can be given that the function uses as the “now” value; if this value is omitted, the current date and time is used. Returns false if the value could not be converted into a valid timestamp.

The descriptive string can be in a number of formats. For example, all of the following will work:

echo strtotime("now");
echo strtotime("+1 week");
echo strtotime("-1 week 2 days 4 seconds");
echo strtotime("2 January 1972");
strtoupper
string strtoupper(string string)

Returns string with all alphabetic characters converted to uppercase. The table used for converting characters is locale-specific.

strtr
string strtr(string string, string from, string to) string strtr(string string, array replacements)

When given three arguments, returns a string created by translating in string every occurrence of a character in from to the character in to with the same position. When given two arguments, returns a string created by translating occurrences of the keys in replacements in string with the corresponding values in replacements.

strval
string strval(mixed value)

Returns the string equivalent for value. If value is an object and that object implements the __toString() method, it returns the value of that method. Otherwise, if value is an object that doesn’t implement __toString() or is an array, the function returns an empty string.

substr
string substr(string string, int offset[, int length])

Returns the substring of string. If offset is positive, the substring starts at that character; if it is negative, the substring starts at the character offset characters from the string’s end. If length is given and is positive, that many characters from the start of the substring are returned. If length is given and is negative, the substring ends length characters from the end of string. If length is not given, the substring contains all characters to the end of string.

substr_compare
int substr_compare(string first, string second, string offset[, int length[, bool case_insensitivity]])

Compares first, starting at the position offset, to second. If length is specified, a maximum of that many characters are compared. Finally, if case_insensitivity is specified and true, the comparison is case-insensitive. Returns a number less than zero if the substring of first is less than second, 0 if they are equal, and a number greater than zero if the substring of first is greater than second.

substr_count
int substr_count(string string, string search[, int offset[, int length]])

Returns the number of times search appears in string. If offset is provided, the search begins at that character offset for at most length characters, or until the end of the string if length is not provided.

substr_replace
string substr_replace(mixed string, mixed replace, mixed offset[, mixed length])

Replaces a substring in string with replace. The substring replaced is selected using the same rules as those of substr(). If string is an array, replacements take place on each string within the array. In this case, replace, offset, and length can either be scalar values, which are used for all strings in string, or arrays of values to be used for each corresponding value in string.

symlink
bool symlink(string path, string new)

Creates a symbolic link to path at the path new. Returns true if the link was successfully created and false if not.

syslog
bool syslog(int priority, string message)

Sends an error message to the system logging facility. On Unix systems, this is syslog(3); on Windows NT, the messages are logged in the NT Event Log. The message is logged with the given priority, which is one of the following (listed in decreasing order of priority):

LOG_EMERG	Error has caused the system to be unstable
LOG_ALERT	Error notes a situation that requires immediate action
LOG_CRIT	Error is a critical condition
LOG_ERR	Error is a general error condition
LOG_WARNING	Error message is a warning
LOG_NOTICE	Error message is a normal, but significant, condition
LOG_INFO	Error is an informational message that requires no action
LOG_DEBUG	Error is for debugging only
If message contains the characters %m, they are replaced with the current error message, if any is set. Returns true if the logging succeeded and false if a failure occurred.

system
string system(string command[, int &return])

Executes command via the shell and returns the last line of output from the command’s result. If return is specified, it is set to the return status of the command.

sys_getloadavg
array sys_getloadavg()

Returns an array containing the load average of the machine running the current script, sampled over the last 1, 5, and 15 minutes.

sys_get_temp_dir
string sys_get_temp_dir()

Returns the path of the directory where temporary files, such as those created by tmpfile() and tempname(), are created.

tan
float tan(float value)

Returns the tangent of value in radians.

tanh
float tanh(float value)

Returns the hyperbolic tangent of value in radians.

tempnam
string tempnam(string path, string prefix)

Generates and returns a unique filename in the directory path. If path does not exist, the resulting temporary file may be located in the system’s temporary directory. The filename is prefixed with prefix. Returns false if the operation could not be performed.

time
int time()

Returns the number of seconds since the Unix epoch (January 1, 1970, 00:00:00 GMT).

time_nanosleep
bool time_nanosleep(int seconds, int nanoseconds)

Pauses execution of the current script for seconds seconds and nanoseconds nanoseconds. Returns true on success and false on a failure; if the delay was interrupted by a signal, an associative array containing the following values is returned instead:

seconds	Number of seconds remaining
nanoseconds	Number of nanoseconds remaining
time_sleep_until
bool time_sleep_until(float timestamp)

Pauses execution of the current script until the time timestamp passes. Returns true on success and false on a failure.

timezone_name_from_abbr
string timezone_name_from_abbr(string name[, int gmtOffset[, int dst]])

Returns the name of a time zone given in name, or false if no appropriate time zone could be found. If given, gmtOffset is an integer offset from GMT used as a hint to find the appropriate time zone. If given, dst indicates whether the time zone has Daylight Saving Time or not as a hint to find the appropriate time zone.

timezone_version_get
string timezone_version_get()

Returns the version of the current time zone database.

tmpfile
int tmpfile()

Creates a temporary file with a unique name, opens it with read-write privileges, and returns a resource to the file, or false if an error occurred. The file is automatically deleted when closed with fclose() or at the end of the current script.

token_get_all
array token_get_all(string source)

Parses the PHP code source into PHP language tokens and returns them as an array. Each element in the array contains a single character token or a three-element array containing, in order, the token index, the source string representing the token, and the line number the source appeared in source.

token_name
string token_name(int token)

Returns the symbolic name of the PHP language token identified by token.

touch
bool touch(string path[, int touch_time[, int access_time]])

Sets the modification date of path to touch_time (a Unix timestamp value) and the access time of path to access_time. If not specified, touch_time defaults to the current time, while access_time defaults to touch_time (or the current time if that value is also not supplied). If the file does not exist, it is created. Returns true if the function completed without error and false if an error occurred.

trait_exists
bool trait_exists(string name[, bool autoload])

Returns true if a trait with the same name as the string has been defined; if not, it returns false. The comparison for trait names is case-insensitive. If autoload is set and is true, the autoloader attempts to load the trait before checking its existence.

trigger_error
void trigger_error(string error[, int type])

Triggers an error condition; if the type is not given, it defaults to E_USER_NOTICE. The following types are valid:

E_USER_ERROR	User-generated error
E_USER_WARNING	User-generated warning
E_USER_NOTICE (default)	User-generated notice
E_USER_DEPRECATED	User-generated deprecated call warning
If longer than 1,024 characters, error is truncated to 1,024 characters.

trim
string trim(string string[, string characters])

Returns string with every whitespace character in characters stripped from the beginning and end of the string. You can specify a range of characters to strip using .. within the string. For example, "a..z" would strip each lowercase alphabetical character. If characters is not supplied, \n, \r, \t, \x0B, \0, and spaces are stripped.

uasort
bool uasort(array array, callable function)

Sorts an array using a user-defined function, maintaining the keys for the values. See Chapter 5 and usort() for more information on using this function. Returns true if the array was successfully sorted, and false otherwise.

ucfirst
string ucfirst(string string)

Returns string with the first character, if alphabetic, converted to uppercase. The table used for converting characters is locale-specific.

ucwords
string ucwords(string string)

Returns string with the first character of each word, if alphabetic, converted to uppercase. The table used for converting characters is locale-specific.

uksort
bool uksort(array array, callable function)

Sorts an array by keys using a user-defined function, maintaining the keys for the values. See Chapter 5 and usort() for more information on using this function. Returns true if the array was successfully sorted, and false otherwise.

umask
int umask([int mask])

Sets PHP’s default permissions to the value mask & 0777 and returns the previous mask if successful, or false if an error occurred. The previous default permissions are restored at the end of the current script. If mask is not supplied, the current permissions are returned.

When running on a multithreaded web server (e.g., Apache), use chmod() after creating a file to change its permissions, rather than this function.

uniqid
string uniqid([string prefix[, bool more_entropy]])

Returns a unique identifier, prefixed with prefix, based on the current time in microseconds. If more_entropy is specified and is true, additional random characters are added to the end of the string. The resulting string is either 13 characters (if more_entropy is unspecified or false) or 23 characters (if more_entropy is true) long.

unlink
int unlink(string path[, resource context])

Deletes the file path, using the streams context context if provided. Returns true if the operation was successful and false if not.

unpack
array unpack(string format, string data)

Returns an array of values retrieved from the binary string data, which was previously packed using the pack() function and the format format. See pack() for a listing of the format codes to use within format.

unregister_tick_function
void unregister_tick_function(string name)

Removes the function name, previously set using register_tick_function(), as a tick function. It will no longer be called during each tick.

unserialize
mixed unserialize(string data)

Returns the value stored in data, which must be a value previously serialized using serialize(). If the value is an object and that object has a __wakeup() method, that method is called on the object immediately after reconstructing the object.

unset
void unset(mixed var[, mixed var2[, ... mixed varN]])

Destroys the given variables. A global variable called within function scope only unsets the local copy of that variable; to destroy a global variable, you must call unset on the value in the $GLOBALS array instead. A variable in function scope passed by reference destroys only the local copy of that variable.

urldecode
string urldecode(string url)

Returns a string created from decoding the URI-encoded url. Sequences of characters beginning with a % followed by a hexadecimal number are replaced with the literal the sequence represents. In addition, plus signs (+) are replaced with spaces. See also rawurlencode(), which is identical except for its handling of spaces.

urlencode
string urlencode(string url)

Returns a string created by URI encoding url. All nonalphanumeric characters except dash (–), underscore (_), and period (.) characters in url are replaced by a sequence of characters beginning with a % followed by a hexadecimal number; for example, slashes (/) are replaced with %2F. In addition, any spaces in url are replaced by plus signs (+). See also rawurlencode(), which is identical except for its handling of spaces.

usleep
void usleep(int time)

Pauses execution of the current script for time microseconds.

usort
bool usort(array array, callable function)

Sorts an array using a user-defined function. The supplied function is called with two parameters. It should return an integer less than zero if the first argument is less than the second, 0 if the first and second arguments are equal, and an integer greater than zero if the first argument is greater than the second. The sort order of two elements that compare equal is undefined. See Chapter 5 for more information on using this function.

Returns true if the function was successful in sorting the array, and false otherwise.

var_dump
void var_dump(mixed name[, mixed name2[, ... mixed nameN]])

Outputs information about name, name2, and so on. Information output includes the variable’s type, value, and, if an object, all public, private, and protected properties of the object. Arrays’ and objects’ contents are output in a recursive fashion.

var_export
mixed var_export(mixed expression[, bool variable_representation])

Returns the PHP code representation of expression. If variable_representation is set and is true, expression’s actual value is returned.

version_compare
mixed version_compare(string one, string two[, string operator])

Compares two version strings and returns −1 if one is less than two, 0 if they are equal, and 1 if one is greater than two. The version strings are split into each numeric or string part, then compared as string_value < "dev" < "alpha" or "a" < "beta" or "b" < "rc" < numeric_value < "pl" or "p".

If operator is specified, the operator is used to make a comparison between the version strings, and the value of the comparison using that operator is returned. The possible operators are < or lt; <= or le; > or gt; >= or ge; ==, =, or eq; and !=, <>, and ne.

vfprintf
int vfprintf(resource stream, string format, array values)

Writes a string created by filling format with the arguments given in the array values to the stream stream and returns the length of the string sent. See printf() for more information on using this function.

vprintf
void vprintf(string format, array values)

Prints a string created by filling format with the arguments given in the array values. See printf() for more information on using this function.

vsprintf
string vsprintf(string format, array values)

Creates and returns a string created by filling format with the arguments given in the array values. See printf() for more information on using this function.

wordwrap
string wordwrap(string string[, int length[, string postfix[, bool force]]])

Inserts postfix into string every length characters and at the end of the string and returns the resulting string. While inserting breaks, the function attempts to not break in the middle of a word. If not specified, postfix defaults to \n and size defaults to 75. If force is given and is true, the string is always wrapped to the given length (this makes the function behave the same as chunk_split()).

zend_thread_id
int zend_thread_id()

Returns a unique identifier for the thread of the currently running PHP process.

zend_version
string zend_version()

Returns the version of the Zend engine in the currently running PHP process.


```
