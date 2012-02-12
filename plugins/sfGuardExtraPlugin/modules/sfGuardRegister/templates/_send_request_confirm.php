<?php use_helper('I18N') ?>
<?php echo __('Bonjour') ?> <?php echo $sfGuardUser->getUsername() ?>,
<?php echo __('Cliquez ici pour confirmer votre inscription :') ?>
<?php echo url_for('@sf_guard_register_confirm?key='.$sfGuardUser->getPassword().'&id='.$sfGuardUser->getId(), true) ?>

<?php if(sfConfig::get('app_sf_guard_extra_plugin_send_password')){ ?>
    <?php echo __('Your login information can be found below') ?>:
    <?php echo __('Username') ?>: <?php echo $sfGuardUser->getUsername() ?>
    <?php echo __('Password') ?>: <?php echo $password ?>
<?php } ?>