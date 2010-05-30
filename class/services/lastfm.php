<?php
class LastFM extends GenericRSS {
	function __construct($username) {
		$this->feedURL = "http://ws.audioscrobbler.com/1.0/user/".$username."/recenttracks.rss";
	}
}