<?php
namespace S1mple\Infusionsoft\Infusionsoft;

use S1mple\Infusionsoft\Infusionsoft\Generated\Infusionsoft_Generated_Lead;

class Infusionsoft_Lead extends Infusionsoft_Generated_Lead{
    var $customFieldFormId = -4;
    public function __construct($id = null, $app = null){
    	parent::__construct($id, $app);    	    	
    }
}

