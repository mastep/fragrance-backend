<?php

namespace App\Http\Controllers;

use App\Services\ParsingHtmlService;

/**
 * Контролер для работы с парсингом страниц
 */
class ParsingHtmlController
{

    private ParsingHtmlService $service;

    public function __construct(string $url)
    {
        $this->service=new ParsingHtmlService($url);
    }

    public function getCount ()
    {
        return $this->service->getCount();
    }
}
