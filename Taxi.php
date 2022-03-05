<?php
$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];

$passenger = rand(0, 1000);

for ($i=0; $i < count($cars); $i++) {
    for ($j = $i + 1; $j < count($cars); $j++) {
        $distance1 = abs($cars[$i]['position'] - $passenger);
        $distance2 = abs($cars[$j]['position'] - $passenger);
        if ($distance1 > $distance2) {
            $temp = $cars[$j];
            $cars[$j] = $cars[$i];
            $cars[$i] = $temp;
        }
    }
}

$sum = 0;

foreach ($cars as $car) {
    $position = abs($car['position'] - $passenger);
    if ($car['isFree'] == 0){
        $position = $car['position'] - $passenger;
        echo '"' . $car['name']. '"' . ', ' . 'стоит на ' . $car['position'] . ' ' . 'км, ' .  'до пассажира '. abs($position) . ' км ' . '(занят)'.'<br>';
    } else if ($car['isFree'] == 1 && $sum == 0){
        echo '"' . $car['name']. '"' . ', ' . 'стоит на ' . $car['position'] . ' ' . 'км, ' .  'до пассажира '. abs($position) . ' км ' . '(свободен) - едет это такси'.'<br>';
        $sum++;
    } else {
        echo '"' . $car['name']. '"' . ', ' . 'стоит на ' . $car['position'] . ' ' . 'км, ' .  'до пассажира '. abs($position) . ' км ' . '(свободен)'.'<br>';
    }
}


?>
