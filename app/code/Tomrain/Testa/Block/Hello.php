<?php
namespace Tomrain\Testa\Block; 
use Magento\Framework\View\Element\Template\Context;
//use Magento\Catalog\Model\ProductFactory;

class Hello extends \Magento\Framework\View\Element\Template
{
	 public function __constrct(\Magento\Framework\View\Element\Template\Context $context)//,ProductFactory $ProductFactory,	array $data= array())
	{
	 	parent::__construct($context);//,$data);
	// 	//$this->_ProductFactory= $ProductFactory;
	 }
	// public function getProductCollection()
	// {
	// 	return $this->_ProductFactory->create()->getCollection();
	// }
	public function getHelloWorldTxt()
    {
    	return __("hai this is magento 2");
       }
       
}

