<?php 
	include 'header.php';
?>

<?php
$rep = "./";
$dir = opendir($rep); 
echo '<div id="filter">';
echo '<input type="text" class="filter" name="liveFilter" />';
echo '<ul>';
while ($f = readdir($dir)) {
   if(is_dir($rep.$f)) {
      echo '<li>
      				<a href="'.$rep.$f.'"class="fontface"><img src="'.$rep.$f.'/image-site.png" alt="'.$f.'" height="50px" width="50px"/></a>
      				<a href="'.$rep.$f.'"class="fontface"> '.$f.'</a>
       			</li>';
   }
}
echo '</ul>';
echo '</div>';
closedir($dir)
?>