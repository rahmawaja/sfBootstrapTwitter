<?php
// $decode permet d'insérer des balises dans la notice
// $form
?>

<?php if($sf_user->hasFlash('notice')){ ?>
	<div class="alert fade in alert-success">
		<a class="close" data-dismiss="alert" href="#">×</a>
		<p>
			<strong>Succès ! </strong>
			<?php if(isset($decode)){ ?>
				<?php echo html_entity_decode($sf_user->getFlash('notice')); ?>
			<?php }else{ ?>
				<?php echo $sf_user->getFlash('notice');?>
			<?php } ?>
		</p>
	</div>
<?php }elseif ($sf_user->hasFlash('notice_error')){ ?>
	<div class="alert fade in alert-error">
		<a class="close" data-dismiss="alert" href="#">×</a>
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
	<div class="alert fade in alert-info">
		<a class="close" data-dismiss="alert" href="#">×</a>
		<p>
			<strong>Infos ! </strong>
			<?php if(isset($decode)){ ?>
				<?php echo html_entity_decode($sf_user->getFlash('notice_information')); ?>
			<?php }else{ ?>
				<?php echo $sf_user->getFlash('notice_information');?>
			<?php } ?>
		</p>
	</div>
<?php } ?>

<?php if(isset($form)){ ?>
	<?php include_partial('main/formErrors', array('form' => $form))?>
<?php } ?>