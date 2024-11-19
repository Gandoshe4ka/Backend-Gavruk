function removeEveryOther(array $array) : array {
  foreach($array as $key=>$value){
    if($key % 2){
      unset($array[$key]);
    }
  }
    return $array;
}