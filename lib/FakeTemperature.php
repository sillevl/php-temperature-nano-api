<?php

namespace Sillevl;

class FakeTemperature
{
    const OFFSET = 10.0;
    const SPREAD = 20.0;

    public static function getTemperature()
    {
        $time_fraction = self::getTimeFraction();
        $temperature = self::OFFSET + (self::SPREAD * (0- cos($time_fraction * 2 * pi())));
        return round($temperature,1);
    }

    private static function getTimeFraction()
    {
        $hours = date("G");
        $decimal_minutes = date("i") * (100 / 60);
        return (($hours * 100) + $decimal_minutes) / 2400;
    }

}
