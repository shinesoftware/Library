<?php

namespace Mycompany\Library\Block\Adminhtml\Books;

use Magento\Backend\Block\Widget\Form\Container as FormContainer;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Edit extends FormContainer {

    protected function _construct() {

        $this->_objectId = 'books_id';
        $this->_blockGroup = 'mycompany_library';
        $this->_controller = 'adminhtml_books';

        parent::_construct();
        $this->buttonList->update('save', 'label', __('Save Books'));

        $this->buttonList->add(
            'save-and-continue', [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => [
                            'event' => 'saveAndContinueEdit',
                            'target' => '#edit_form'
                        ]
                    ]
                ]
            ], -100
        );

        $this->buttonList->update('delete', 'label', __('Delete Books'));
    }

}
