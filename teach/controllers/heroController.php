<?php

class heroController extends Controller {

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

	public function edit($id) {
        $_PUT=json_decode(file_get_contents('php://input'));
        if((isset($_POST['id'])) && (isset($_POST['name'])) && (isset($_POST['image']))
            && (isset($_POST['power'])) && (isset($_POST['speed']))) 
			{
            $dataToUpdate=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['[power'], 'speed'=>$_POST['speed']);
			
            $editItem=$this->model->save($dataToUpdate, $data['id']);
			
            $this->setResponce($editItem);
        }
    }
	
	 public function delete($data) {
        $example = $this->model->delete($data['id']);
        $this->setResponce($example);
    }
}