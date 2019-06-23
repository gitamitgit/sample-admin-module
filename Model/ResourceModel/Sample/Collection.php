<?php
namespace A2bizz\Sample\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'sample_id';
	protected $_eventPrefix = 'a2bizz_sample_sample_collection';
	protected $_eventObject = 'sample_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('A2bizz\Sample\Model\Sample', 'A2bizz\Sample\Model\ResourceModel\Sample');
	}

}
