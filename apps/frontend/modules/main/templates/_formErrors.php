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