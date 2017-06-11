<div class="navbar navbar-default" role="navigation">
	<div class="navbar-inner">
		<button type="button" class="navbar-toggle pull-left animated flip">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard"> 
			<span>Matrimonial Admin Panel</span></a>

		<!-- user dropdown starts -->
		<div class="btn-group pull-right">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url();?>admin/profile/edit/1">Edit-Profile</a></li>
				<li class="divider"></li>
				<li><a href="<?=base_url();?>admin/logout">Logout</a></li>
			</ul>
		</div>
		<!-- user dropdown ends -->


		<ul class="collapse navbar-collapse nav navbar-nav top-menu">
			<li><a href="<?php echo base_url(); ?>front"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
		</ul>

	</div>
</div>
