<?php

class Calculator
{
    /**
     * @var int
     */
    private static $value = 0;


    public static function setValue(float $value)
    {
        self::$value = $value;
    }

    public static function getValue(): float
    {
        return self::$value;
    }

    public function __construct(float $value)
    {
        self::$value = $value;
    }

    public static function add(int $value): float
    {
        return self::$value += $value;
    }

    public static function substract(int $value): float
    {
        return self::$value -= $value;
    }

    public static function multiply(int $value): float
    {
        return self::$value *= $value;
    }

    public static function divide(int $value): float
    {
        return self::$value /= $value;
    }

    public static function modulo(float $value): float
    {
        return self::$value %= $value;
    }

    public static function square(): float
    {
        return self::$value = (self::$value)**2;
    }

    public static function squareRoot(): float
    {
//        return self::$value = (self::$value)**(0.5);
        return self::$value = sqrt((self::$value));
    }

    public static function clear()
    {
        return self::$value = 0;
    }

}