<?php

namespace MyApp;

use Carbon\CarbonImmutable;
use MyApp\Library\IntNumber;

class Bot
{
    /**
     * Stores a hello message.
     *
     * @var string
     */
    protected $helloMessage;

    /**
     * Stores a bye message.
     *
     * @var string
     */
    protected $byeMessage;

    /**
     * Stores today's date and time information.
     *
     * @var string
     */
    protected $datetime;

    /**
     * Construct a Bot object.
     */
    public function __construct()
    {
        $this->helloMessage = 'Hello! How are you? :)';
        $this->byeMessage = 'Bye. See you later.';
        $this->datetime = 'Today: ' . CarbonImmutable::now()->format('l jS \\of F Y h:i:s A T');
    }

    /**
     * Returns the hello message.
     *
     * @return string
     */
    public function hello(): string
    {
        return $this->helloMessage;
    }

    /**
     * Returns the bye message.
     *
     * @return string
     */
    public function bye(): string
    {
        return $this->byeMessage;
    }

    /**
     * Returns the date and time information.
     *
     * @return string
     */
    public function dateAndTime(): string
    {
        return $this->datetime;
    }

    /**
     * Checks whether the number is even or odd.
     *
     * @param integer $value
     * @return string
     */
    public function checkEvenOdd(int $value): string
    {
        $number = new IntNumber($value);
        return "FYI: $value is " . ($number->isEven() ? 'Even' : 'Odd');
    }
}
