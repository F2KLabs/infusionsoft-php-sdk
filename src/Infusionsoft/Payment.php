<?php
namespace S1mple\Infusionsoft\Infusionsoft;

use S1mple\Infusionsoft\Infusionsoft\Generated\Infusionsoft_Generated_Payment;

class Infusionsoft_Payment extends Infusionsoft_Generated_Payment{	
    public function __construct($id = null, $app = null){
    	parent::__construct($id, $app);    	    	
    }
}

