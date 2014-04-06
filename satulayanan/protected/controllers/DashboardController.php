<?php

class DashboardController extends Controller
{
	public $layout = 'dashboardLayout';

	public function actionIndex(){
		$this->render('index');
	}


}

?>