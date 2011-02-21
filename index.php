<?php 
	include 'header.php';
?>

<?php
$rep = "./";
$dir = opendir($rep); 
echo '<ul>';
while ($f = readdir($dir)) {
   if(is_dir($rep.$f)) {
      echo '<li><a href="'.$rep.$f.'"class="fontface"> '.$f.'</a></li>';
   }
}
echo '</ul>';
closedir($dir)
?>