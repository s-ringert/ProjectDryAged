<?php

namespace AppTest\Service;

use App\Service\GuiltyService;
use PHPUnit\Framework\TestCase;

class GuiltyServiceTest extends TestCase
{
    public function testEvenDate()
    {
        $testDate = \DateTime::createFromFormat('Y-m-d', '2019-12-04');
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

    public function testOddFriday()
    {
        $testDate = \DateTime::createFromFormat('Y-m-d', '2019-12-13');
        $guiltyService = new GuiltyService($testDate);
        $guiltyPerson = $guiltyService->getGuiltyPerson();

        $this->assertEquals(GuiltyService::NAME_CHRISTOPH, $guiltyPerson);
    }

    public function testEvenFriday()
    {
        $testDate = \DateTime::createFromFormat('Y-m-d', '2019-12-06');
        $guiltyService = new GuiltyService($testDate);
        $guiltyPerson = $guiltyService->getGuiltyPerson();

        $this->assertEquals(GuiltyService::NAME_CHRISTOPH, $guiltyPerson);
    }
}
