<?php
    class Singleton {
	private static $instance = null;
	private function __construct() {}
	public static function getInstance() {
	    if($instance == null) {
		$instance = new Singleton();
	    }
	    return $instance;
	}
    }
?>