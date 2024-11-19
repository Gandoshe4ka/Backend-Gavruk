<?php
  
  function square_digits(int $num): int {
    $digits = str_split((string)$num); 
    $squaredDigits = array_map(fn($digit) => (int)$digit ** 2, $digits); 
    return (int)implode('', $squaredDigits); 
}
