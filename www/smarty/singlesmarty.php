<?php
require_once 'smarty/Smarty.class.php';

class SingleSmarty extends Smarty {

	static public function instance() {
		static $_instance = null;
		return null === $_instance ? $_instance = new Smarty() : $_instance;
	}

}