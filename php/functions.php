<?php

declare(strict_types=1);

// User Defined Function

function getDescription(string $genre, int $active, string $name,): string
{
    return "$genre music since $active by $name. ";
}
$description = getDescription('Post-punk', 2020, 'Noa Åkesson');

//  Built-in Function

$today = date("m.d.y");

// User Defined Function

function concertTicket($price)
{
    $newPrice = $price * 0.5;
    return $newPrice;
}

//  Built-in Function

function daysRemaining($start_date, $end_date)
{
    $days = strtotime($start_date) - strtotime($end_date);

    return abs($days / 86400);
}

$start_date = "2021-10-22";
$end_date = "2021-12-20";
$daysUntilConcert = daysRemaining($start_date, $end_date);
