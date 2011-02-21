<?php
$rep = "./";
$dir = opendir($rep); 

while ($f = readdir($dir)) {
   if(is_dir($rep.$f)) {
      echo '<li><a href="'.$rep.$f.'"> '.$f.'</a></li>';
   }
}
closedir($dir)
?>