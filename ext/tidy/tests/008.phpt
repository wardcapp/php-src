--TEST--
Accessing the error buffer via $obj->error_buf...
--SKIPIF--
<?php if (!extension_loaded("tidy") || !class_exists("tidy_doc")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
    	$a = tidy_parse_string("<HTML><asd asdf></HTML>");
	echo $a->error_buf;
 
?>
--EXPECT--
line 1 column 1 - Warning: missing <!DOCTYPE> declaration
line 1 column 7 - Error: <asd> is not recognized!
line 1 column 7 - Warning: discarding unexpected <asd>
line 1 column 17 - Warning: discarding unexpected </html>
line 1 column 7 - Warning: inserting missing 'title' element