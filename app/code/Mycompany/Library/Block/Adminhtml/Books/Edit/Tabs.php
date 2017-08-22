<?php

namespace Mycompany\Library\Block\Adminhtml\Books\Edit;

use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

class Tabs extends WidgetTabs {

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    public function __construct(
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Backend\Model\Auth\Session $authSession,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;

        parent::__construct($context, $jsonEncoder, $authSession, $data);
        $this->setId('books_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Books Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab(
            'books_info', [
                'label' => __('General Info'),
                'title' => __('General Info'),
                'content' => $this->getLayout()->createBlock(
                    'Mycompany\Library\Block\Adminhtml\Books\Edit\Tab\Info'
                )->toHtml(),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }

}
