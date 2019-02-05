<?php

/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Recurringpayments
 * @version     0.1.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
	/**
	 * Recurringpayments Model Istrue Block
	 */
class Apptha_Recurringpayments_Model_Istrue extends Varien_Object
{

	const STATUS_NO	= 0;
	const STATUS_YES= 1;
	
	/**
	 * get Status type list
	 * @return array
	 */
	static public function getOptionArray()
	{
		return array(
				self::STATUS_NO    => Mage::helper('recurringprofiles')->__('No'),
				self::STATUS_YES   => Mage::helper('recurringprofiles')->__('Yes'),
				
		);
	}
}