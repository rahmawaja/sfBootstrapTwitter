<?php

/**
 * sfGuardUser form for admin.
 *
 * @package    form
 * @subpackage sf_guard_user
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 13000 2008-11-14 10:44:57Z noel $
 */
class sfGuardUserEmbedForm extends BasesfGuardUserForm {

    protected
    $pkName = null;

    public function configure() {

        unset(
            $this['last_login'], 
            $this['created_at'],
            $this['salt'],
            $this['algorithm'],
            $this['is_active'],
            $this['is_super_admin'],
            $this['sf_guard_user_permission_list'],
            $this['sf_guard_user_group_list']
        );

        if ($this->isNew()) {
            $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array("public_key" => sfConfig::get('app_recaptcha_public_key')));
            $this->widgetSchema['captcha']->setLabel("Es-tu un humain ?");
            $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array("private_key" => sfConfig::get('app_recaptcha_private_key')));

        } else {
            $this->widgetSchema['old_password'] = new sfWidgetFormInputPassword();
            $this->widgetSchema['old_password']->setLabel("Ancien mot de passe");
            $this->validatorSchema['old_password'] = new sfValidatorString(array("required" => false));

            $this->widgetSchema->moveField('old_password', 'before', 'password');

            $this->validatorSchema->setPostValidator(
                new sfValidatorCallback(array('callback' => array($this, 'checkOldPassword')))
            );
        }

        $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
        $this->validatorSchema['password']->setOption('required', false);
        $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
        $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
        
        $this->widgetSchema->moveField('password_again', 'after', 'password');

        $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'Les deux mots de passe doivent être identiques.')));

        $profile = $this->getObject()->getProfile();
        $form = new sfGuardUserProfileForm($profile);
        $form->getObject()->setsfGuardUser($this->getObject());

        $this->embedForm('profile', $form);
    }

    public function checkOldPassword($validator, $values) {
        if($values['password'] != "") {
            $this->validatorSchema['old_password']->setOption('required', true);
            if($values['old_password'] == "") {
                throw new sfValidatorError($validator, "Vous devez renseigner votre ancien mot de passe pour pourvoir en changer.");
            }

            if($this->getObject()->getPassword() != sha1($this->getObject()->getSalt().$values['old_password'])) {
                throw new sfValidatorError($validator, "Votre ancien mot de passe est incorrect.");
            }
        }

        return $values;
    }

}
