<?php
class MySimpleHeap extends SplHeap
{
  // 8 4 8 4 1 0
  // public function compare( $value1, $value2 ) {
  //   return $value1 < $value2 ? -1 : 1; //最大堆
  // }
  // 0 4 0 1 4 8
  public function compare( $value1, $value2 ) {
    return $value1 > $value2 ? -1 : 1; //最小堆
  }
}

$obj = new MySimpleHeap();
$obj->insert( 4 );
$obj->insert( 8 );
$obj->insert( 1 );
$obj->insert( 0 );

echo $obj->top(); //输出根节点的元素
echo $obj->count(); //4

foreach( $obj as $number ) {
 echo $number;
}
