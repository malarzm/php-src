--TEST--
Ensure __isEmpty is working.
--FILE--
<?php
class Stack {
	private $stack = [];

	public function __isEmpty() {
		return empty($this->stack);
	}

	public function push($value) {
		$this->stack[] = $value;
	}

	public function pop($value) {
		return array_pop($this->value);
	}
}
$s = new Stack();
var_dump(empty($s));
$s->push(1);
var_dump(empty($s));
?>
==DONE==
--EXPECTF--
bool(true)
bool(false)
==DONE==
