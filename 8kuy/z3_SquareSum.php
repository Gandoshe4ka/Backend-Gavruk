<?php
  
function square_sum(array $numbers) : int {
    return array_sum(array_map(fn($n) => $n ** 2, $numbers));
}