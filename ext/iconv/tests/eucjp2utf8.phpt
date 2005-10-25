--TEST--
EUC-JP to UTF8
--SKIPIF--
<?php include('skipif.inc'); ?>
--INI--
error_reporting=2039
unicode.script_encoding=ISO-8859-1
unicode.output_encoding=ISO-8859-1
--FILE--
<?php
/* include('test.inc'); */
/* charset=EUC-JP */

$str = "
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
";

$str = iconv("EUC-JP", "UTF-8", $str); /* libiconv(1.8) doesn't know "UTF8" but "UTF-8". */ 
$str = base64_encode($str);
echo $str."\n";

?>
--EXPECT--
CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0CuaXpeacrOiqnuODhuOCreOCueODiOOBqEVuZ2xpc2ggVGV4dArml6XmnKzoqp7jg4bjgq3jgrnjg4jjgahFbmdsaXNoIFRleHQK5pel5pys6Kqe44OG44Kt44K544OI44GoRW5nbGlzaCBUZXh0Cg==

