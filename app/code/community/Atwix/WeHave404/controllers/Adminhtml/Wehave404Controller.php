<?php

class Atwix_Wehave404_Adminhtml_Wehave404Controller extends Mage_Adminhtml_Controller_Action
{
		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("wehave404/wehave404")->_addBreadcrumb(Mage::helper("adminhtml")->__("404  Manager"),Mage::helper("adminhtml")->__("404 Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    //$this->_title($this->__("404s"));
			    $this->_title($this->__("Atwix 404s"));

				$this->_initAction();
				$this->renderLayout();
		}
		/**
		 * Export order grid to CSV format
		 */
		public function exportCsvAction()
		{
			$fileName   = 'wehave404s.csv';
			$grid       = $this->getLayout()->createBlock('wehave404/adminhtml_wehave404_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'wehave404s.xml';
			$grid       = $this->getLayout()->createBlock('wehave404/adminhtml_wehave404_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
	
}