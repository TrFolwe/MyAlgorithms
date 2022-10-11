<?php
//SO BAD PHP

class Filter {
	private array $array = [
	[
		"bookName" => "Kitap1",
		"bookWriter" => "Yazar1",
		"bookPage" => 100,
		"bookShelf" => 5,
		"bookBlok" => "A",
		"bookPublisher" => "Yayin1"
	], [
		"bookName" => "Kitap2",
		"bookWriter" => "Yazar2",
		"bookPage" => 150,
		"bookShelf" => 6,
		"bookBlok" => "B",
		"bookPublisher" => "Yayin2"
	], [
		"bookName" => "Kitap3",
		"bookWriter" => "Yazar3",
		"bookPage" => 200,
		"bookShelf" => 7,
		"bookBlok" => "C",
		"bookPublisher" => "Yayin3"
	]
];

private array $mappedData;

public function __construct() {
	$this->mappedData = array_map(fn ($i) => $this->array[$i], array_keys($this->array));
}

public function Filter(array $filterData):array {
	$evalArray = [];
	foreach($filterData as $key => $value) $evalArray[] = '$c["'.$key.'"] == "'.$value.'"';
	return array_filter($this->mappedData, fn($c) => eval(implode(" || ", $evalArray).";"));
}
}

$ListAlgorithm = new ListAlgorithm();
$data = $ListAlgorithm->Filter(["bookName" => "Kitap1"]);
var_dump($data);