<!DOCTYPE html>
<html>
<body>

<?php
$data = [
    'authors' => [
        301 => [
            'id' => 301,
            'name' => 'Александр Сергеевич Пушкин',
            'email' => 'alexander_pushkin@example.com',
            'birthYear' => 1799,
        ],
        10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
    ],
];

/* ===== Ваш код ниже ===== */

echo '=== Авторы ===<br>';
// Ваш код здесь
foreach($data['authors'] as $item) {
	echo $item['name'].' - '.$item['email'].' - '.$item['birthYear'].'<br>';
}

echo '=== Книги ===<br>';
// Ваш код здесь
foreach($data['books'] as $item) {
	echo $item['title'].' - '.$item['publishedAt'].' - '. $data['authors'][$item['author']]['name'].'<br>';
}
?>

</body>
</html>
