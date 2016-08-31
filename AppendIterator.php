<?php
$array1 = new ArrayIterator(array('1','2','3'));
$array2 = new ArrayIterator(array('4','5','6'));
$iterator = new AppendIterator();
$iterator->append($array1);
$iterator->append($array2);
foreach ($iterator as $key => $value) {
  echo $value ,'<br />';
}
