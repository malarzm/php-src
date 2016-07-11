--TEST--
Ensure __isEmpty is working on expression's result. 
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
class StackWrapper {
	private $stack;

	public function __construct(Stack $s) {
		$this->stack = $s;
	}

	public function getStack() : Stack {
		return $this->stack;
	}
}
$s = new StackWrapper(new Stack());
var_dump(empty($s->getStack()));
$s->getStack()->push(1);
var_dump(empty($s->getStack()));
?>
==DONE==
--EXPECTF--
bool(true)
bool(false)
==DONE==
