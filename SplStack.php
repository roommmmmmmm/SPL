<?php
$stack = new SplStack();
$stack -> push('a');
$stack -> push('b');
$stack -> push('c');
print_r($stack);
echo 'bottom is ',$stack -> bottom() . '<br />';
echo 'top is ',$stack -> top() . '<br />';
$stack -> offsetSet(0,'C');
$stack -> rewind();
echo 'current is ', $stack->current(),'<br />';
$stack -> next();
echo 'current is ', $stack->current(),'<br />';
//遍历堆栈
$stack -> rewind();
while ($stack -> valid()) {
  echo $stack -> key() ,'=>',$stack -> current(),'<br />';
  $stack -> next();
}
echo $stack -> pop() , '<br />';
// $stack -> pop();
print_r($stack);
