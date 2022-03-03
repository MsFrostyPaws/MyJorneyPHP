$basket = [
	[
    	'position' => 'PHP Book',
   	 	'quantity' => 1,
    ],
    [
    	'position'=> 'Mouse',
    	'quantity' => 12,
    ],
 ];


function countBasket($basket) {
  
  $sum = 0;
  
  foreach ($basket as $elem) {
  
  		$sum+= $elem['quantity'];
      
    }
  
  return $sum;

};

echo countBasket($basket);
?>

</body>
</html>
