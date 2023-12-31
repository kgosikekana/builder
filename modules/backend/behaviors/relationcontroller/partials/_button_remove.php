<?php if ($relationViewMode == 'single'): ?>
    <button
        class="btn btn-sm btn-secondary oc-icon-minus"
        data-request="onRelationButtonRemove"
        data-request-success="$.oc.relationBehavior.changed('<?= e($relationField) ?>', 'removed')"
        data-stripe-load-indicator
    >
        <?= e($this->relationGetMessage('buttonRemove')) ?>
    </button>
<?php else: ?>
    <button
        class="btn btn-sm btn-secondary"
        onclick="$(this).data('request-data', {
            checked: $('#<?= $this->relationGetId('view') ?> .control-list').listWidget('getChecked')
        })"
        disabled="disabled"
        data-request="onRelationButtonRemove"
        data-request-success="$.oc.relationBehavior.changed('<?= e($relationField) ?>', 'removed')"
        data-trigger-action="enable"
        data-trigger="#<?= $this->relationGetId('view') ?> .control-list tbody input[type=checkbox]"
        data-trigger-condition="checked"
        data-stripe-load-indicator
    >
        <i class="octo-icon-list-remove"></i> <?= e($this->relationGetMessage('buttonRemove')) ?>
    </button>
<?php endif ?>
