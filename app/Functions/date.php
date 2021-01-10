<?php

use Illuminate\Support\Carbon;

function carbon(string $parseString = '', string $tz = null): Carbon
{
    return new Carbon($parseString, $tz);
}

function humanize_date(Carbon $date, string $format = 'd F Y, H:i'): string
{
    return $date->format($format);
}