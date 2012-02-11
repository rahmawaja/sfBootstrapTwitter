<h1>Bienvenue sur mon Bootstrap Symfony/Twitter</h1>
<hr>
<p>
    Vous pouvez vous <?php echo link_to("inscrire", "@sf_guard_register") ?> ou vous connecter ci-dessous avec Login = pass = "admin"
</p>
<?php include_partial("main/notice", array("form" => $form)) ?>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="well">
	<?php echo $form['_csrf_token'] ;?>
	<?php echo $form['username']->render(array("placeholder" => "Login")) ?>
	<?php echo $form['password']->render(array("placeholder" => "Mot de passe")) ?>
    <br />
	<input type="submit" class="btn" value="Connexion" />
    <?php echo link_to("Inscription", "@sf_guard_register") ?>
</form>