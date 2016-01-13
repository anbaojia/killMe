<?php 
	// class Index{
	function index(&$array,$field,$desc = true){
		$fieldArray = [];
		foreach ($array as $k => $v) {
			$fieldArray[$k] = $v[$field];
		}
		$sort = $desc === false?SORT_ASC:SORT_DESC;
		array_multisort($fieldArray,$sort,$array);
		return $array;
	}
	// }
	$array = array(
		0=>array(
			'name'=>'anbaojia',
			'age'=>28,
		),
		1=>array(
			'name'=>'anbaojia',
			'age'=>29,
		),
		2=>array(
			'name'=>'anbaojia',
			'age'=>128,
		),
		3=>array(
			'name'=>'anbaojia',
			'age'=>8,
		),
		4=>array(
			'name'=>'anbaojia',
			'age'=>18,
		),
		5=>array(
			'name'=>'anbaojia',
			'age'=>38,
		),
	);
	// $index = new Index;
	$array = index($array,'age',false);
	var_dump($array);
 ?>