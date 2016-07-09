--TEST--
Ensure __isEmpty is working when object is stored in property.
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
$a = new \stdClass();
$a->s = new Stack();
var_dump(empty($a->s));
$a->s->push(1);
var_dump(empty($a->s));
?>
==DONE==
--EXPECTF--
bool(true)
bool(false)
==DONE==
