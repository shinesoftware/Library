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

namespace Mycompany\Library\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BooksRepositoryInterface
{


    /**
     * Save Books
     * @param \Mycompany\Library\Api\Data\BooksInterface $books
     * @return \Mycompany\Library\Api\Data\BooksInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function save(
        \Mycompany\Library\Api\Data\BooksInterface $books
    );

    /**
     * Retrieve Books
     * @param string $booksId
     * @return \Mycompany\Library\Api\Data\BooksInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getById($booksId);

    /**
     * Retrieve Books matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Mycompany\Library\Api\Data\BooksSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Books
     * @param \Mycompany\Library\Api\Data\BooksInterface $books
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function delete(
        \Mycompany\Library\Api\Data\BooksInterface $books
    );

    /**
     * Delete Books by ID
     * @param string $booksId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function deleteById($booksId);
}
