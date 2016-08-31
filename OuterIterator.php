<?php
/**
 *
 */
class OuterImpl extends IteratorIterator
{
    public function current(){
      return parent::current()."_tail";
    }
    public function key(){
      return "heihei_".parent::key();
    }
}
$fruits = array(
  'apple' => 'apple value',
  'orange' => 'orange value',
  'plum' => 'plum value',
  'banana' => 'banana value',
  'grape' => 'grape value'
);
$outer = new OuterImpl(new ArrayIterator($fruits));
foreach ($outer as $key => $value) {
  echo $key , "---" ,$value ,"<br />";
}
