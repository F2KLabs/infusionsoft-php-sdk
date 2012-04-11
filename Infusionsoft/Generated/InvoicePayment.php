<?php
class Infusionsoft_Generated_InvoicePayment extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'InvoiceId', 'Amt', 'PayDate', 'PayStatus', 'PaymentId', 'SkipCommission');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('InvoicePayment', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
	
	public function addCustomField($name){
		self::$tableFields[] = $name;
	}
}
