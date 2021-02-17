<?php

namespace App\Services;

class CheckDateByHour
{
    public function check(\DateTime $dateToCheck, int $hours)
    {
        $now = new \DateTime();

        return $now > $dateToCheck->modify('+ ' . $hours . ' hour');
    }
}
