--TEST--
Ensure __isEmpty cannot be declared private. 
--FILE--
<?php
class A {
	private function __isEmpty() {
		return true;
	}
}
$a = new A();
?>
==DONE==
--EXPECTF--
Warning: The magic method __isEmpty() must have public visibility and cannot be static in %s on line 3
==DONE==
