<?php
// $decode permet d'insérer des balises dans la notice
// $form
// $globalError permet d'afficher les erreurs de form en haut
?>

<?php if ($sf_user->hasFlash('notice')) { ?>
    <div class="alert fade in alert-success">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <strong>Succès ! </strong>
        <?php if (isset($decode)) { ?>
            <?php echo html_entity_decode($sf_user->getFlash('notice')); ?>
        <?php } else { ?>
            <?php echo $sf_user->getFlash('notice'); ?>
        <?php } ?>
    </div>
<?php } elseif ($sf_user->hasFlash('notice_error')) { ?>
    <div class="alert fade in alert-error">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <strong>Erreur ! </strong>
        <?php if (isset($decode)) { ?>
            <?php echo html_entity_decode($sf_user->getFlash('notice_error')); ?>
        <?php } else { ?>
            <?php echo $sf_user->getFlash('notice_error'); ?>
        <?php } ?>
    </div>
<?php } elseif ($sf_user->hasFlash('notice_information')) { ?>
    <div class="alert fade in alert-info">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <strong>Infos ! </strong>
        <?php if (isset($decode)) { ?>
            <?php echo html_entity_decode($sf_user->getFlash('notice_information')); ?>
        <?php } else { ?>
            <?php echo $sf_user->getFlash('notice_information'); ?>
        <?php } ?>
    </div>
<?php } ?>

<?php if (isset($form)) { ?>
    <?php $globalError = isset($globalError) ? $globalError : ""; ?>
    <?php include_partial('main/formErrors', array('form' => $form, "globalError" => $globalError)) ?>
<?php } ?>