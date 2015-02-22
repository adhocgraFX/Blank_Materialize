<?php

// module chrome mit card layout

defined('_JEXEC') or die;

function modChrome_card($module, &$params, &$attribs) {
    if (!empty ($module->content)) : ?>
        <div class="card <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <div class="card-content">
                <?php if ($module->showtitle != 0) : ?>
                    <span class="card-title grey-text"><?php echo $module->title; ?></span>
                <?php endif; ?>
                <?php echo $module->content; ?>
            </div>
        </div>
    <?php endif;
}