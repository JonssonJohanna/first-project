<?php

declare(strict_types=1);

function getDescription(string $name, int $active,  string $genre): string
{
    return "The name of this band is $name, consisting of Noa. Gunno has been active since $active. Gunno plays $genre. ";
}

// $date = date("d-m-Y");
$today = date("m.d.y");

function concertTicket($price)
{
    $newPrice = $price * 0.5;
    return $newPrice;
}

function daysRemaining($start_date, $end_date)
{
    $days = strtotime($start_date) - strtotime($end_date);

    return abs($days / 86400);
}

$start_date = "2021-10-22";
$end_date = "2021-12-20";
$daysUntilConcert = daysRemaining($start_date, $end_date);
