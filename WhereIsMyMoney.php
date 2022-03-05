<?php
$items = ['where', 'is', 'my', 'money'];
$sum = 0;

for($i = 0; $i <= 100; $i++) {
    switch (TRUE) {
        case ($i % 3 === 0 && $i % 5 === 0): shuffle($items);
        break;
        case ($i % 3 === 0): echo 'Строка'.'<br>';
        break;
        case ($i % 5 === 0): $sum += $i;
        break;
    }
   echo $i.'<br>';
}

foreach ($items as $item) {
    echo $item . ' ';
}
?>
