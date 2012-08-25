<?php
/* LiangLee Shortcut keys
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Shortcuts keys
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File LiangLee_Skeys_info.php
 */
echo " <div style=\"display: none;\">\n"; 
echo "		<div id=\"LiangLee_Skeys_help\" style=\"width:470px;height:380px;overflow:auto;\">\n";

/* Liang Lee Keys Help */
echo "<table width=\"452\" height=\"488\" border=\"0\">\n"; 
echo "  <tr>\n"; 
echo "    <td width=\"95\" height=\"45\"><strong>".elgg_echo('llee:Skeys:keys')."\n"; 
echo "</strong></td>\n";
?>
<?php
echo "    <td width=\"109\"><strong>".elgg_echo('llee:Skeys:functions') ."</strong></td>\n"; 
echo "    <td width=\"110\"> <strong>".elgg_echo('llee:Skeys:keys') ."</strong></td>\n"; 
echo "    <td width=\"120\"><strong>".elgg_echo('llee:Skeys:functions'). "</strong></td>\n"; 
echo "  </tr>\n"; 
echo "  <tr>\n";
echo "<td>\n";
LiangLee_img('LiangleeFramework','ALT+A.jpg');
echo "</td>\n";
?>
    <td><?php echo elgg_echo('llee:Skeys:activity'); ?></td>
    <td><?php LiangLee_img('LiangleeFramework','ALT+B.jpg'); ?></td>
    <td> <?php echo elgg_echo('llee:Skeys:blogs'); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','ALT+D.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:dashb'); ?> </td>
    <td><?php LiangLee_img('LiangleeFramework','ALT+F.jpg"'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:files'); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','alt+g.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:groups'); ?></td>
    <td><?php LiangLee_img('LiangleeFramework','alt+p.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:pages'); ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','ALT+W.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:wire'); ?></td>
    <td><?php LiangLee_img('LiangleeFramework','ALT+M.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:members'); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','ALT+S.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:settings'); ?></td>
    <td><?php LiangLee_img('LiangleeFramework','ALT+1.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:friends'); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','ALT+L.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:logout'); ?></td>
    <td><?php LiangLee_img('LiangleeFramework','Alt+2.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:profile'); ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php LiangLee_img('LiangleeFramework','ALT+I.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:inbox'); ?></td><?php	if (elgg_is_admin_logged_in()) {
?>
    <td><?php LiangLee_img('LiangleeFramework','ALT+C.jpg'); ?></td>
    <td><?php echo elgg_echo('llee:Skeys:admin'); ?></td><?php } ?>
  </tr>
</table>
