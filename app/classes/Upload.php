<?php

namespace app\classes;

use app\traits\ValidationFile;

abstract class Upload {

	use ValidationFile;

	private $file;
	protected $newName;

	public function __construct($file) {
		$this->file = $file;
	}

	protected function extension() {
		return pathinfo($this->file, PATHINFO_EXTENSION);
	}

	protected function rename() {
		$uniqId = uniqid(true);
		$this->newName = $uniqId . '.' . $this->extension();
		return $uniqId . '.' . $this->extension();
	}

}