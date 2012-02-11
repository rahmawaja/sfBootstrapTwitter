<?php

/**
 * PluginsfGuardFormRegister
 * @package    symfony
 * @subpackage form
 */
class PluginsfGuardFormRegister extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'username'         => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'password'         => new sfWidgetFormInputPassword(),
      'password_confirm' => new sfWidgetFormInputPassword(),
    ));

    $this->setValidators(array(
      'username'         => new sfValidatorString(array('trim' => true), array('required' => 'Le login est requis.')),
      'email'            => new sfValidatorEmail(array('trim' => true), array('required' => 'L\'adresse email est requise.', 'invalid' => 'L\'adresse email est invalide.')),
      'password'         => new sfValidatorString(array('min_length' => 8), array('min_length' => 'Mot de passe trop court (%min_length% caractères minimumu).', 'required' => 'Le mot de passe est requis.')),
      'password_confirm' => new sfValidatorString(array(), array('required' => 'Confirmation du mot de passe requise.')),
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_confirm', array(), array('invalid' => 'The two passwords do not match')),
      new sfValidatorPropelUnique(array('trim' => true, 'model' => 'sfGuardUser', 'column' => array('username')), array('invalid' => 'This username already exists. Please choose another one.')),
    )));

    $this->widgetSchema->setNameFormat('register[%s]');
    
    $this->widgetSchema['username']->setLabel("Login");
    $this->widgetSchema['password']->setLabel("Mot de passe");
    $this->widgetSchema['password_confirm']->setLabel("Confirmation");
  }
}
