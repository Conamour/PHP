<?php

class menuController extends Controller {
		public function index(){
			$examples=$this->model->load();		
			$this->setResponce($examples);		
		}
}
?>