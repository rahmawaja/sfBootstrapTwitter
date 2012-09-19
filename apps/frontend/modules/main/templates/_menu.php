<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo link_to("sfBootstrap", "@homepage", array("class" => "brand")) ?>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li <?php echo $sf_context->getActionName() == "index" ? "class='active'" : "" ?>>
                        <?php echo link_to("<i class='icon-home icon-white'></i> Dashboard", "@homepage") ?>
                    </li>
                    <li <?php echo $sf_context->getActionName() == "demo" ? "class='active'" : "" ?>>
                        <?php echo link_to("<i class='icon-play icon-white'></i> Demo", "@demo") ?>
                    </li>
                    <li <?php echo $sf_context->getActionName() == "icon" ? "class='active'" : "" ?>>
                        <?php echo link_to("<i class='icon-leaf icon-white'></i> Icons", "@icon") ?>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <?php echo link_to("<i class='icon-download-alt icon-white'></i> Fork me on Github", "https://github.com/mparpaillon/sfBootstrapTwitter", array("target" => "blank")) ?>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    <li><?php echo link_to("<i class='icon-remove icon-white'></i> Deconnexion", "@sf_guard_signout", array("alt_title" => "Deconnexion")) ?></li>
                </ul>
                <?php if($sf_user->isAuthenticated()) { ?>
                    <p class="navbar-text pull-right">
                        Connecté en tant que <?php echo link_to($sf_user->getUsername(), "@user_profile") ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>