<?php

namespace AppTest\Service;

use App\Service\GuiltyService;
use PHPUnit\Framework\TestCase;

class GuiltyServiceTest extends TestCase
{
    public function testEvenDate()
    {
        $testDate = \DateTime::createFromFormat('Y-m-d', '2019-12-06');
        $guiltyService = new GuiltyService($testDate);
        $guiltyPerson = $guiltyService->getGuiltyPerson();

        $this->assertEquals(GuiltyService::NAME_VANESSA, $guiltyPerson);
    }

    public function testOddDate()
    {
        $testDate = \DateTime::createFromFormat('Y-m-d', '2019-12-07');
        $guiltyService = new GuiltyService($testDate);
        $guiltyPerson = $guiltyService->getGuiltyPerson();

        $this->assertEquals(GuiltyService::NAME_SASCHA, $guiltyPerson);
    }
}
