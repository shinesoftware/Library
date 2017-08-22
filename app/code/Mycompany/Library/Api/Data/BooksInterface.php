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

namespace Mycompany\Library\Api\Data;

interface BooksInterface
{

    const DESCRIPTION = 'Description';
    const PRICE = 'Price';
    const TITLE = 'Title';
    const PAGES = 'Pages';
    const BOOKS_ID = 'books_id';
    const ISBN = 'ISBN';


    /**
     * Get books_id
     * @return string|null
     */
    
    public function getBooksId();

    /**
     * Set books_id
     * @param string $books_id
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setBooksId($booksId);

    /**
     * Get Title
     * @return string|null
     */
    
    public function getTitle();

    /**
     * Set Title
     * @param string $Title
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setTitle($Title);

    /**
     * Get Description
     * @return string|null
     */
    
    public function getDescription();

    /**
     * Set Description
     * @param string $Description
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setDescription($Description);

    /**
     * Get Price
     * @return string|null
     */
    
    public function getPrice();

    /**
     * Set Price
     * @param string $Price
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setPrice($Price);

    /**
     * Get ISBN
     * @return string|null
     */
    
    public function getISBN();

    /**
     * Set ISBN
     * @param string $ISBN
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setISBN($ISBN);

    /**
     * Get Pages
     * @return string|null
     */
    
    public function getPages();

    /**
     * Set Pages
     * @param string $Pages
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setPages($Pages);
}
