<?php

class Atwix_WeHave404_Block_Adminhtml_Wehave404_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("404Grid");
				$this->setDefaultSort("at_date");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("wehave404/wehave404")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("at_id", array(
				"header" => Mage::helper("adminhtml")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "at_id",
				));
				$this->addColumn("at_url", array(
				"header" => Mage::helper("adminhtml")->__("Request URL"),
				"index" => "at_url"
				));
				$this->addColumn("at_referrer", array(
				"header" => Mage::helper("adminhtml")->__("Referral URL"),
				"index" => "at_referrer",
				));
                $this->addColumn("at_date", array(
				"header" => Mage::helper("adminhtml")->__("Date"),
				"index" => "at_date",
				));
                $this->addColumn("at_count", array(
				"header" => Mage::helper("adminhtml")->__("Count"),
				"index" => "at_count",
				));
				
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			/*$this->setMassactionIdField('at_id');
			$this->getMassactionBlock()->setFormFieldName('at_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_testimony', array(
					 'label'=> Mage::helper('testimonials')->__('Remove Testimony'),*/
					 //'url'  => $this->getUrl('*/adminhtml_testimony/massRemove'),
					 /*'confirm' => Mage::helper('testimonials')->__('Are you sure?')
				));
			return $this;*/
		}
			

}
