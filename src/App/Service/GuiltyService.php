<?php

namespace App\Service;

use DateTime;

class GuiltyService
{
    /** @var DateTime */
    protected $dateTime;

    const NAME_SASCHA = 'Sascha';
    const NAME_VANESSA = 'Vanessa';

    /**
     * GuiltyService constructor.
     * @param DateTime $date
     */
    public function __construct(DateTime $date)
    {
        $this->dateTime = $date;
    }

    public function getGuiltyPerson()
    {
        $currentDay = (int)$this->dateTime->format('d');

        $guiltyPerson = self::NAME_VANESSA;
        if (($currentDay % 2) === 1) {
            $guiltyPerson = self::NAME_SASCHA;
        }

        return $guiltyPerson;
    }
}
