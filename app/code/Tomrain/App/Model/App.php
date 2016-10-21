<?php 
namespace Tomrain\App\Model;
use magento\Framework\Model\AbstractModel;

class App extends AbstractModel
{
	public function __construct()
	{
		$this->_init('Tomrain\App\Model\ResourceModel\App')
	}
}