<h1>Inscription</h1>
<hr>
<?php include_partial("main/notice", array("form" => $form)) ?>
<form action="<?php echo url_for('@sf_guard_register') ?>" method="post" class="well">
    <?php echo $form['_csrf_token'] ;?>
    <?php echo $form['username']->renderLabel() ?>
    <?php echo $form['username']->render(array("placeholder" => "Login")) ?>
    <?php echo $form['email']->renderLabel() ?>
    <?php echo $form['email']->render(array("placeholder" => "Email")) ?>
    <?php echo $form['password']->renderLabel() ?>
    <?php echo $form['password']->render(array("placeholder" => "Mot de passe")) ?>
    <?php echo $form['password_confirm']->renderLabel() ?>
    <?php echo $form['password_confirm']->render(array("placeholder" => "Confirmation")) ?>
    <br />
    <input type="submit" class="btn" value="Inscription" />
    <?php echo link_to("Connexion", "@sf_guard_signin") ?>
</form>