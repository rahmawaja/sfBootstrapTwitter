<?php include_partial("main/notice") ?>

<h2>Profil de : <?php echo $sf_user->getGuardUser()->getCompleteName() ?></h2>
<h3>Identifiant : <?php echo $sf_user->getGuardUser()->getUsername() ?></h3>
<h3>Email : <?php echo $sf_user->getGuardUser()->getProfile()->getEmail() ?></h3>

<br />
<?php echo link_to("Éditer mon profil", "user_edit", array(), array("class" => "btn")) ?>