<?php
/* Создаём многомерный массив, который будет возвращать данные */
return [
    'about' => [
        'name' => 'Раиль Сулейманов',
        'post' => 'Веб-разработчик',
        'email' => 'example@mail.ru',
        'phone' => '+79876543210',
        'site' => 'https://www.google.com'
    ],

    'education' => [
        [
            'faculty' => 'Фармацевтический факультет',
            'univercity' => 'Башкирский Государственный Медицинский Университет',
            'yearStart' => 2012,
            'yearEnd' => 2017
        ]
    ],

    'languages' => [
        'Русский', 'Башкирский', 'Английский'
    ],

    'interests' => [
        'JavaScript', 'PHP'
    ],

    'aboutCareer' => 'В данный момент изучаю веб-разработку',

    'career' => [
        [
            'post' => 'Провизор',
            'place' => 'Стерлитамак',
            'duty' => 'ООО "Добрый Доктор"',
            'yearStart' => 2018,
            'yearEnd' => '2018'
        ],
        [
            'post' => 'Провизор',
            'place' => 'Стерлитамак',
            'duty' => 'ООО "Антибиотик"',
            'yearStart' => 2019,
            'yearEnd' => 2021
        ]
    ],

    'projects' => [
        [
            'name' => 'Velocity',
            'description' => 'A responsive website template designed to help startups promote, market and sell their products.'
        ],
        [
            'name' => 'DevStudio',
            'description' => 'A responsive website template designed to help web developers/designers market their services. '
        ],
        [
            'name' => 'Tempo',
            'description' => 'A responsive website template designed to help startups promote their products or services and to attract users &amp; investors'
        ],
        [
            'name' => 'Atom',
            'description' => 'A comprehensive website template solution for startups/developers to market their mobile apps.'
        ],
        [
            'name' => 'Delta',
            'description' => 'A responsive Bootstrap one page theme designed to help app developers promote their mobile apps.'
        ]
    ],

    'skills' => [
        [
            'name' => 'HTML & CSS',
            'level' => 60
        ],
        [
            'name' => 'Avocode & Photoshop',
            'level' => 60
        ],
        [
            'name' => 'JavaScript',
            'level' => 55
        ],
        [
            'name' => 'PHP',
            'level' => 10
        ]
    ]

];
