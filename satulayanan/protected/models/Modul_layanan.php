<?php

class Modul_layanan extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'modul_layanan';
    }

    public function relations(){
    	return array(
    		'penyelenggara'=>array(self::BELONGS_TO,'Penyelenggara','Penyelenggara'),
    	);
    }
}

?>