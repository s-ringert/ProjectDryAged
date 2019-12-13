<?php

namespace AppTest\Service;

use App\Entity\DateQuote;
use App\Entity\Quote;
use App\Service\QuoteService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class QuoteServiceTest extends TestCase
{
    const SAMPLE_QUOTE = 'situation normal all fucked up';
    const SAMPLE_AUTHOR = 'Hackbarth Celine';

    public function testQuoteOfTheDayWithNoGeneratedDailyQuote()
    {
        $dateTime = $this->prophesize(\DateTime::class);

        $expectedQuote = new Quote();
        $expectedQuote->setQuote(self::SAMPLE_QUOTE);
        $expectedQuote->setAuthor(self::SAMPLE_AUTHOR);

        $expectedDateQuote = new DateQuote();
        $expectedDateQuote->setQuote($expectedQuote);
        $expectedDateQuote->setQuoteDate($dateTime);

        $dateQuoteRepository = $this->prophesize(EntityRepository::class);
        $dateQuoteRepository->findOneBy(
            Argument::exact(['quote_date' => $dateTime->reveal()])
        )->willReturn($expectedDateQuote);

        $entityManager = $this->prophesize(EntityManager::class);
        $entityManager->getRepository(
            Argument::exact('\App\Entity\DateQuote')
        )->willReturn($dateQuoteRepository->reveal());

        $quoteService = new QuoteService(
            $entityManager->reveal(),
            $dateTime->reveal()
        );
        $quote = $quoteService->getQuoteOfTheDay();

        $this->assertEquals($expectedQuote, $quote);
    }


    public function testQuoteOfTheDayWithAGeneratedDailyQuote()
    {
        $dateTime = $this->prophesize(\DateTime::class);

        $expectedQuote = new Quote();
        $expectedQuote->setQuote(self::SAMPLE_QUOTE);
        $expectedQuote->setAuthor(self::SAMPLE_AUTHOR);

        $expectedDateQuote = new DateQuote();
        $expectedDateQuote->setQuote($expectedQuote);
        $expectedDateQuote->setQuoteDate($dateTime);

        $dateQuoteRepository = $this->prophesize(EntityRepository::class);
        $dateQuoteRepository->findOneBy(
            Argument::exact(['quote_date' => $dateTime->reveal()])
        )->willReturn(null);

        $quoteRepository = $this->prophesize(EntityRepository::class);
        $quoteRepository->findAll()->willReturn([$expectedQuote]);

        $entityManager = $this->prophesize(EntityManager::class);
        $entityManager->getRepository(
            Argument::exact('\App\Entity\DateQuote')
        )->willReturn($dateQuoteRepository->reveal());

        $entityManager->getRepository(
            Argument::exact('\App\Entity\Quote')
        )->willReturn($quoteRepository->reveal());

        $entityManager->persist(Argument::any())->shouldBeCalled();
        $entityManager->flush()->shouldBeCalled();

        $quoteService = new QuoteService(
            $entityManager->reveal(),
            $dateTime->reveal()
        );
        $quote = $quoteService->getQuoteOfTheDay();

        $this->assertEquals($expectedQuote, $quote);
    }
}
