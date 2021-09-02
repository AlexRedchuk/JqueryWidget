<?php
/**
 * Elogic Block Widget News
 *
 * @category Elogic
 * @Package Elogic/MyModule
 * @copyright 2021 Elogic
 */
namespace Elogic\MyModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class ReadMore
 *
 * @package Elogic\MyModule\Block\Widget
 */
class ReadMore extends Template implements BlockInterface
{
    /**
     * Template for ajax.
     *
     * @var string
     */
    protected $_template = "Elogic_MyModule::widget/readMore.phtml";

    /**
     * Get block width.
     *
     * @return int
     */
    public function getWidth():int
    {
        return $this->getData('width');
    }


    /**
     * Get template.
     *
     * @return int
     */
    public function getExpandHeight(): int
    {
        return $this->getData('expandHeight');
    }

    /**
     * Get limit.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->getData('text');
    }

}
