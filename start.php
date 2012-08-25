<?php
/* LiangLee Shortcuts keys
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Shortcuts keys
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File start.php 
 */

elgg_register_event_handler('init', 'system', 'LiangLee_skeys_init');

function LiangLee_skeys_init() {
	elgg_extend_view ('page/elements/footer','LiangLee_skeys/footer');
	if (!elgg_is_active_plugin('LiangleeFramework')) {
        if (elgg_is_admin_logged_in()) {
        register_error(elgg_echo('lianglee:framewrok:miss'));
        } else {
        register_error(elgg_echo('lianglee:framewrok:miss:code'));	
           }
      }  

}
?>