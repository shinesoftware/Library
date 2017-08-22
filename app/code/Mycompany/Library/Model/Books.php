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
     * Get Title
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title
     * @param string $Title
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setTitle($Title)
    {
        return $this->setData(self::TITLE, $Title);
    }

    /**
     * Get Description
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Description
     * @param string $Description
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setDescription($Description)
    {
        return $this->setData(self::DESCRIPTION, $Description);
    }

    /**
     * Get Price
     * @return string
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }

    /**
     * Set Price
     * @param string $Price
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setPrice($Price)
    {
        return $this->setData(self::PRICE, $Price);
    }

    /**
     * Get ISBN
     * @return string
     */
    public function getISBN()
    {
        return $this->getData(self::ISBN);
    }

    /**
     * Set ISBN
     * @param string $ISBN
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setISBN($ISBN)
    {
        return $this->setData(self::ISBN, $ISBN);
    }

    /**
     * Get Pages
     * @return string
     */
    public function getPages()
    {
        return $this->getData(self::PAGES);
    }

    /**
     * Set Pages
     * @param string $Pages
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    public function setPages($Pages)
    {
        return $this->setData(self::PAGES, $Pages);
    }
}
