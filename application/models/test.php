<?php
	class Test extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		public function name($name) {
			$value = "Hi " . $name;
			return $value;
		}

	}
?>