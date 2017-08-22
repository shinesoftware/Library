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

    const DESCRIPTION = 'description';
    const TITLE = 'title';
    const ISBN = 'isbn';
    const PAGES = 'pages';
    const COVER = 'cover';
    const BOOKS_ID = 'books_id';
    const PRICE = 'price';


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
     * Get title
     * @return string|null
     */
    
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setTitle($title);

    /**
     * Get description
     * @return string|null
     */
    
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setDescription($description);

    /**
     * Get price
     * @return string|null
     */
    
    public function getPrice();

    /**
     * Set price
     * @param string $price
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setPrice($price);

    /**
     * Get isbn
     * @return string|null
     */
    
    public function getIsbn();

    /**
     * Set isbn
     * @param string $isbn
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setIsbn($isbn);

    /**
     * Get pages
     * @return string|null
     */
    
    public function getPages();

    /**
     * Set pages
     * @param string $pages
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setPages($pages);

    /**
     * Get cover
     * @return string|null
     */
    
    public function getCover();

    /**
     * Set cover
     * @param string $cover
     * @return \Mycompany\Library\Api\Data\BooksInterface
     */
    
    public function setCover($cover);
}
