<?php

namespace App\Service;

use App\Entity\Quote;
use Doctrine\ORM\EntityManager;

class QuoteService
{
    /** @var EntityManager */
    protected $entityManager;

    /**
     * QuoteService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

//    public function getAllQuotes(){
//        $quoteRepository = $this->entityManager->getRepository('\App\Entity\Quote');
//        $quoteList = $quoteRepository->findAll();
//
//        return $quoteList;
//    }

    /**
     * @return Quote
     */
    public function getRandomQuote(){
        $quoteRepository = $this->entityManager->getRepository('\App\Entity\Quote');
        $quoteList = $quoteRepository->findAll();

        $randomKey = array_rand($quoteList, 1);
        return $quoteList[$randomKey];
    }

    public function getQuoteOfTheDay(){
        //try to get quote from DateQuote Table
        //if there is no quote, get random quote and put it into DB
    }
}