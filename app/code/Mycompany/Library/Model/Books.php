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

use Mycompany\Library\Api\Data\BooksInterface;

class Books extends \Magento\Framework\Model\AbstractModel implements BooksInterface
{

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mycompany\Library\Model\ResourceModel\Books');
    }

    /**
     * Get books_id
     * @return string
     */
    public function getBooksId()
    {
        return $this->getData(self::BOOKS_ID);
    }

    /**
     * Set books_id
     * @param string $booksId
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setBooksId($booksId)
    {
        return $this->setData(self::BOOKS_ID, $booksId);
    }

    /**
     * Get title
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set title
     * @param string $title
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set description
     * @param string $description
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get price
     * @return string
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * Set price
     * @param string $price
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * Get isbn
     * @return string
     */
    public function getIsbn()
    {
        return $this->getData(self::ISBN);
    }

    /**
     * Set isbn
     * @param string $isbn
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setIsbn($isbn)
    {
        return $this->setData(self::ISBN, $isbn);
    }

    /**
     * Get pages
     * @return string
     */
    public function getPages()
    {
        return $this->getData(self::PAGES);
    }

    /**
     * Set pages
     * @param string $pages
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setPages($pages)
    {
        return $this->setData(self::PAGES, $pages);
    }

    /**
     * Get cover
     * @return string
     */
    public function getCover()
    {
        return $this->getData(self::COVER);
    }

    /**
     * Set cover
     * @param string $cover
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setCover($cover)
    {
        return $this->setData(self::COVER, $cover);
    }
}
