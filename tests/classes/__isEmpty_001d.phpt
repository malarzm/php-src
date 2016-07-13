--TEST--
Ensure __isEmpty cannot be declared static in interface. 
--FILE--
<?php
interface A {
	static function __isEmpty();
}
?>
==DONE==
--EXPECTF--
Warning: The magic method __isEmpty() must have public visibility and cannot be static in %s on line 3
==DONE==
