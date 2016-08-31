<?php
$file = new FilesystemIterator('.');
foreach ($file as $value) {
  print("%s\t%s\t%8s\t%s\n",
   date('Y-m-d H:i:s',$value->getMTime()),
   $value->isDir()?"<DIR>":"",
   number_format($value->getSize()),
   $value->getFileName()
  );
  echo ,'<br />';
}
