<?php
class Infusionsoft_Generated_ProductInterestBundle extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'BundleName', 'Description');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('ProductInterestBundle', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
