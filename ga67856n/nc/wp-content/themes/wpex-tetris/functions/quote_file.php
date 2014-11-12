<?php
/**
 * Image.php is used to showcase your image media files.
 * @package Tetris WordPress Theme
 * @since 1.0
 * @author Rob Nichol
 * @copyright Copyright (c) 2012 Rob Nichols
 */

?>

<? 
 //Chooses a random number 
 $num = Rand (1,6); 
 //Based on the random number, gives a quote 
 switch ($num)
 {
 case 1:
 echo "Time is money";
 break;
 case 2:
 echo "An apple a day keeps the doctor away";
 break;
 case 3:
 echo "Elmo loves dorthy";
 break;
 case 4:
 echo "Off to see the wizard";
 break;
 case 5:
 echo "Tomorrow is another day";
 break;
 case 6:
 echo "PHP is cool!";
 }
 ?> 