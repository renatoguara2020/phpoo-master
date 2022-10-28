<?php

require "vendor/autoload.php";

class Controller {

	public function make() {
		if (!$this->controllerExist()) {
			throw new ControllerNotExistException;
		}

		if (!$this->methodExists()) {
			throw new MethodNotExistException;
		}

		return 'controller';
	}

	private function controllerExist() {
		return true;
	}

	private function methodExists() {
		return false;
	}

}

class ControllerNotExistException extends Exception {

	public function message() {
		return "Erro ao criar controller";
	}

}

class MethodNotExistException extends Exception {

	public function message() {
		return "Erro ao chamar método";
	}

}

try {
	$controller = new Controller;
	$controller->make();
} catch (Exception $e) {
	var_dump($e->message());
}
