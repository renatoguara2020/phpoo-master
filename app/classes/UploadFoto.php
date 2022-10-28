<?php

namespace app\classes;

// acoplamento
// composicao
// favoreça a composiçao sobre a herança

class UploadFoto extends Upload {

	protected $extensions = ['png', 'jpg'];
	private $upload;

	public function __construct() {
		$this->upload = new Upload;
	}

	public function newName() {
		return $this->newName;
	}

	public function upload() {
		$this->upload->rename();
		// return "Gerou a foto {$this->rename()}";
	}

}