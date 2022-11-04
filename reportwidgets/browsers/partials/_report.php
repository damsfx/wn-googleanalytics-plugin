<div class="report-widget">
    <h3><?= e($this->property('title')) ?></h3>

    <?php if (!isset($error)): ?>
        <div
            class="control-chart <?= $this->property('legendAsTable') ? null : 'wrap-legend' ?>"
            data-control="chart-bar"
            data-height="<?= $this->property('reportHeight') ?>"
            data-full-width="1"
        >
            <ul>
            <?php if ($rows && count($rows)): ?>
                <?php foreach ($rows as $row): ?>
                    <li><?= e($row->getDimensionValues()[0]->getValue()) ?> <span><?= $row->getMetricValues()[0]->getValue() ?></span></li>
                <?php endforeach ?>
            <?php endif; ?>
            </ul>
        </div>

        <?php if ($this->property('displayDescription')): ?>
            <p class="report-description"><?= e(trans('winter.googleanalytics::lang.widgets.description_browsers')) ?></p>
        <?php endif ?>
    <?php else: ?>
        <p class="flash-message static warning"><?= e($error) ?></p>
    <?php endif ?>
</div>
