<?php
/**
 * This is a test.
 * Copyright (C) 2017 Michelangelo Turillo
 * 
 * This file is part of Mycompany/Library.
 * 
 * Mycompany/Library is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mycompany\Library\Model;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Store\Model\StoreManagerInterface;
use Mycompany\Library\Api\BooksRepositoryInterface;
use Mycompany\Library\Model\ResourceModel\Books\CollectionFactory as BooksCollectionFactory;
use Mycompany\Library\Api\Data\BooksInterfaceFactory;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Api\SortOrder;
use Mycompany\Library\Model\ResourceModel\Books as ResourceBooks;
use Mycompany\Library\Api\Data\BooksSearchResultsInterfaceFactory;

class BooksRepository implements BooksRepositoryInterface
{

    protected $dataBooksFactory;

    protected $resource;

    protected $dataObjectHelper;

    protected $booksCollectionFactory;

    protected $searchResultsFactory;

    private $storeManager;

    protected $dataObjectProcessor;

    protected $booksFactory;


    /**
     * @param ResourceBooks $resource
     * @param BooksFactory $booksFactory
     * @param BooksInterfaceFactory $dataBooksFactory
     * @param BooksCollectionFactory $booksCollectionFactory
     * @param BooksSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceBooks $resource,
        BooksFactory $booksFactory,
        BooksInterfaceFactory $dataBooksFactory,
        BooksCollectionFactory $booksCollectionFactory,
        BooksSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->booksFactory = $booksFactory;
        $this->booksCollectionFactory = $booksCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataBooksFactory = $dataBooksFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Mycompany\Library\Api\Data\BooksInterface $books
    ) {
        /* if (empty($books->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $books->setStoreId($storeId);
        } */
        try {
            $books->getResource()->save($books);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the books: %1',
                $exception->getMessage()
            ));
        }
        return $books;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($booksId)
    {
        $books = $this->booksFactory->create();
        $books->getResource()->load($books, $booksId);
        if (!$books->getId()) {
            throw new NoSuchEntityException(__('Books with id "%1" does not exist.', $booksId));
        }
        return $books;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->booksCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $condition = $filter->getConditionType() ?: 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Mycompany\Library\Api\Data\BooksInterface $books
    ) {
        try {
            $books->getResource()->delete($books);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Books: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($booksId)
    {
        return $this->delete($this->getById($booksId));
    }
}
