<?php

namespace App\Entity;

/**
 * DateQuote
 */
class DateQuote
{
    /**
     * @var \DateTime
     */
    private $quote_date;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \App\Entity\Quote
     */
    private $quote;


    /**
     * Set quoteDate.
     *
     * @param \DateTime $quoteDate
     *
     * @return DateQuote
     */
    public function setQuoteDate($quoteDate)
    {
        $this->quote_date = $quoteDate;

        return $this;
    }

    /**
     * Get quoteDate.
     *
     * @return \DateTime
     */
    public function getQuoteDate()
    {
        return $this->quote_date;
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
     * Set quote.
     *
     * @param \App\Entity\Quote|null $quote
     *
     * @return DateQuote
     */
    public function setQuote(\App\Entity\Quote $quote = null)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote.
     *
     * @return \App\Entity\Quote|null
     */
    public function getQuote()
    {
        return $this->quote;
    }
}
