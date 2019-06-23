<?php

namespace A2bizz\Sample\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{	
	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		
		$this->createTableA2bizzSample($installer, $setup);
			
		$installer->endSetup();
	}
		
	public function createTableA2bizzSample($installer, $setup){
		if (!$installer->tableExists('a2bizz_sample')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('a2bizz_sample')
			)->addColumn(
				'sample_id',
				\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
				null,
				[
					'identity' => true,
					'nullable' => false,
					'primary'  => true,
					'unsigned' => true,
				],
				'Id'
			)->addColumn(
				'title',
				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				255,
				['nullable => false'],
				'Title'
			)->addColumn(
				'content',
				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				'64k',
				[],
				'Content'
			)->addColumn(
				'status',
				\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
				1,
				[],
				'Status'
			)->addColumn(
				'featured_image',
				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				255,
				[],
				'Featured Image'
			)->addColumn(
				'created_at',
				\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
				null,
				['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
				'Created At'
			)->addColumn(
				'updated_at',
				\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
				null,
				['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
				'Updated At'
			)->setComment('Sample Table');
			
			$installer->getConnection()->createTable($table);
			$installer->getConnection()->addIndex(
				$installer->getTable('a2bizz_sample'),
				$setup->getIdxName(
					$installer->getTable('a2bizz_sample'),
					['title', 'content', 'featured_image'],
					\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
				),
				['title', 'content', 'featured_image'],
				\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
			);
		}
	}
}
