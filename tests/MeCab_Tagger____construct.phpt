--TEST--
MeCab_Tagger::__construct() member function
--SKIPIF--
<?php 

if(!extension_loaded('mecab')) die('skip ');

 ?>
--FILE--
<?php
echo 'OK'; // no test case for this function yet
?>
--EXPECT--
OK