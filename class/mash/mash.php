<?php
class Mash {
	public function grab($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mash Engine http://henriwatson.github.com/mash/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	public function loadServices($services) {
		foreach ($services as $service) {
			include './class/services/'.$service.'.php';
		}
	}
	public function loadTemplate($path, $data = Array()) {
		extract($data);
		include($path);
		exit;
	}
	public function fuzzyTime($time) {
		$real = time() - $time;
		if (floor($real) < 60) {
			$ago = floor($real).' seconds ago';
		} else if (floor($real/60) < 60) {
			$ago = floor($real/60).' minutes ago';
		} else if (floor($real/60/60) < 24) {
			$ago = floor($real/60/60).' hours ago';
		} else if (floor($real/60/60/24) < 31) {
			$ago = floor($real/60/60/24).' days ago';
		} else {
			$ago = 'a long time ago';
		}
		return $ago;
	}
}