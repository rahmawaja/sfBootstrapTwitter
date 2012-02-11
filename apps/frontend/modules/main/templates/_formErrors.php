<?php if(isset($form) && $form->hasErrors()){?>
	<div class="alert-message block-message error">
		<a class="close" href="#">×</a>
		<p><strong>Erreur(s)</strong></p>
		<ul>
			<?php foreach($form->getErrorSchema()->getErrors() as $key => $error){ ?>
				<li><?php echo $error; ?></li>
			<?php } ?>
		</ul>
	</div>
<?php } ?>