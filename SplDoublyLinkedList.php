<?php
$obj = new SplDoublyLinkedList();
//push把数据添加到链表top（顶部）位置
$obj ->push(1);
$obj ->push(2);
$obj ->push(3);
$obj ->unshift(11); //unshift把数据添加到bottom（底部）位置
print_r($obj);
$obj->rewind();//rewind操作用于把节点指针指向bottom所在的节点
echo 'current:'.$obj->current();//获取节点指针指向的节点（当前节点）
echo "<br />";
$obj->next();//使指针指向下一个节点（靠近top方向）
echo 'current:'.$obj->current();//
echo "<br />";
$obj->next();
echo 'current:'.$obj->current();//
echo "<br />";
//$obj->prev();//指针指向上一个节点（靠近bottom方向）
//echo 'current:'.$obj->current();
//$obj->next();
//$obj->next();
echo '<br />';
// if ($obj->current()) {
//   echo 'Current node valid <br />';
// }else {
//   echo 'Current node invaild<br />';
// }
// $obj->rewind();
//当前节点为有效节点，valid（）返回为true，否则返回false
// if ($obj->valid()) {
//   echo 'valid list';
// }else {
//   echo 'invaild list';
// }
echo 'Pop value :'.$obj->pop().'<br />';
echo 'current:'.$obj->current();
print_r($obj);
echo $obj->shift().'<br />';//把bottom节点从链表中删除，并返回
print_r($obj);
