<?php

function Station() {

    // Guardamos en una variable el día del año
    $station = array('winter', 'spring', 'summer', 'autumn');
    
    $today = date('j');//dia actual
    
    $month = date('m');//mes actual    
            if ($month==3 && $today >=21 ) {
                echo "We are in ".$station[1];
                echo "<img width=500 height=200 src=https://upload.wikimedia.org/wikipedia/commons/5/57/Fr%C3%BChling_bl%C3%BChender_Kirschenbaum.jpg>";
            }elseif ($month==6 && $today >=21) {
                echo "We are in ".$station[2];
                echo "<img width=100 height=50 src=https://upload.wikimedia.org/wikipedia/commons/9/9b/Atardecer_de_verano.JPG>";
            }elseif ($month==9 && $today >=21) {
                echo "We are in ".$station[3];
                echo "<img width=500 height=200 src=https://upload.wikimedia.org/wikipedia/commons/4/4a/Vermont_fall_foliage_hogback_mountain.JPG>";
            }elseif ($month==12 && $today >=21) {
                echo "We are in ".$station[0].date(' d-m-y').'<br>';;
                echo "<img width=500 height=200 src=https://upload.wikimedia.org/wikipedia/commons/2/20/AchenseeWinter05.JPG>";
            }else{
                echo "We are in ".$station[0].date(' d-m-y').'<br>';;
                echo " <img width=500 height=200 src=https://upload.wikimedia.org/wikipedia/commons/2/20/AchenseeWinter05.JPG> ";
            }
 }
Station();
?>