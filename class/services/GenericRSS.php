<?php
class GenericRSS {
	public $feedURL;
	function __construct($feedURL) {
		$this->feedURL = $feedURL;
	}
	function pull() {
		$data = Mash::grab($this->feedURL);
		$data = simplexml_load_string($data);
		return $data;
	}
}