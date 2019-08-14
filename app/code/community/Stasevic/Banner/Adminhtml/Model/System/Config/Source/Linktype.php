<?php

class Stasevic_Banner_Adminhtml_Model_System_Config_Source_Linktype
{
  public function toOptionArray()
  {
    return array(
      array('value' => '_blank'  , 'label' => Mage::helper("adminhtml")->__('Blank')),
      array('value' => '_self' , 'label' => Mage::helper("adminhtml")->__('Self'))
    );
  }
}
?>