<?php
$installer = $this;

$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$entityTypeId     = $setup->getEntityTypeId('customer');
$attributeSetId   = $setup->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $setup->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$installer->addAttribute("customer", "couponsSent",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Coupons Sent",
    "input"    => "text",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => "Coupons Sent"

        ));

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "couponsSent");


$setup->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'couponsSent',
    '999'  //sort_order
);
