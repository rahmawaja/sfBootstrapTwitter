<?php use_helper('I18N') ?>
<?php echo __('Bonjour') ?> <?php echo $sfGuardUser->getUsername() ?>,

<?php echo __('Cliquez ici pour réinitialiser votre mot de passe') ?>

<?php echo url_for('@sf_guard_forgot_password_reset_password?key='.$sfGuardUser->getPassword().'&id='.$sfGuardUser->getId(), true) ?>
