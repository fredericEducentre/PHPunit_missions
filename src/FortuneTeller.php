<?php

declare(strict_types=1);

class FortuneTeller
{
    private $fortunes;

    // Constructor to initialize the array of fortunes
    public function __construct()
    {
        $this->fortunes = [
            "You will have a great day today!",
            "A new opportunity is on the horizon.",
            "Your hard work will soon pay off.",
            "Expect a surprise in the near future.",
            "Someone close to you is thinking of you.",
            "Good things come to those who wait.",
            "You will soon make an important decision.",
            "Now is a good time to follow your heart.",
            "A new friendship is in your future.",
            "A challenge you face will soon become easier."
        ];
    }

    // Method to get a random fortune
    public function tellFortune()
    {
        $randomIndex = array_rand($this->fortunes); // Get a random index
        return $this->fortunes[$randomIndex]; // Return the fortune at that index
    }
}

// Example usage
$fortuneTeller = new FortuneTeller();
print($fortuneTeller->tellFortune() . "\n");
