--TEST--
Ensure __isEmpty cannot be declared protected. 
--FILE--
<?php
class A {
	protected function __isEmpty() {
		return true;
	}
}
$a = new A();
?>
==DONE==
--EXPECTF--
Warning: The magic method __isEmpty() must have public visibility and cannot be static in %s on line 3
==DONE==
