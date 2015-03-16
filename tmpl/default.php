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
$doc = JFactory::getDocument();
$doc->addStyleSheet($font_awesome_path);
?>
<style>
    .list-inline > li{
        padding: 0px;
    }
</style>
<div class="<?php echo $moduleclass_sfx ?>">
    <ul class="<?php echo $listclass_sfx ?> list-unstyled">

        <?php
        foreach ($awesomeicons as $key => $item):
            if (!empty($item['icon'])) {
                ?>
                <li>
                    <a href="_blank" target="<?php echo $item['url'] ?>" title="<?php echo $item['icon'] ?>">
                        <span class="fa-stack <?php echo $fa_size ?>">
                            <i class="fa fa-<?php echo $fa_stacked ?> fa-stack-2x" <?php echo (!empty($item['icon']) ? 'style="color:' . $item['color'] . '"' : '') ?>></i>
                            <i class="fa fa-<?php echo $item['icon'] ?> fa-stack-1x <?php echo ($fa_stacked != 'fa-square-o') ? 'fa-inverse' : '' ?>"></i>
                    </a>
                </li>    
    <?php } endforeach; ?>
    </ul>
</div>