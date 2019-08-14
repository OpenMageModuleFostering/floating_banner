<?php
class Stasevic_Banner_Adminhtml_Model_System_Config_Source_leftright
{
  public function toOptionArray()
  {
    return array(
      array('value' => 'left'  , 'label' => Mage::helper("adminhtml")->__('Left')),
      array('value' => 'right' , 'label' => Mage::helper("adminhtml")->__('Right')),
    );
  }
}