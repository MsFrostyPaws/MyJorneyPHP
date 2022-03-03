<!DOCTYPE html>
<html>
<body>

<?php
$items = [
	['sort' => 1],
    ['sort' => 3],
    ['sort' => 5],
    ['name' => 'items 1']
];

$sum = 0;
foreach ($items as $item)  {
	$sum+=$item['sort'];
}

echo $sum;
?>

</body>
</html>
