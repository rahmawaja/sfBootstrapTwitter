<?php

/**
 * sfGuardUserProfile form.
 *
 * @package    sfbootstrap
 * @subpackage form
 * @author     Michel Parpaillon
 */
class sfGuardUserProfileForm extends BasesfGuardUserProfileForm {

    public function configure() {

        $this->useFields(array(
            "id",
            "email",
            "first_name",
            "last_name",
            "image_path"
        ));
        
        $file = $this->getObject()->getImagePath();
        $tplFile = "<img src='/uploads/profile/$file' class='img-file' /><br />";

        /** Photo de profil **/
        $this->widgetSchema["image_path"] = new sfWidgetFormInputFileEditable(array(
            "label"       => "Photo de profil",
            "file_src"    => '/uploads/profile/'.$this->getObject()->getImagePath(),
            "is_image"    => true,
            "edit_mode"   => !$this->isNew(),
            "template"     => "<div>$tplFile%input%<br /></div>"
        ), array(
            "class" => "input-file"
        ));

        $this->validatorSchema["image_path"] = new sfValidatorFile(array(
            "required"   => false,
            "mime_types" => "web_images",
            "path"       => sfConfig::get('sf_upload_dir').'/profile',
        ));

        $this->validatorSchema["email"] = new sfValidatorEmail(array(), array(
            "invalid" => "Cet email est invalide."
        ));
    }
}
