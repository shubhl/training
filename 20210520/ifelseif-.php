<?php
#https://paiza.io/projects/u_qB9tHS9OqnODPavBg2JA?language=php
    $per = 76;
    if ($per >= 80 and $per <=100){
    	echo "your in merit.";
    }
    elseif ($per >= 60 and $per <80){
    	echo"your in 1st division";
    }
    elseif ($per >= 45 and $per <59){
    	echo"your in 2nd division";
    }	
    elseif ($per >= 33 and $per <44){
    	echo"your in 3rd division";
    }
    elseif ($per <33){
    	echo"your fail.";
    }
    else {
    	echo "please enter valid percentage.";
}
echo "<br>";
// if student enter invalid per
$per = 122;
if ($per >= 80 and $per <=100){
	echo "your in merit.";
}
elseif ($per >= 60 and $per <80){
	echo"your in 1st division";
}
elseif ($per >= 45 and $per <59){
	echo"your in 2nd division";
}	
elseif ($per >= 33 and $per <44){
	echo"your in 3rd division";
}
elseif ($per <33){
	echo"your fail.";
}
else {
	echo "<h2>please enter valid percentage.</h1>";
}
?>
