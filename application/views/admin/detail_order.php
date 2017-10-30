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
						<h3 class="panel-title">Order Cart</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<!-- <label for="">label</label>
									<input type="text" class="form-control" id="" placeholder="Input field">
								</div> -->
								<tr>
									<th>ID</th>
									<th>Order ID</th>
									<th>Name</th>
									<th>Menu ID</th>
									<th>Menu Name</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody><?php 
								foreach ($order as $key) {
									?>
									<tr>
										<td><?= $key->detail_order_id ?></td>
										<td><?= $key->order_id ?></td>
										<td><?= $key->name ?></td>
										<td><?= $key->menu_id ?></td>
										<td><?= $key->name ?></td>
										<td><?= $key->price ?></td>
									</tr><?php }?>
									<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
								</form><thead>
							</tbody>
						</table>
						<p><a href="<?= base_url().'Admin/confrim_order/'.$id_num?>" type="button" class="btn btn-lg btn-primary">Confirm transaction <i class="fa fa-check"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>