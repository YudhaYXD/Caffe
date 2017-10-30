<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="panel panel-default animated slideInDown">
			<div class="panel-body panel-contents">
				<div class="panel panel-default ">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-cart-arrow-down"></i> Order Cart</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<!-- <form action="" method="POST" role="form"> -->
							<div class="form-group">
							<form action="<?= base_url().'Order/index' ?>" method="POST">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
											<input type="text" name="name" id="input" class="form-control white" placeholder="Name" value="<?= $this->session->userdata('user'); ?>" required><br>
											<input type="text" name="num" id="input" class="form-control white" value="" placeholder="Table number" required>
										</div>
									</div>
											<!-- <label for="">label</label>
									<input type="text" class="form-control" id="" placeholder="Input field">
								</div> -->
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody><?php 
								$cart= $this->cart->contents();
								foreach ($cart as $key) {
									?>
									<tr>
										<td><?= $key['id'] ?></td>
										<td><?= $key['rname'] ?></td>
										<td><?= $key['qty'] ?></td>
										<td><?= $key['price'] ?></td>
										<td><a href="<?= base_url()?>cart/delete_cart/<?= $key['rowid'] ?>" type="button" class="btn circle-red btn-primary"><i class="fa fa-times"></i></a></td>
									</tr><?php }?>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td rowspan="4">
											<h3>Rp.<?= $this->cart->total(); ?>,-</h3>
										</td>
									</tr>
									
									<!-- </form> -->
									<thead>
									</tbody>
								</table>
								<a href="<?= base_url()?>cart/clear" type="button" class="btn circlemed-red pull-right"><i class="fa fa-rotate-left"></i></a><br><br><br>
								<button type="submit" class="btn circlemed-blu pull-right"><i class="fa fa-check"></i></button>
								<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>	