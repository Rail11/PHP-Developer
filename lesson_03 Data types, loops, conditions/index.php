<?php

for ($i = 1; $i < 10; $i++) {
    for ($a = 1; $a < 10; $a++) {
        echo $i . ' &#xD7 ' . $a . ' = ' . $i * $a .'<br>';
    };
    echo '<br>';
}

for ($i = 1; $i > 0; $i++) {
    if ($i ** 2  > 100)
        goto end;
    echo $i ** 2 . '<br>';
}
end:
echo 'Цикл завершён' . '<br>';
echo '<br>';

function multiplication($a, $b, $c = 5) {
    echo $a *  $b * $c . '<br>';
}
multiplication(2, 5);
multiplication(2, 5,3);
echo '<br>';

$someArr = [];

for($i = 1; $i <= 100; $i++) {

    $count = 0;

    for($j = 2; $j <= $i && $count < 2; $j++) {
        if ($i % $j == 0) {
            $count++;
        };
    };

    $k = 0;
    if ($count < 2) {
        echo $i . '<br>';
        array_push($someArr, $i);
    };

};

var_dump($someArr);
echo $i . '<br>';

foreach ($someArr as $key => $value) {
    echo $value . ' - ' . 'простое число №' . ($key + 1) . '<br>';;
}

function isleap( $year )
{
    if( $year % 4 == 0 )
        # Год високосный
        echo 'Год високосный - TRUE';
    else
        # Год не високосный
        echo 'Год не високосный - FALSE';
}
echo isleap(2021);
