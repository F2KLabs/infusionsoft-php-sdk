<?php
class Infusionsoft_Generated_ActionSequence extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'TemplateName');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('ActionSequence', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
