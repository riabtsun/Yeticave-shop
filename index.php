<?php require_once ('functions.php');

function itemPrice($price)
{
    if ($price < 1000) {
        return $price;
    } elseif ($price > 1000) {
        return number_format($price, 1, ",", " ") . " ₽";
    }
}
function timeToTomorrow(){
    $ts = time();
    $tsMidnight = strtotime('tomorrow');

    $secondsToMidnight = $tsMidnight - $ts;

    $hours = floor($secondsToMidnight / 3600);
    $minutes = floor($secondsToMidnight % 3600 / 60);

    return $hours . ':' . $minutes;
}
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
$categoriesItems = [
    [
        "Название" => "2014 Rossignal District Snowboard",
        "Категория" => $categories[0],
        "Цена" => 10999,
        "URL Картинки" => "img/lot-1.jpg"
    ],
    [
        "Название" => "DC Ply Mens 2016/2017 Snowboard",
        "Категория" => $categories[0],
        "Цена" => 159999,
        "URL Картинки" => "img/lot-2.jpg"
    ],
    [
        "Название" => "Крепления Union Contact Pro 2015 размер L/XL",
        "Категория" => $categories[1],
        "Цена" => 8000,
        "URL Картинки" => "img/lot-3.jpg"
    ],
    [
        "Название" => "Ботинки для сноуборда DC Mutiny Charocal",
        "Категория" => $categories[2],
        "Цена" => 10999,
        "URL Картинки" => "img/lot-4.jpg"
    ], [
        "Название" => "Куртка для сноуборда DC Mutiny Charocal",
        "Категория" => $categories[3],
        "Цена" => 7500,
        "URL Картинки" => "img/lot-5.jpg"
    ],
    [
        "Название" => "Маска Oakley Capony",
        "Категория" => $categories[5],
        "Цена" => 10999,
        "URL Картинки" => "img/lot-6.jpg"
    ],
];
$user_name = 'Дмитрий';
$user_avatar = 'img/user.jpg';

$page_content = renderTemplate('/index.php', [
    'categoriesItems' => $categoriesItems,
    'lotTime' => timeToTomorrow()
]);

$layout_content = renderTemplate('/layout.php', [
    'mainContent'=>$page_content,
    'title'=>'Главная',
    'categories'=>$categories,
    'categoriesItems'=>$categoriesItems,
    'is_auth' => (bool)rand(0, 1),
    'user_avatar' => $user_avatar,
    'user_name' => $user_name,
]);

print($layout_content);
