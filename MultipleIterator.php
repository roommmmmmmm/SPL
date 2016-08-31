<?php
$idIterator = new ArrayIterator(array('01','02','03'));
$nameIterator = new ArrayIterator(array('John','Tom','Ming'));
$ageIterator = new ArrayIterator(array('16','26','22'));
$multiple = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$multiple -> attachIterator($idIterator,"ID");
$multiple -> attachIterator($nameIterator,"Name");
$multiple -> attachIterator($ageIterator,"Age");
foreach ($multiple as $key => $value) {
  print_r($value);
}
