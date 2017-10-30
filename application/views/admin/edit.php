<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="panel panel-default animated  slideInDown">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-0 col-sm-0 col-md-2 col-lg-2">

					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<div class="panel panel-default body animated slideInDown">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Menu Data</h3>
							</div>
							<div class="panel-body">
								<form action="" method="POST" class="form-inline" role="form" enctype="multipart/form-data">

									<?php foreach ($update as $key) { ?>
									<div class="form-group">
										<label class="sr-only" for="">label</label>
										Menu ID<br><input type="text" name="menu_id" id="input" value="<?= $key->menu_id ?>" class="form-control" value=""><br><br>
										Name<br><input type="text" name="name" id="input" value="<?= $key->name ?>" class="form-control" value=""><br><br>
										Description<br><input type="text" name="descript" id="input" value="<?= $key->descript ?>" class="form-control" value=""><br><br>
										Price<br><input type="text" name="price" id="input" value="<?= $key->price ?>" class="form-control" value=""><br><br>
										Member Discount<br><input type="text" name="m_price" id="input" value="<?= $key->m_price ?>" class="form-control" value=""><br><br>
										Menu Image<br><img src="<?php echo base_url() ?>uploads/<?php echo $key->pic ?>" class="img-responsive" alt="Image">
										<br><div class="input-group">
										<input type="text" name="pic_name" class="form-control" value="<?= $key->pic ?>">
										<span class="input-group-btn">
											<span class="btn btn-primary btn-file">
												Browse&hellip; <input type="file" name="pic" multiple>
											</span>
										</span>
									</div>
									<?php } ?>
								</form>
							</div><br><button type="submit" name="update" class="btn circlemed-blu pull-right"><i class="fa fa-check"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-0 col-lg-2">
			
		</div>
	</div>
</div>
</body>
</html>
<style type="text/css">
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}</style>
	<script type="text/javascript">
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});
		$(document).ready( function() {
			$('.btn-file :file').on('fileselect', function(event, numFiles, label) {

				var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;
				if( input.length ) {
					input.val(log);
				} else {
					if( log ) alert(log);
				}
			});
		});
	</script>