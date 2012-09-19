<?php if(isset($globalError) && $globalError != ""): ?>
    <?php if(isset($form) && $form->hasErrors()): ?>
        <div class="alert alert-block alert-error fade in">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading">Erreur(s)</h4>
            <p>
                <ul>
                    <?php foreach($form->getErrorSchema()->getErrors() as $error){ ?>
                        <li><?php echo __($error) ?></li>
                    <?php } ?>
                </ul>
            </p>
        </div>
    <?php endif ?>
<?php else: ?>
    <?php if(isset($form) && $form->hasErrors()): ?>
        <div class="alert fade in alert-error">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <strong>Erreurs ! </strong>
            Des erreurs ont été détéctées lors de la validation du formulaire
        </div>
    <?php endif ?>
<?php endif ?>