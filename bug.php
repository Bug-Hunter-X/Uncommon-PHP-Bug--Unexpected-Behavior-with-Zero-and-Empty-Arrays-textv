```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0]; //Zero in array
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [10, 20, 30, 0]; //Zero in array
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = []; //Empty Array
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 0
```