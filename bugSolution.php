The solution is to use strict comparison (`!==`) instead of loose comparison (`!=`) to accurately check the return value of `strpos()`. This ensures that `false` is treated as a distinct value from 0. 
```php
$haystack = "This is a test string";
$needle = "This";
if (strpos($haystack, $needle) !== false) {
    echo "Substring found!";
} else {
    echo "Substring not found!";
}

$haystack2 = "This is a test string";
$needle2 = "Test";
if (strpos($haystack2, $needle2) !== false) {
    echo "Substring found!";
} else {
    echo "Substring not found!";
}
```