<?php

namespace App\Service;

use DateTime;

class GuiltyService
{
    /** @var DateTime */
    protected $date;

    const NAME_SASCHA = 'Sascha';
    const NAME_VANESSA = 'Vanessa';

    /**
     * GuiltyService constructor.
     * @param DateTime $date
     */
    public function __construct(DateTime $date)
    {
        $this->date = $date;
    }

    public function getGuiltyPerson()
    {
        $currentDay = (int)$this->date->format('d');

        $guiltyPerson = self::NAME_VANESSA;
        if (($currentDay % 2) === 1) {
            $guiltyPerson = self::NAME_SASCHA;
        }

        return $guiltyPerson;
    }
}
