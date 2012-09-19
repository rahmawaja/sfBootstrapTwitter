<h1 class="blue-title big">Bienvenue sur <?php echo image_tag("logo.png") ?></h1>

<br />

<?php include_partial("main/notice", array("form" => $form)) ?>

<form action="<?php echo url_for("@user_register?niveau=p1") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    <?php echo $form->renderHiddenFields() ?>
    <input type="hidden" name="sf_method" value="PUT" />
    <div class="row-fluid">
        <div class="span6">
            <?php include_partial("main/formRow", array("row" => $form['profile']['first_name'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['last_name'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['university_id'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['is_doublant'], "checkbox" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['is_boursier'], "checkbox" => true)) ?>
            <div class="control-group">
                <?php //echo $form['captcha']->renderLabel(null, array("class" => "control-label")) ?><br />
                <?php echo $form['captcha']->render() ?>
                <span class="help-inline"><?php echo $form['captcha']->renderError() ?></span>
            </div>
        </div>
        <div class="span6">
            <?php include_partial("main/formRow", array("row" => $form['username'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['email'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['password'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['password_again'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['profile']['image_path'], "with_label" => true)) ?>
            <?php include_partial("main/formRow", array("row" => $form['newsletter'], "checkbox" => true)) ?>
        </div>
    </div>
    <button type="submit" class="btn btn-blue pull-right">Valider mon inscription</button>
    <?php echo link_to("Retour à l'accueil", "@homepage", array("class" => "pull-right", "style" => "margin-top: 5px;")) ?>
    <div class="clearfix"></div>
</form>