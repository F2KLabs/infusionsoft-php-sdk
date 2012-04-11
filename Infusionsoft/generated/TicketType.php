<?php
class Infusionsoft_Generated_TicketType extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'CategoryId', 'Label');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('TicketType', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
