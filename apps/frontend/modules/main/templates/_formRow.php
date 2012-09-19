<?php $params = isset($params) ? sfOutputEscaper::unescape($params) : array() ?>

<?php if(isset($checkbox)): ?>
    <div class="control-group">
        <label class="checkbox" for="<?php echo $row->renderId() ?>">
            <?php echo $row->render($params)." ".$row->renderLabelName() ?>
        </label>
    </div>
<?php elseif($with_label): ?>
    <div class="control-group">
        <?php echo $row->renderLabel(null, array("class" => "control-label")) ?>
        <div class="controls">
            <?php echo $row->render($params) ?>
            <span class="help-inline"><?php echo $row->renderError() ?></span>
        </div>
    </div>
<?php else: ?>
    <?php $params = array_merge(array("placeholder" => $row->renderLabelName()), $params) ?>

    <div class="control-group">
        <div class="controls">
            <?php echo $row->render($params) ?>
            <span class="help-inline"><?php echo $row->renderError() ?></span>
        </div>
    </div>
<?php endif; ?>