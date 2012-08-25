<?php
/* LiangLee Shortcut keys
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Shortcuts keys
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File LiangLee_Skeys_akeys.php
 */
elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
$user = elgg_get_page_owner_entity();
if (elgg_is_active_plugin('LiangleeFramework')) {
if (elgg_is_logged_in()) {
if (elgg_is_active_plugin('pages')) { 
echo "<a accesskey=\"P\" href=\"\n";
echo elgg_get_site_url();echo "pages/all\">\n";
}
if (elgg_is_active_plugin('groups')) {
echo "<a accesskey=\"g\" href=\"\n";
echo elgg_get_site_url(); echo "groups/all\">\n";
}
if (elgg_is_active_plugin('blog')) {
echo "<a accesskey=\"b\" href=\"\n";  
echo elgg_get_site_url(); echo "blog/all\">\n";
}
if (elgg_is_active_plugin('file')) {
echo "<a accesskey=\"f\" href=\"\n";
echo elgg_get_site_url(); echo "file/all\">\n";
}
if (elgg_is_active_plugin('thewire')) {
echo "<a accesskey=\"w\" href=\"\n"; 
echo elgg_get_site_url(); 
echo "thewire/all\">\n";
}
if (elgg_is_active_plugin('dashboard')) {
echo "<a accesskey=\"d\" href=\"\n";
echo elgg_get_site_url(); echo "dashboard\">\n"; 
}
echo "<a accesskey=\"a\" href=\"\n";
echo elgg_get_site_url(); 
echo "activity\">\n"; 
if (elgg_is_active_plugin('members')) {
echo "<a accesskey=\"m\" href=\"\n"; echo elgg_get_site_url(); echo "members\">\n"; 
}
if (elgg_is_logged_in()) {
echo "<a accesskey=\"l\" href=\"\n"; 
echo $vars['url']; echo $logout; echo"\">\n";
echo "<a accesskey=\"s\" href=\"\n";?>
<?php echo $vars['url']; echo "settings/user/\n"; echo $user->username ?><?php echo "\">\n"; 
echo "<a accesskey=\"1\" href=\"\n";?>
<?php echo $vars['url']; echo "friends/\n"; echo $user->username ?><?php echo "\">\n"; 
echo "<a accesskey=\"2\" href=\"\n";?>
<?php echo $vars['url']; echo "profile/\n"; echo $user->username ?><?php echo "\">\n";
echo "<a accesskey=\"i\" href=\"\n";?>
<?php echo $vars['url']; echo "messages/inbox/\n"; echo $user->username ?><?php echo "\">\n";  
if (elgg_is_admin_logged_in()) {
echo "<a accesskey=\"c\" href=\"\n";
echo elgg_get_site_url(); echo "admin\">\n"; 
    }
  }
 }
} 
?>