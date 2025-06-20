<?php

/* 

    Тест будущего скрипта который будет форсить сайты с вопросами и в будущем создавать из них паки для игр

*/ 

function parseWebsite(string $url): ?array
{
    try {
        // 1. Делаем HTTP-запрос к указанному URL
        $html = @file_get_contents($url); // подавляет предупреждения, если URL недоступен

        if ($html === false) {
            echo "Ошибка: Не удалось получить содержимое страницы {$url}\n";
            return null;
        }

        if (preg_match('/<h1[^>]*>(.*?)<\/h1>/si', $html, $matches)) {
            $pageTitle = strip_tags($matches[1]);
            echo "Заголовок h1 на странице {$url}: {$pageTitle}\n";
        } else {
            echo "Заголовок h1 не найден на странице {$url}\n";
        }

        return ['status' => 'Парсинг выполнен базовыми методами'];

    } catch (Exception $e) {
        echo "Произошла ошибка при парсинге: " . $e->getMessage() . "\n";
        return null;
    }
}

$targetUrl = ''; // сюда нужно будет подставлять URL из файла для парсинга
echo "Начинаем парсинг URL: {$targetUrl}\n";
$data = parseWebsite($targetUrl);

if ($data) {
    echo "Парсинг завершен успешно.\n";
    // print_r($data); Потом расскоментить для вывода данных
} else {
    echo "Парсинг не удался.\n";
}



?>