In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this example:

```php
<?php
$myArray = [];
$myArray["some_key"] = "some_value";
$myArray[123] = 456;

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

While seemingly straightforward, the order of output isn't guaranteed to be "some_key", 123. PHP's internal array handling might iterate through keys in a different order than they were initially assigned, particularly with a mix of string and numeric keys.  This can lead to unexpected behavior in applications relying on a specific array iteration order.