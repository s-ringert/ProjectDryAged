<?php

namespace App\Service;

use DateTime;

class GuiltyService
{
    /** @var DateTime */
    protected $dateTime;

    const NAME_SASCHA = 'Sascha';
    const NAME_VANESSA = 'Vanessa';
    const NAME_CHRISTOPH = 'Christoph';
    const DAY_FRIDAY = 5;
    const DAY_ODD = 1;
    const DAY_EVEN = 0;

    /**
     * GuiltyService constructor.
     * @param DateTime $date
     */
    public function __construct(DateTime $date)
    {
        $this->dateTime = $date;
    }

    /**
     * @return string
     */
    public function getGuiltyPerson()
    {
        $currentDay = (int)$this->dateTime->format('d');
        $currentWeekday = (int)$this->dateTime->format('N');

        $guiltyPerson = self::NAME_VANESSA;
        if (($currentDay % 2) === self::DAY_ODD) {
            $guiltyPerson = self::NAME_SASCHA;
        }

        if ($currentWeekday === self::DAY_FRIDAY) {
            $guiltyPerson = self::NAME_CHRISTOPH;
        }

        return $guiltyPerson;
    }
}
