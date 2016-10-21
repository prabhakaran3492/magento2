<?php
namespace Tomrain\App\Model\ResourceModel\App;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollecion;

class Collection extends AbstractCollecion
{
	protected function __construct()
	{
		$this->_init('Tomrain\App\Model\App','Tomrin\App\Model\ResourceModel\App');
	}
}