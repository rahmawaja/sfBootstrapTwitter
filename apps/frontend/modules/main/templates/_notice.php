<?php
// $decode permet d'insérer des balises dans la notice
// $form
?>

<?php if($sf_user->hasFlash('notice')){ ?>
	<div class="alert-message success">
		<a class="close" href="#">×</a>
		<p>
			<strong>Succès ! </strong>
			<?php if(isset($decode)){ ?>
				<?php echo html_entity_decode($sf_user->getFlash('notice_error')); ?>
			<?php }else{ ?>
				<?php echo $sf_user->getFlash('notice_error');?>
			<?php } ?>
		</p>
	</div>
<?php }elseif ($sf_user->hasFlash('notice_error')){ ?>
	<div class="alert-message error">
		<a class="close" href="#">×</a>
		<p>
			<strong>Erreur ! </strong>
			<?php if(isset($decode)){ ?>
				<?php echo html_entity_decode($sf_user->getFlash('notice_error')); ?>
			<?php }else{ ?>
				<?php echo $sf_user->getFlash('notice_error');?>
			<?php } ?>
		</p>
	</div>
<?php }elseif($sf_user->hasFlash('notice_information')){ ?>
	<div class="alert-message info">
		<a class="close" href="#">×</a>
		<p>
			<strong>Infos ! </strong>
			<?php if(isset($decode)){ ?>
				<?php echo html_entity_decode($sf_user->getFlash('notice_error')); ?>
			<?php }else{ ?>
				<?php echo $sf_user->getFlash('notice_error');?>
			<?php } ?>
		</p>
	</div>
<?php } ?>

<?php if(isset($form)){ ?>
	<?php include_partial('main/formErrors', array('form' => $form))?>
<?php } ?>