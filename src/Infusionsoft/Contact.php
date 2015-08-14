<?php
namespace S1mple\Infusionsoft\Infusionsoft;

use S1mple\Infusionsoft\Infusionsoft\Generated\Infusionsoft_Generated_Contact;

class Infusionsoft_Contact extends Infusionsoft_Generated_Contact{
    var $customFieldFormId = -1;
    public function __construct($id = null, $app = null){
    	parent::__construct($id, $app);    	    	
    }
}

