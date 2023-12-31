<?php Block::put('breadcrumb') ?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Backend::url('system/eventlogs') ?>"><?= e(trans('system::lang.event_log.menu_label')) ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= e(__($this->pageTitle)) ?></li>
    </ol>
<?php Block::endPut() ?>

<?php if (!$this->fatalError): ?>

    <div class="scoreboard">
        <div data-control="toolbar">
            <div class="scoreboard-item title-value">
                <h4><?= e(trans('system::lang.event_log.id_label')) ?></h4>
                <p>#<?= $formModel->id ?></p>
            </div>
            <div class="scoreboard-item title-value">
                <h4><?= e(trans('system::lang.event_log.level')) ?></h4>
                <p><?= $formModel->level ?></p>
            </div>
            <div class="scoreboard-item title-value">
                <h4><?= e(trans('system::lang.event_log.created_at')) ?></h4>
                <p><?= $formModel->created_at->toDayDateTimeString() ?></p>
            </div>
        </div>
    </div>

    <div class="layout-item stretch layout-column">
        <?= $this->formRenderPreview() ?>
    </div>

<?php else: ?>

    <p class="flash-message static error"><?= e(__($this->fatalError)) ?></p>

<?php endif ?>

<p>
    <a href="<?= Backend::url('system/eventlogs') ?>" class="btn btn-default oc-icon-chevron-left">
        <?= e(trans('system::lang.event_log.return_link')) ?>
    </a>
</p>
