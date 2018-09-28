<?php

class Atwix_WeHave404_Model_Wehave404 extends Mage_Core_Model_Abstract
{
    protected function _construct(){

       $this->_init("wehave404/wehave404");

    }
	
	public function get404s() {
		$results = $this->getCollection()->setOrder('at_date', 'DESC');
		return $results;
	}
	
}