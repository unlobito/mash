<?php
class Twitter extends GenericRSS {
	function __construct($username) {
		$this->feedURL = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=".$username;
	}
}