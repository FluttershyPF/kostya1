<?php

class A
{
}

class B extends A
{
	public function __construct($b)
	{
		$this ->b = $b;

	}
	
	protected $b;

}

class C extends B
{
	public function __construct($a, $b, $c, $d)
	{
		$this ->c = $c;
		$this ->b = $b;
		$this ->d = $d;
		parent::__construct($a);
	}
	protected $b;
	protected $c;
	protected $d;
}
$a1 = new A();
$a2 = new A();
$a3 = new A();
$b4 = new B($a1);
$c5 = new C($a1, $a2, $a3, $b4);
$c5 =