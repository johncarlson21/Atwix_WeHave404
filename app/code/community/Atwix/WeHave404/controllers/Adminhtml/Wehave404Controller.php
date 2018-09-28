<?php

class Atwix_WeHave404_Adminhtml_Wehave404Controller extends Mage_Adminhtml_Controller_Action
{
		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("wehave404/wehave404")->_addBreadcrumb(Mage::helper("adminhtml")->__("404  Manager"),Mage::helper("adminhtml")->__("404 Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("404s"));
			    $this->_title($this->__("404 Testimony"));

				$this->_initAction();
				$this->renderLayout();
		}
	
}