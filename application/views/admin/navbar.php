<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top animated slideInDown" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url()?>admin/index">Lorem @</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
			<!-- <li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li> -->
		</ul>
		<form action="<?= base_url()?>admin/search" method="POST" class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Search" required>
			</div>
			<button type="submit" class="btn-circle btn-default"><i class="fa fa-search"></i></button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			
			<li><a href="<?= base_url()?>admin/index"><i class="fa fa-home"></i> Home</a></li>
			
			<li><a href="<?= base_url()?>admin/cart"><i class="fa fa-cart-arrow-down"></i> Order Carts</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-navicon"></i><!--  <b class="caret"></b> --></a>
				<ul class="dropdown-menu animated zoomIn">
					<li><a href="<?= base_url()?>admin/menu"><i class="fa fa-list-ul"></i> Menu</a></li>
					<li><a href="<?= base_url()?>admin/input"><i class="fa fa-plus"></i> Add Menu Data</a></li>
					<li><a href="<?= base_url()?>admin/served_order"><i class="fa fa-check"></i> Served Orders</a></li>
					<li><a href="<?= base_url()?>admin/feed"><i class="fa fa-comments"></i> Feedbacks</a></li>
					<li><a href="<?= base_url()?>Login/logout"><i class="fa fa-sign-out"></i> Sign Out</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
</body>
</html>