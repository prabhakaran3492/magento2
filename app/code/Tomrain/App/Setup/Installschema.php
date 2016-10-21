<?php 
namespace Tomrain\App\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class InsatllSchema implements InstallSchemaInterface
{
	public function install(ModuleContextInterface $context, SchemaSetupInterface $setup)
	{
		$installer =$setup;
		$installer->startSetup();
		$table= $installer->getConnection()->newTable($installer->getTable('app_Customizer'))
		->addColumn('id',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['identity'=>true,'unsigned'=>true,'nullable'=>false,'primary'=>true],'ID')
		->addColumn('name',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,200,['nullable'=>false],'NAME')
		->addColumn('contact',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,100,['nullable'=>false],'CONTACT')
		->setComment('app_Customizer');
		$installer->getConnection()->createTable($table);
		$installer->endSetup();
	}
}