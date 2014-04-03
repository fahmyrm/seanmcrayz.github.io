<?php

class HomeController extends Controller
{
	public $layout = 'headerfooter';

	public function actionIndex(){
		$this->render('index');
	}
}

?>