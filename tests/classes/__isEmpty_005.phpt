--TEST--
Ensure __isEmpty is working when object is stored in a static property.
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
class StaticStack {
	public static $stack;
}
StaticStack::$stack = new Stack();
var_dump(empty(StaticStack::$stack));
StaticStack::$stack->push(1);
var_dump(empty(StaticStack::$stack));
?>
==DONE==
--EXPECTF--
bool(true)
bool(false)
==DONE==
