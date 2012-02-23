<?php /* Listing des erreurs de form (redondant avec les erreurs inline) ?>
<?php if(isset($form) && $form->hasErrors()){?>
    <div class="alert alert-block alert-error fade in">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Erreur(s)</h4>
        <p>
            <ul>
    			<?php foreach($form->getErrorSchema()->getErrors() as $key => $error){ ?>
    				<li><?php echo $error; ?></li>
    			<?php } ?>
            </ul>
        </p>
    </div>
<?php } ?>
<?php */ ?>
<?php if(isset($form) && $form->hasErrors()){?>
    <div class="alert fade in alert-error">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <strong>Erreur(s) ! </strong>
        Des erreurs ont été détéctées lors de la validation du formulaire
    </div>
<?php } ?>