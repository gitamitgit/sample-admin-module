<?php

namespace A2bizz\Sample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_sampleFactory;

	public function __construct(
		\A2bizz\Sample\Model\SampleFactory $sampleFactory
	)
	{
		$this->_sampleFactory = $sampleFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$sampleData = [
			[
				'title'		=> "Add First Sample Data ",
				'content'	=> "Magento 2 Content, we will garb it with wisywig Editor",
				'status'       => 1
			],
			[
				'title'		=> "Add Second Sample Data ",
				'content'	=> "Magento 2 Content, we will garb it with wisywig Editor for second",
				'status'       => 1
			]
		];
				
		foreach ($sampleData as $data) {
			$sample = $this->_sampleFactory->create();
            $sample->addData($data)->save();
        }
		
		//$sample = $this->_sampleFactory->create();
		//$sample->addData($data)->save();
	}
}
