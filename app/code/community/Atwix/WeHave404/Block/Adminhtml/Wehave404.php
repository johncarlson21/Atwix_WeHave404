<?php


class Atwix_Wehave404_Block_Adminhtml_Wehave404 extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_wehave404";
	$this->_blockGroup = "atwix_wehave404";
	$this->_headerText = Mage::helper("adminhtml")->__("404 Manager");
	//$this->_addButtonLabel = Mage::helper("wehave404")->__("Add New Item");
	parent::__construct();
	
	}

}