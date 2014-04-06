<?php

class Penyelenggara extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'penyelenggara';
    }

    public function relations(){
    	return array(
    		'modul'=>array(self::HAS_MANY,'Modul_layanan','Id'),
    	);
    }
}

?>