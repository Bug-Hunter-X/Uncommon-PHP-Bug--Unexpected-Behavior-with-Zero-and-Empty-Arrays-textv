```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  //Check for non-numeric values
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      throw new InvalidArgumentException('Array must contain only numbers.');
    }
  }

  $sum = array_sum($numbers);
  //Handle division by zero
  if ($sum === 0) {
    return 0.0;
  }
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0]; 
$average = calculate_average($numbers);
echo "Average: " . $average; 

$numbers = [10, 20, 30, 'a']; // Non-numeric value
//$average = calculate_average($numbers); // Throws an exception
echo "Average: " . $average; 

$numbers = []; 
$average = calculate_average($numbers);
echo "Average: " . $average; 
```