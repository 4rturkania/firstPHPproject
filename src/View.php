<?php

declare(strict_types=1);

namespace App;


class View
{
    public function render(?string $page): void
    {
        dump($page);
        include_once("templates/layout.php");
    }
}
