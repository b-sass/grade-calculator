<?php

class User {
	private $userID;
	private $username;
	private $email;
	private $password;

	function __get($name) {
		return $this->$name;
	}

	function __set($name, $value) {
		$this->$name = $value;
	}
}