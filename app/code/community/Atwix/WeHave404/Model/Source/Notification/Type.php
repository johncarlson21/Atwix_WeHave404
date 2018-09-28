<?php
/**
 * Atwix
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 * @category    Atwix Mod
 * @package     Atwix_WeHave404
 * @author      Atwix Core Team
 * @copyright   Copyright (c) 2015 Atwix (http://www.atwix.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * New updates from John Carlson
 */

class Atwix_WeHave404_Model_Source_Notification_Type
{
    public function toOptionArray()
    {
        $helper = Mage::helper('atwix_wehave404');
        $optionArray = array(
            '0' => $helper->__('Log File'),
            '1' => $helper->__('Email Notification')
        );

        return $optionArray;
    }

}