<?php
$queue = new SplQueue();
$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');
echo 'bottom is ',$queue -> bottom() . '<br />';
echo 'top is ',$queue -> top() . '<br />';
$queue -> offsetSet(0,'C');
print_r($queue);
$queue -> rewind();
echo 'current is ', $queue->current(),'<br />';
while ($queue -> valid()) {
  echo $queue -> key() ,'=>',$queue -> current(),'<br />';
  $queue->next();
}
echo $queue->dequeue();
