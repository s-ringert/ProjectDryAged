<?php

namespace App\Service;

use App\Entity\DateQuote;
use App\Entity\Quote;
use Doctrine\ORM\EntityManager;

class QuoteService
{
    /** @var EntityManager */
    protected $entityManager;

    /** @var \DateTime */
    protected $dateTime;

    /**
     * QuoteService constructor.
     * @param EntityManager $entityManager
     * @param \DateTime $dateTime
     */
    public function __construct(EntityManager $entityManager, \DateTime $dateTime)
    {
        $this->entityManager = $entityManager;
        $this->dateTime = $dateTime;
        $this->dateTime->setTime(0, 0, 0);
    }

    /**
     * @return Quote
     */
    public function getRandomQuote(): Quote
    {
        $quoteList = $this->getAllQuotes();

        $randomKey = array_rand($quoteList, 1);

        /** @var Quote $quote */
        $quote = $quoteList[$randomKey];
        return $quote;
    }

    public function getQuoteOfTheDay(): Quote
    {
        $dateQuoteRepository = $this->entityManager->getRepository('\App\Entity\DateQuote');

        $dateQuote = null;
        /** @var DateQuote $dateQuote */
        $dateQuote = $dateQuoteRepository->findOneBy([
            'quote_date' => $this->dateTime,
        ]);

        //phpstan reports as broken: is_null($dateQuote) === true
        if ($dateQuote !== null) {
            $quote = $dateQuote->getQuote();
        } else {
            $quote = $this->generateQuoteOfTheDay();
        }

        return $quote;
    }

    /**
     * @return Quote
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    protected function generateQuoteOfTheDay(): Quote
    {
        $quote = $this->getRandomQuote();
        $dateQuote = new DateQuote();
        $dateQuote->setQuote($quote);
        $dateQuote->setQuoteDate($this->dateTime);
        $this->entityManager->persist($dateQuote);
        $this->entityManager->flush();

        return $quote;
    }

    /**
     * @return Quote[]
     */
    public function getAllQuotes(): array
    {
        $quoteRepository = $this->entityManager->getRepository('\App\Entity\Quote');
        /** @var Quote[] $quoteList */
        $quoteList = $quoteRepository->findAll();

        return $quoteList;
    }
}
