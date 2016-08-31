<?php
$fruits = array(
  'apple' => 'apple value',
  'orange' => 'orange value',
  'plum' => 'plum value',
  'banana' => 'banana value',
  'grape' => 'grape value'
);
//普通遍历方法
foreach ($fruits as $key => $value) {
  echo $key , ' : ' , $value ,'<br />';
}
//使用迭代器进行遍历
$obj = new ArrayObject($fruits);
$iterator = $obj->getIterator();
echo "--------use iterator foreach---------<br />";
foreach ($fruits as $key => $value) {
  echo $key , ' : ' , $value ,'<br />';
}
echo "-------use iterator while------------<br />";
$iterator->rewind();
while ($iterator->valid()) {
  echo $iterator->key() , ' : ' , $iterator->current() ,'<br />';
  $iterator->next();
}
//跳过元素进行打印
echo "--------use seek before while-------<br />";
$iterator->rewind();
if ($iterator->valid()) {
  $iterator->seek(1);
  while ($iterator->valid()) {
    echo $iterator->key() , ' : ' , $iterator->current() ,'<br />';
    $iterator->next();
  }
}
echo "--------use ksort before while-------<br />";
$iterator->ksort();
foreach ($fruits as $key => $value) {
  echo $key , ' : ' , $value ,'<br />';
}
echo "--------use asort before while-------<br />";
$iterator->asort();
foreach ($fruits as $key => $value) {
  echo $key , ' : ' , $value ,'<br />';
}
