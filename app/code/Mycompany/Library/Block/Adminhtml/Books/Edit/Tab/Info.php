<?php

namespace Mycompany\Library\Block\Adminhtml\Books\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;

class Info extends Generic {

    /**
     * Info constructor.
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;

        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareForm() {
        $data = $this->_coreRegistry->registry("mycompany_library_books");
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('books_');
        $form->setFieldNameSuffix('books_data');

        $fieldset = $form->addFieldset(
            'base_fieldset', ['legend' => __('General Info')]
        );

        if (isset($data["books_id"]) && !empty($data["books_id"])) {
            $fieldset->addField('books_id', 'hidden', ['name' => 'books_id']);
        }

        $fieldset->addField(
            'title', 'text', [
                'name' => 'title',
                'label' => __('Title'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'description', 'textarea', [
                'name' => 'description',
                'label' => __('Description'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'price', 'text', [
                'name' => 'price',
                'label' => __('Price'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'isbn', 'text', [
                'name' => 'isbn',
                'label' => __('ISBN'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'pages', 'text', [
                'name' => 'pages',
                'label' => __('Pages'),
                'required' => false
            ]
        );


        $fieldset->addField(
            'cover', 'text', [
                'name' => 'cover',
                'label' => __('Cover'),
                'required' => false
            ]
        );


        $form->setValues($data);
        $this->setForm($form);
        return parent::_prepareForm();
    }

}
