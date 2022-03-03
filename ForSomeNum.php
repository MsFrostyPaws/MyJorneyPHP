<!DOCTYPE html>
<html>
<body>

<?php
function task17( $n ) {
  $sum = 0;
  for( $i = 0; $i <= $n; $i ++ ) {
    if( $i % 3 == 0 && $i % 5 == 0 ) {
      $sum -= 1;
    }
    elseif( $i % 3 == 0 ) {
      echo $i . '<br>';
    }
    elseif( $i % 5 == 0 ) {
      $sum += $i;
    }
  }
  return $sum;
}

?>

</body>
</html>
