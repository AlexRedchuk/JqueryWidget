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
     * Template for read more block.
     *
     * @var string
     */
    protected $_template = "Elogic_MyModule::widget/readMore.phtml";

    /**
     * Get block width.
     *
     * @return string
     */
    public function getWidth():string
    {
        return $this->getData('width') . "px";
    }


    /**
     * Get text.
     *
     * @return string
     */
    public function getExpandText(): string
    {
        return $this->getData('expand_text');
    }

    /**
     * Get limit.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->getData('readmore_text');
    }

}
