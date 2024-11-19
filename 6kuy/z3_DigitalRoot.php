<?php
  function digital_root(int $number): int {
    while ($number >= 10) {
        $number = array_sum(str_split((string)$number));
    }
    return $number;
}