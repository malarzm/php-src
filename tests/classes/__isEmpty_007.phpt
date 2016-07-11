--TEST--
Ensure __isEmpty is working on empty($this) call. 
--FILE--
<?php
class A {
	public function __isEmpty() {
		return true;
	}

	public function go() {
		echo empty($this) ? "YES" : "NO", "\n";
	}
}
(new A())->go();
?>
==DONE==
--EXPECTF--
YES
==DONE==
