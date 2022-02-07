<?php 

//wap in php to magic constants : __FILE__ and __DIR__

echo "File System Path is : ".__FILE__;
echo "\n";
echo "File System Path is : ".__DIR__;
echo "\n";
echo "Before Folder Path is : ".dirname(dirname(__DIR__));
echo "\n";
echo "Before Folder Path is : ".dirname(dirname(dirname(__DIR__)));
$laragon_path = dirname(dirname(dirname(__DIR__)));
echo "\n";
echo $laragon_path;
echo "\n";
echo "Different Path = ".$laragon_path."\\"."cloner"."\\";




