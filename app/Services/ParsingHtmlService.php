<?php

namespace App\Services;

use Exception;

class ParsingHtmlService
{
    private string $url;
    private string $content;
    private array $tags;

    /*
     * Устанавливаем адрес парсинга
     * Поптыка получения контента
     * Попытка получения тегов
     */
    public function __construct(string $url)
    {
        $this->url=$url;
        $this->setContent()->setTags();
    }

    /*
     * Получаем контент страницы и сохраняем его в $this->content
     */
    public function setContent(): bool|static
    {
        try {
            $this->content=file_get_contents($this->url);
        }catch (Exception){
            $this->content=false;
        }
        return $this;
    }

    /*
     * Ищем теги через регулярные выражаения и сохраняем в $this->tags
     */
    public function setTags(): static
    {
        preg_match_all('/<(\w+)>.+<\/\w+>/sU', $this->content, $match);
        $this->tags= $match[1]??[];
        return $this;
    }

    /*
     * Получение количества тегов
     */
    public function getCount(): int
    {
        return count($this->tags);
    }
}
