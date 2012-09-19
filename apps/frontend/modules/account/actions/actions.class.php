<?php

class accountActions extends sfActions {

//    public function executeRegister(sfWebRequest $request) {
//
//        $user = new sfGuardUser();
//        $user->setIsActive(false);
//
//        $form = new sfGuardUserEmbedForm($user, array("niveau" => $niveau));
//
//        if($request->isMethod("put")) {
//
//            $parameters = $request->getParameter($form->getName());
//            $files = $request->getFiles($form->getName());
//
//            $captcha = array(
//                'recaptcha_challenge_field' => $request->getParameter('recaptcha_challenge_field'),
//                'recaptcha_response_field'  => $request->getParameter('recaptcha_response_field'),
//            );
//
//            $parameters = array_merge($parameters, array('captcha' => $captcha));
//            $form->bind($parameters, $files);
//
//            if($form->isValid()) {
//                $user = $form->save();
//
//                $this->getUser()->setFlash("notice", "Ton compte a bien été créé. Un lien d'activation t'a été envoyé par mail.");
//
//                $user->addGroupByName($niveau);
//
//                $body = $this->getComponent("sfGuardAuth", "sendRequestConfirm", array('user' => $user));
//                $subject = "Confirmation de ton compte MyPACES";
//                $from = sfConfig::get("app_mail_from_noreply");
//                $fromName = sfConfig::get("app_mail_from_name");
//
//                $to = $user->getProfile()->getEmail();
//                $toName = $user->getCompleteName();
//
//                $mailer = $this->getMailer();
//                $message = $mailer->compose(array($from => $fromName), array($to => $toName), $subject, $body);
//                $message->setBody($body, 'text/html');
//
//                $mailer->send($message);
//
//                $this->redirect("user_register", array("niveau" => $niveau));
//            }
//        }
//
//        $this->form = $form;
//        $this->niveau = $niveau;
//    }

    public function executeShow(sfWebRequest $request) { }

    public function executeEdit(sfWebRequest $request) {

        $form = new sfGuardUserEmbedForm($this->getUser()->getGuardUser());

        if($request->isMethod("put")) {

            // à supprimer @EDIT
            if(sfConfig::get('sf_environment') == "prod") {
                $this->getUser()->setFlash("notice_information", "L'édition de profil est désactivée sur ce site.");
                $this->redirect("user_profile");
            }

            $parameters = $request->getParameter($form->getName());
            $files = $request->getFiles($form->getName());

            $form->bind($parameters, $files);

            if($form->isValid()) {
                $user = $form->save();

                $this->getUser()->setFlash("notice", "Ton compte a bien été édité.");
                $this->redirect("user_edit");
            }
        }
        
        $this->form = $form;
    }
}