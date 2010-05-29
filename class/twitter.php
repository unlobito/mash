<?php
class Twitter {
	public $username;
	function Twitter($username) {
		$this->username = $username;
	}
	function user_timeline() {
		$data = Mash::grab("http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=".$this->username);
		$data = simplexml_load_string($data);
		return $data;
	}
}