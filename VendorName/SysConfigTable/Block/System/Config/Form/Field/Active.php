<?php
/**
 * VendorName_SysConfigTable
 *
 * @category    VendorName
 * @package     VendorName_SysConfigTable
 * @copyright   Copyright (c) 2017 Optaros
 * @author      Stefan Iurasog <stefan.iurasog@gmail.com>
 */
namespace VendorName\SysConfigTable\Block\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class Active
 *
 * @package VendorName\SysConfigTable\Block\System\Config\Form\Field
 */
class Active extends AbstractFieldArray {

	/**
	 * @var bool
	 */
	protected $_addAfter = TRUE;

	/**
	 * @var
	 */
	protected $_addButtonLabel;

	/**
	 * Construct
	 */
	protected function _construct() {
		parent::_construct();
		$this->_addButtonLabel = __('Add');
	}

	/**
	 * Prepare to render the columns
	 */
	protected function _prepareToRender() {
		$this->addColumn('field_1', ['label' => __('Field 1')]);
		$this->addColumn('field_2', ['label' => __('Field 2')]);
		$this->addColumn('field_3', ['label' => __('Field 3')]);
		$this->addColumn('field_4', ['label' => __('Field 4')]);
		$this->_addAfter       = FALSE;
		$this->_addButtonLabel = __('Add');
	}
}