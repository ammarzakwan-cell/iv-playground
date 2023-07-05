<?php

class Cart
{
	protected array $cart = [];
	public function __construct(protected string $hi, protected array $catalog) {
	}
	
	public function store(string $item)
	{
		$this->cart[] = $item;
	}
	
	public function displayCart(): array
	{
		return $this->cart;
	}
	
	public function getValue()
	{
		echo $this->hi . ' myname';
	}
	
	public function calc(): float
	{
		$total = 0;
		foreach($this->cart as $item) {
			$no = $this->search($item);
			if ($no != 0) {
				$total+=$no;
			}
		}
		return $total;
	}
	
	public function search(string $item) 
	{
		foreach($this->catalog as $key => $value) {
			if ($key == $item) {
				return $value ?? 0;
			}
		}
	}
}

$test = new Cart('hello world', ['test' => 2.4, 'tv' => 1.5, 'cofe' => 3]);
// $test->store('test');
$test->store('tv');
$test->store('cofe');
$test->getValue();
$items = $test->displayCart();
foreach($items as $item) {
	echo PHP_EOL . $item . PHP_EOL;
}

var_dump($test->calc());
