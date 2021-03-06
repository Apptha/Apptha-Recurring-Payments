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
 * @package     Apptha_RecurringPayments
 * @version     0.1.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
/**
 * Createsubscriptions_Edit Tabs block
 */
class Apptha_Recurringpayments_Block_Adminhtml_Createsubscriptions_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {
	
	// Prepare construct for createsubscriptions tabs
	public function __construct() {
		parent::__construct ();
		$this->setId ( 'createsubscriptions_tabs' );
		$this->setDestElementId ( 'edit_form' );
		$this->setTitle ( Mage::helper ( 'recurringpayments' )->__ ( 'Subscriptions Information' ) );
	}
	protected function _beforeToHtml() {
		
		// assigning general tab.
		$this->addTab ( 'general_section', array (
				'label' => Mage::helper ( 'recurringpayments' )->__ ( 'General' ),
				'title' => Mage::helper ( 'recurringpayments' )->__ ( 'General' ),
				'content' => $this->getLayout ()->createBlock ( 'recurringpayments/adminhtml_createsubscriptions_edit_tab_general' )->toHtml () 
		) );
		
		// assigning subscription Types tab.
		$this->addTab ( 'subscriptiontype_section', array (
				'label' => Mage::helper ( 'recurringpayments' )->__ ( 'Subscription Types' ),
				'title' => Mage::helper ( 'recurringpayments' )->__ ( 'Subscription Types' ),
				'content' => $this->getLayout ()->createBlock ( 'recurringpayments/adminhtml_createsubscriptions_edit_tab_create' )->toHtml () 
		)
		 );
		
		return parent::_beforeToHtml ();
	}
}