<?php
namespace A2bizz\Sample\Model;
class Sample extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'a2bizz_sample';

	protected $_cacheTag = 'a2bizz_sample';

	protected $_eventPrefix = 'a2bizz_sample';

	protected function _construct()
	{
		$this->_init('A2bizz\Sample\Model\ResourceModel\Sample');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
