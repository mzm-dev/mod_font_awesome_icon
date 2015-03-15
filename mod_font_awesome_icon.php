<?php
/**
 * @version     1.0
 * @package     mod_font_awesome_icon
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Mohamad Zaki Mustafa <mohdzaki04@gmail.com> https://github.com/mzm-dev/mod_font_awesome_icon
 */
//No Direct Access
defined('_JEXEC') or die;


/* Params */
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$moduleid_sfx = htmlspecialchars($params->get('moduleid_sfx'));
$interval = htmlspecialchars($params->get('module_interval'));

//store params as object that we can loop through in tmpl/default.php
//$slideritems = new stdClass();
$slideritems = array();
$data_slide = 5;
for ($i = 1; $i <= $data_slide; $i++) {    
    $slideritems[$i]['heading'] = $params->get("slide" . $i . "_heading");
    $slideritems[$i]['text'] = $params->get("slide" . $i . "_text");
    $slideritems[$i]['background_image'] = $params->get("slide" . $i . "_background_image");
    $slideritems[$i]['main_image'] = $params->get("slide" . $i . "_main_image");
    $slideritems[$i]['button_text'] = $params->get("slide" . $i . "_button_text");
    $slideritems[$i]['button_link'] = $params->get("slide" . $i . "_button_link");
    $slideritems[$i]['show_read_more'] = $params->get("slide" . $i . "_show_read_more");
}

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

require JModuleHelper::getLayoutPath('mod_carousel', $params->get('layout', 'default'));
?>
