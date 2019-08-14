<?php

 /**
 * Virtina
 * @package    Virtina_Cartcleaner
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
class Virtina_Cartcleaner_Block_Adminhtml_Cartcleaner extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
	$this->_controller = 'adminhtml_cartcleaner';
	$this->_blockGroup = 'cartcleaner';
	$this->_headerText = Mage::helper('cartcleaner')->__('Shopping Cart');	
	
	$this->_addButton('cartcleaner_controller', array(
       'label'   => $this->__('Clear All Cart'),
       'onclick' => "setLocation('".$this->getUrl('*/*/clearall')."')",
    ));
   
	$this->_addButton('cartcleaner_guest', array(
       'label'   => $this->__('Clear Guest Cart'),
       'onclick' => "setLocation('".$this->getUrl('*/*/clearguest')."')",
    ));	
    	    
	parent::__construct();
	$this->_removeButton('add');
  } 
}
