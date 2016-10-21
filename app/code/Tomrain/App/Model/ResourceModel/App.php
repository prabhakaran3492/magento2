<?php 
namespace Tomrain\App\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class App extends AbstractDb
{
	public function __construct()
	{
		$this->_init('app_customizer','id');
	}
}