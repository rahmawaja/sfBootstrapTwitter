<h1>Édition de mon profil</h1>

<?php include_partial("main/notice", array("form" => $form, "decode" => true, "globalError" => true)) ?>

<form action="<?php echo url_for("@user_edit") ?>" method="post" enctype="multipart/form-data">
    <?php echo $form->renderHiddenFields() ?>
    <input type="hidden" name="sf_method" value="PUT" />
    <div class="row-fluid">
        <div class="span4">
            <?php include_partial("main/formRow", array("row" => $form['username'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['email'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['image_path'], "with_label" => true)) ?>
        </div>
        <div class="span4">
            <?php include_partial("main/formRow", array("row" => $form['profile']['first_name'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['last_name'], "with_label" => true)) ?>
        </div>
        <div class="span4">
            <?php include_partial("main/formRow", array("row" => $form['old_password'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['password'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['password_again'], "with_label" => true)) ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn"><i class="icon-check"></i> Modifier mes informations</button>
    </div>
</form>