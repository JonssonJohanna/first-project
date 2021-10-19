<?php

declare(strict_types=1);

function getDescription(string $name, int $member,  string $genre): string
{
    return "The name of this band is $name and has $member band member and his name is Noah. Gunno plays $genre. ";
}

$date = date("d-m-Y");
