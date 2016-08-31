<?php
/**
 * 实现countable接口
 */
class MyCount implements Countable
{
   protected $MyCount = 3;
   public function count(){
     return $this->MyCount;
   }
}
$obj = new MyCount();
echo count($obj);
