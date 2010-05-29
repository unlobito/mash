<?php
class Foursquare {
	public $feed;
	function Foursquare($feed) {
		$this->feed = $feed;
	}
	function retrieveCheckins() {
		$data = Mash::grab($this->feed);
		$data = simplexml_load_string($data);
		return $data;
	}
}