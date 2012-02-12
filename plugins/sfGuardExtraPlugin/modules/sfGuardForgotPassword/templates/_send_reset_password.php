<?php use_helper('I18N') ?>
<?php echo __('Votre mot de passe a été réinitialisé, vos nouvelles informations de connexion sont ci-dessous') ?>:

<?php echo __('Login') ?>: <?php echo $sfGuardUser->getUsername() ?>
<?php echo __('Mot de passe') ?>: <?php echo $password ?>
