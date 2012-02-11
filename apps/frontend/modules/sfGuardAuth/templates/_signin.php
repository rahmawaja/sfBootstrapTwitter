<h1>Connexion</h1>
<p>
	Vestibulum id ligula porta felis euismod semper. Integer posuere erat
	a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non
	commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
	elit.
	<br />
	<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="well form-search">
		<?php echo $form['_csrf_token'] ;?>
		<?php echo $form['username']->render(array("placeholder" => "Login", "class" => "input-small")) ?>
		<?php echo $form['password']->render(array("placeholder" => "Mot de passe", "class" => "input-small")) ?>
		<input type="submit" class="btn" value="Go" />
	</form>
</p>