# Uncommon PHP Bug: Unexpected Behavior with Zero and Empty Arrays

This repository demonstrates a subtle bug in a PHP function designed to calculate the average of an array of numbers. While the function handles empty arrays correctly, it lacks robust error handling for non-numeric input, potentially leading to unexpected results.

## Bug Description

The `calculate_average` function works as expected for arrays containing numbers. However, it's not designed to gracefully handle cases with non-numeric values or potential division by zero if all numbers are zero. 

## Solution

The improved version in `bugSolution.php` includes more robust error handling:
- It checks if the input array is empty.
- It checks for non-numeric values, throwing an exception if found.
- It handles division by zero if the sum of numbers is 0.