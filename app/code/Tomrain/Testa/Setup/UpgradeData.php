<?php 
namespace Tomrain\Testa\Setup;
 use Magento\Framework\Setup\UpgradeDataInterface;
 use Magento\Framework\Setup\ModuleDataSetupInterface;
 use Magento\Framework\setup\ModuleContextInterface;

 class UpgradeData implements UpgradeDataInterface
 {
 	public funtion upgrade(ModuleDataSetupInterface $setup,ModuleContextInterface $context)
 		{
 			$setup->startSetup();
 			$tableName= $setup->getTable('app_customizer');
 			if ($setup->getConnection()->isTableExists($tableName) !=true)
 			{
			  $table=$setup->getConnection()->newTable($tableName)

			  ->addColumn(
			  	'id',)
 			}
		}
 }
