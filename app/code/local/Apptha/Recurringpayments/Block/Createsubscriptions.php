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
 * Createsubscriptions Type block
 */
class Apptha_Recurringpayments_Block_Createsubscriptions extends Mage_Core_Block_Template {
	
	public function _prepareLayout() {
		return parent::_prepareLayout ();
	}
	
	/**
	 * Get a registry data of 'Managesubscriptions'
	 *
	 * @return string
	 */
	public function getManagesubscriptions() {
		if (! $this->hasData ( 'createsubscriptions' )) {
			$this->setData ( 'createsubscriptions', Mage::registry ( 'createsubscriptions' ) );
		}
		return $this->getData ( 'createsubscriptions' );
	}
}