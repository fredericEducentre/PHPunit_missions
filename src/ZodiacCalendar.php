<?php

declare(strict_types=1);

class ZodiacCalendar
{

    // Array of zodiac signs, indexed by the zodiac cycle number (1-12)
    private $zodiacSigns = [
        1 => "Rat",
        2 => "Ox",
        3 => "Tiger",
        4 => "Rabbit",
        5 => "Dragon",
        6 => "Snake",
        7 => "Horse",
        8 => "Goat",
        9 => "Monkey",
        10 => "Rooster",
        11 => "Dog",
        12 => "Pig"
    ];

    // Function to get the zodiac sign based on the birth year
    public function getZodiacSign($birthYear)
    {
        // The Chinese zodiac cycle starts from 1924 (Rat year)
        $startYear = 1924;

        // Calculate the cycle offset from the base year
        $cycle = ($birthYear - $startYear) % 12;

        // Adjust the result for negative offsets (if the birth year is before the base year)
        if ($cycle <= 0) {
            $cycle += 12;
        }

        // Return the corresponding zodiac sign
        return $this->zodiacSigns[$cycle];
    }
}

/*
$zodiac = new ZodiacCalendar();
print($zodiac->getZodiacSign(1991) . "\n");
*/
