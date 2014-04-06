<?php

class MainController extends Controller
{
	public $layout = 'mainLayout';

	public function actionIndex(){
		$this->render('index');
	}

	public function actionPenyelenggara(){
		$penyelenggara=Penyelenggara::model()->findAll(array(
			'select'=>'Nama',
			'order' => 'Nama'
		));

		$this->render('penyelenggara',array(
		    'penyelenggara'=>$penyelenggara,
		));
	}

	public function actionAjaxCol2($key){
		$modul = Modul_layanan::model()->findAll(array(
			'select'=>'Nama',
			'condition'=>'Penyelenggara=:penyelenggara',
			'order'=>'Nama',
			'params'=>array(':penyelenggara'=>$key)
		));

		foreach ($modul as $row) {
			echo "<li><a href='javascript:void(0)' id='".$row->Nama."'' class='btnModul'>".$row->Nama."</a></li>";
		}
		
	}

	public function actionLayanan($key){
		$this->render('layanan');
	}

	public function actionCari($key){
		$this->render('cari');
	}
}

?>