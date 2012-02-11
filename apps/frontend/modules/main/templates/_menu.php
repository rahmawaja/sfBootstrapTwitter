<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo link_to("sfBootstrap", "@homepage", array("class" => "brand")) ?>
            <?php if($sf_user->isAuthenticated()){ ?>
    			<div class="nav-collapse">
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
    				</ul>
    				<ul class="nav pull-right">
    					<li><?php echo link_to("<i class='icon-remove icon-white'></i> Deconnexion", "@sf_guard_signout", array("alt_title" => "Deconnexion")) ?></li>
    				</ul>
                    <p class="navbar-text pull-right">
                        Connecté en tant que <a href="#"><?php echo $sf_user->getUsername() ?></a>
                    </p>
    			</div>
            <?php } ?>
		</div>
	</div>
</div>