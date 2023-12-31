<?php if (!System\Classes\PluginManager::instance()->hasPlugin('October.Drivers')): ?>
    <div class="callout callout-warning fade in no-subheader">
        <div class="header">
            <i class="icon-exclamation-circle"></i>
            <h3><?= e(trans('system::lang.mail.drivers_hint_header')) ?></h3>
        </div>
        <div class="content">
            <p><?= e(trans('system::lang.mail.drivers_hint_content', ['plugin' => 'October.Drivers'])) ?></p>
        </div>
    </div>
<?php endif ?>
