<?php

class exampleController extends Controller {

	public function index(){
		$allRecords=$this->model->load();		// просим у модели все записи
		$this->setResponce($allRecords);		// возвращаем ответ 
	}

	public function view($data){
		$thisRecord=$this->model->load($data['id']); // просим у модели конкретную запись
		$this->setResponce($thisRecord);
	}

	public function add(){
        if((isset($_POST['id'])) && (isset($_POST['name'])) && (isset($_POST['image']))
            && (isset($_POST['power'])) && (isset($_POST['speed']))) 
			{
            $dataToSave=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['power'], 'speed'=>$_POST['speed']);
			
            $addedItem=$this->model->create($dataToSave);
			
            $this->setResponce($addedItem);
        }

	public function edit($id){
		// НАПИШИТЕ РЕАЛИЗАЦИЮ метода save в классе Model

	}	

}