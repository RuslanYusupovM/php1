<?php

function getCityByLetter($cityName)
{
    $cities = file(__DIR__ . '/cities', FILE_IGNORE_NEW_LINES);

    $lastLetter = substr(mb_strtoupper($cityName), -2, 2);

    if ('Ь' === $lastLetter) {
        $lastLetter = substr(mb_strtoupper($cityName), -4, 2);
    }

    foreach ($cities as $city) {

        $firstLetter = substr(mb_strtoupper($city), 0, 2);

        if ($cityName !== $city && $lastLetter === $firstLetter) {
            return $city;
        } else {
            continue;
        }
    }

    return null;
}

assert('Краснодар' === getCityByLetter('Троицк'));
assert('Москва' === getCityByLetter('Муром'));
assert('Санкт-Петербург' === getCityByLetter('Иллинойс'));
assert('Новосибирск' === getCityByLetter('Сызрань'));
assert(null === getCityByLetter('1231231231'));