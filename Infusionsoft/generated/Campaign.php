<?php
class Infusionsoft_Generated_Campaign extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'Name', 'Status');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('Campaign', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
