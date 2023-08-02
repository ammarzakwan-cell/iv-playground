<?php

function data(): array
{
	$data[] = [];
	for ($i=0; $i<10; ++$i)
	{
		$data[] = $i;
	}
	return $data;
}

function data2()
{
	for ($i=0; $i<10; ++$i)
	{
		yield $i+1 => $i;
	}
}

foreach (data2() as $key => $value) {
	echo $key . '=>' . $value . PHP_EOL;
}

foreach (data() as $key => $value) {
	echo $key . '=>' . $value . PHP_EOL;
}

var_dump(iterator_to_array(data());
