<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo link_to("Société E3", "@homepage", array("class" => "brand")) ?>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php echo $sf_context->getModuleName() == "dashboard" ? "class='active'" : "" ?>>
						<?php echo link_to("Dashboard", "@homepage") ?>
					</li>
					<li <?php echo $sf_context->getModuleName() == "contact" ? "class='active'" : "" ?>>
						<?php echo link_to("Contact", "@homepage") ?>
					</li>
				</ul>
				<ul class="nav pull-right">
					<li <?php echo $sf_context->getActionName() == "demo" ? "class='active'" : "" ?>>
						<?php echo link_to("Demo", "@demo") ?>
					</li>
					<li <?php echo $sf_context->getActionName() == "icon" ? "class='active'" : "" ?>>
						<?php echo link_to("Icons", "@icon") ?>
					</li>
					<li><?php echo link_to("Deconnexion", "@sf_guard_signout") ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>