<?php
use App\Http\Controllers\ParsingHtmlController;
require __DIR__.'/../vendor/autoload.php';

$ParsingHtml=new ParsingHtmlController('https://www.kommersant.ru/');
echo $ParsingHtml->getCount();
