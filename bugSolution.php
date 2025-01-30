To ensure consistent iteration order, convert the keys to a consistent type and then sort the array.

```php
<?php
$myArray = [];
$myArray["some_key"] = "some_value";
$myArray[123] = 456;

// Ensure all keys are strings
$myArray = array_change_key_case($myArray, CASE_LOWER); // Lowercase for consistency

krsort($myArray); //Sort by key in descending order (adjust accordingly)

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

This version first converts all keys to lowercase strings using `array_change_key_case()` for consistency and then uses `krsort()` to sort the array by keys in reverse order.  Alternatively, `ksort()` can be used for ascending order.  This method guarantees a deterministic order, preventing unexpected behavior based on the internal implementation of PHP's array handling.