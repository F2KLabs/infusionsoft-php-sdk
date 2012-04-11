<?php
class Infusionsoft_Generated_RecurringOrder extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'ContactId', 'ProgramId', 'StartDate', 'EndDate', 'LastBillDate', 'NextBillDate', 'PaidThruDate', 'BillingCycle', 'Frequency', 'BillingAmt', 'Status', 'ReasonStopped', 'AutoCharge', 'CC1', 'CC2', 'NumDaysBetweenRetry', 'MaxRetry', 'MerchantAccountId', 'AffiliateId', 'PromoCode', 'LeadAffiliateId');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('RecurringOrder', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}
