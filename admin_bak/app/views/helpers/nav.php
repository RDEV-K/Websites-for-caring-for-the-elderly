<?php
class NavHelper extends AppHelper {

	var $helpers = array('Html');

	function link($title, $class = '', $url = null, $options = array(), $confirmMessage = false) {
		$currentUrlData = array(
			'controller' => $this->params['controller'],
			'action' => $this->params['action'],
			'admin' => isset($this->params['admin']) ? $this->params['admin'] : 0,
		);

		$currentUrl = $this->Html->url($currentUrlData);
		//debug($currentUrl);
		$targetUrl = $this->Html->url($url);
		//debug($targetUrl);
		$targetUrlLength = strlen($targetUrl);

		/*
		if (!$this->startsWith($currentUrl, $targetUrl)) {
			$class = '';
		}
		*/

		if ($currentUrl != $targetUrl) {
			$class = '';
		}

		if (!empty($class)) {
			$class = " class='$class'";
		}

		return "<li$class>".$this->Html->link($title, $url, $options, $confirmMessage)."</li>";
	}

	private function startsWith($haystack, $needle) {
		$length = strlen($needle);
    	return (substr($haystack, 0, $length) === $needle);
	}

}