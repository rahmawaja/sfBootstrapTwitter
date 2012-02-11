<h1>Bienvenue sur mon Bootstrap Symfony/Twitter</h1>
<hr>
<p>
    Vous pouvez vous <?php echo link_to("inscrire", "@sf_guard_register") ?> ou vous connecter ci-dessous avec Login = pass = "admin"
</p>
<?php include_partial("main/notice", array("form" => $form)) ?>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="well">
    <?php echo $form['_csrf_token'] ;?>
    <div class="control-group">
        <?php echo $form['username']->renderLabel() ?>
        <?php echo $form['username']->render(array("placeholder" => "Login")) ?>
        <span class="help-inline"><?php echo $form['username']->getError() ?></span>
    </div>
    <div class="control-group">
        <?php echo $form['password']->renderLabel() ?>
        <?php echo $form['password']->render(array("placeholder" => "Mot de passe")) ?>
        <span class="help-inline"><?php echo $form['password']->getError() ?></span>
    </div>
    <input type="submit" class="btn" value="Connexion" />
    <?php echo link_to("Inscription", "@sf_guard_register") ?>
</form>