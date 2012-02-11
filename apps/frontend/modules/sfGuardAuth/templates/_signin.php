<h1>Bienvenue sur mon Bootstrap Symfony/Twitter</h1>
<hr>
<p>
    Vous pouvez vous inscrire ou vous connecter ci-dessous avec Login = pass = "admin"
</p>
<div class="well">
	<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
		<?php echo $form['_csrf_token'] ;?>
		<?php echo $form['username']->render(array("placeholder" => "Login", "class" => "input-small")) ?>
		<?php echo $form['password']->render(array("placeholder" => "Mot de passe", "class" => "input-small")) ?>
		<input type="submit" class="btn" value="Connexion" />
	</form>
</div>
<div class="well">
    Inscription
</div>