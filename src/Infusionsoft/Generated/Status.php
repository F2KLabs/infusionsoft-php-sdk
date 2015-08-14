<?php
namespace S1mple\Infusionsoft\Infusionsoft\Generated;
/**
 * @property String Id
 * @property String StatusName
 * @property String StatusOrder
 * @property String TargetNumDays
 */
class Infusionsoft_Generated_Status extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'StatusName', 'StatusOrder', 'TargetNumDays');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('Status', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
	
	public function addCustomField($name){
		self::$tableFields[] = $name;
	}

    public function removeField($fieldName){
        $fieldIndex = array_search($fieldName, self::$tableFields);
        if($fieldIndex !== false){
            unset(self::$tableFields[$fieldIndex]);
            self::$tableFields = array_values(self::$tableFields);
        }
    }
}