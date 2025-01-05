The solution involves ensuring that the array access uses a variable that remains in scope. Here's the corrected code:

```php
<?php
$array = array('a', 'b', 'c');
$keys = array_keys($array);
foreach ($array as $key => $value) {
  // Do something with the value...
}
echo $array[$keys[count($keys)-1]]; // Access the last element
?>
```

Alternatively, you could store the index in a separate variable outside the loop:

```php
<?php
$array = array('a', 'b', 'c');
$last_index = 0;
foreach ($array as $key => $value) {
  $last_index = $key;
  // Do something with the value...
}
echo $array[$last_index]; // Access the last element
?>
```
Both solutions ensure access to the element after the loop is completed.