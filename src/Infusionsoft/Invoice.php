<?php
namespace S1mple\Infusionsoft\Infusionsoft;

use S1mple\Infusionsoft\Infusionsoft\Generated\Infusionsoft_Generated_Invoice;

class Infusionsoft_Invoice extends Infusionsoft_Generated_Invoice{	
    public function __construct($id = null, $app = null){
    	parent::__construct($id, $app);    	    	
    }
}

