<?php
// Based heavily on http://steamcommunityapi.googlecode.com/svn/trunk/SteamAPI.class.php
// Copyright 2010 Rob McFadzean <rob.mcfadzean@gmail.com>
class Steam {
	private $customURL;
	private $steamID64;
	private $gameList;
	
	function Steam($id) {
		if(is_numeric($id)) {
				$this->steamID64 = $id;
		} else {
				$this->customURL = strtolower($id);
		}
	}
	private function baseUrl() {
		if (empty($this->customURL)) {
				return "http://steamcommunity.com/profiles/{$this->steamID64}";
		} else {
				return "http://steamcommunity.com/id/{$this->customURL}";
		}
	}
	public function retrieveProfile() {
		$url = $this->baseUrl()."/?xml=1";
		$profileData = new SimpleXMLElement(Mash::grab($url));
		return $profileData;
	}  
}