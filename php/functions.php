<?php

declare(strict_types=1);

// User Defined Function that prints out text that can be rewritten by altering the strings. //

function getDescription(string $genre, int $active, string $name): string
{
    return "$genre music since $active by $name. ";
}


//  Built-in Function for date. //

$today = date("m.d.y");

// User Defined Function that multiplies sum, in this case 200, with 0,5.

function concertTicket(int $price): float
{
    $newPrice = $price * 0.5;
    return $newPrice;
}

//  Built-in Function, strtotime that subtracts todays date with end date and counts down until the concer. //

function daysRemaining(string $startDate, string $endDate): int
{
    $days = strtotime($startDate) - strtotime($endDate);

    return abs($days / 86400);
}
