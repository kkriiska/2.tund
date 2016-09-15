<?php 
 
   $age = 5;
   if ($age <18) {
	   
	   //true - on vaiksem kui 18
	   echo "alaealine";
	   
   } else {
	   //muul juhul
	   echo "taisealine";
	   
   }

?>

<br>

<?php

    for ($i = 1; $i <= $age; $i = $i + 1) {
		
		echo $i. " palju";
		
    }
	
	echo " onne!"; 
	
?>

<br>

<?php

    echo date ("d.m.Y D H:i") ;

