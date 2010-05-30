<?php
// Based heavily on http://steamcommunityapi.googlecode.com/svn/trunk/SteamAPI.class.php
// Copyright 2010 Rob McFadzean <rob.mcfadzean@gmail.com>
class Steam extends GenericRSS {
	function __construct($id) {
		if(is_numeric($id)) {
				$this->feedURL = "http://steamcommunity.com/profiles/{$id}/?xml=1";
		} else {
				$this->feedURL = "http://steamcommunity.com/id/".strtolower($id)."/?xml=1";
		}
	}
}