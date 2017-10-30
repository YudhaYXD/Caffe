<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Login</h4>
				</div>
				<div class="modal-body">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<form action="<?=base_url()?>Login/index" method="POST" class="form-inline text-center" role="form">
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<!-- <i class="fa fa-user red"></i> --> <input type="text" name="user" id="inputUser" class="form-control white" value="" placeholder="Username" required><br><br>
							<!-- <i class="fa fa-key red"></i> --> <input type="password" name="pass" id="inputPass" class="form-control white" placeholder="Password" required>
						</div>
						<br>
						<br>
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
					</form>	
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
						<i class="fa fa-users fa-4x red"></i>
					</div>
				</div>
					
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>