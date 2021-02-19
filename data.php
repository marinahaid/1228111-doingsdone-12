<?php 
$categories = [
    'inbox' => 'Входящие',
    'study' => 'Учеба',
    'work' => 'Работа',
    'homework' => 'Домашние дела',
    'car' => 'Авто'
];

$tasks = [
    [
        'title' => 'Собеседование в IT компании',
        'date' => '12.02.2021',
        'category' => $categories['work'],
        'is_complete' => false
    ],

    [
        'title' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'category' => $categories['work'],
        'is_complete' => false
    ],

    [
        'title' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'category' => $categories['study'],
        'is_complete' => true
    ],

    [
        'title' => 'Встреча с другом',
        'date' => '22.12.2019',
        'category' => $categories['inbox'],
        'is_complete' => false
    ],

    [
        'title' => 'Купить корм для кота',
        'date' => null,
        'category' => $categories['homework'],
        'is_complete' => false
    ],

    [
        'title' => 'Заказать пиццу',
        'date' => null,
        'category' => $categories['homework'],
        'is_complete' => false
    ]
];