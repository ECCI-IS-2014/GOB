<?php
class LogbooksController extends AppController {

	var $name = 'Logbooks';

	function index() {
		$this->Logbook->recursive = 0;
		$this->set('logbooks', $this->paginate());
	}


}
