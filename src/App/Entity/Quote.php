<?php

namespace App\Entity;

/**
 * Quote
 */
class Quote
{
    /**
     * @var string
     */
    private $quote;

    /**
     * @var string
     */
    private $author;

    /**
     * @var int
     */
    private $id;


    /**
     * Set quote.
     *
     * @param string $quote
     *
     * @return Quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote.
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set author.
     *
     * @param string $author
     *
     * @return Quote
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $authortoooor;


    /**
     * Set authortoooor.
     *
     * @param string $authortoooor
     *
     * @return Quote
     */
    public function setAuthortoooor($authortoooor)
    {
        $this->authortoooor = $authortoooor;

        return $this;
    }

    /**
     * Get authortoooor.
     *
     * @return string
     */
    public function getAuthortoooor()
    {
        return $this->authortoooor;
    }
}
