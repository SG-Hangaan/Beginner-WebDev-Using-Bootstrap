<!DOCTYPE html>
<html>
    <head>
        <title>Basic of PHP</title>
    </head>
	
<body>
    <h1>PHP Basic Part 2</h1>
  
    <?php
    
	/*
	while
      $x = 1;
      while($x <= 5){
      $x++;
      echo "The number is:$x <br>";
        
       }
    */
    
    /*
    $x = 1;
    do{
        echo "The number is:$x <br>";
        $x++;
    }while($x <= 5);
    */
	
    /*
    for($x = 0; $x <=20;$x++){
    echo "The number is:$x <br>";
    
    }
    
    */
	
    /*
    $colors = array("red","green","blue","white");
    foreach($colors as $value){
    echo "$value<br>";
    }
    */
    
	/*
	#PHP Break
	for($x = 0; $x <=10; $x++){
		if($x == 4){
			echo "The number is exactly equal to 4";
			break;
		}
		echo "The number is: $x <br/>";
	}
	*/
	
	/*
	#PHP Continue
	$x = 0;
	
	while($x < 10){
		if($x == 4) {
			echo "The number is skip here...<br/>";
			$x++;
			continue;
		}
	
		echo "The number is: $x <br/>";
		$x++;
	}
	*/

	?>

</body>
</html>
