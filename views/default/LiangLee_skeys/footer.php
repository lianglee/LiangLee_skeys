<?php
/* LiangLee Shortcuts Keys
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Shortcuts Keys
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File footer.php
 */
if (elgg_is_active_plugin('LiangleeFramework')) {
if (elgg_is_logged_in()) {
LiangLee_view('LiangLee_skeys','js/keys');
?>
<?php
echo "<div id=\"content\">\n"; 
echo "	<h1>&nbsp;</h1>\n"; 
echo "    <ul>\n"; 
echo "	  <li><a id=\"lianglee_sekys_info\" href=\"#LiangLee_Skeys_help\" title=\"Shortcut Keys\"><span class=\"LiangLee_Skeys_footer\">\n";
echo '<div class="mts clearfloat float">';
echo elgg_echo('llee:Skeys');
echo '</div>';
echo "</span></a></li>\n"; 
echo "\n"; 
echo "	</ul>\n";
?>
<?php
/* Load Help */
LiangLee_include('LiangLee_skeys','lib/LiangLee_Skeys_info');

?>
<?php

/*  Keys */
LiangLee_include('LiangLee_skeys','lib/LiangLee_Skeys_akeys');
?>

<?php 
/*  Load mousewheel */
LiangLee_inc_js('LiangleeFramework','jquery/fancybox/jquery.mousewheel-3.0.4.pack.js');

?>
<?php 
/*  load fancybox css*/
LiangLee_inc_css('LiangleeFramework','vendors/jquery/fancybox/jquery.fancybox-1.3.4.css');
?>
<?php
/*  load fancybox pack */
LiangLee_inc_js('LiangleeFramework','jquery/fancybox/jquery.fancybox-1.3.4.pack.js');

?>
<?php
 }
} 
?>
