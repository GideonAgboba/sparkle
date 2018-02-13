 
      <div class="modal fade details-16" id="details-15" tabindex="-1" role="dialog" aria-labelledby="details-15" aria-hidden="false">

	<div class=" modal-content">
		<div class="container-fluid">
			<div class="modal-header m-0 p-0">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true" class=" modal-dialog"><i class="fa fa-close" style="background-color: #fff;"></i></span>
				</button>
				<h5 class="modal-title text-center green-font"><i class="fa fa-edit"></i> Edit profile:</h5>
			</div>
			<div class="modal-body">
      				<div class="row">
	      				<div class="container-fluid col-lg-5 profile-img pt-3">
	      					<img src="imgs/int3.jpg" class="img-responsive center justify-content-center my-auto d-flex">
	      					<form class="p-3">
	      					<input type="file" name="" placeholder="Upload image" class="container-fluid green-body p-3">
	      					<button type="submit" class="btn green-body container-fluid">Uplad image</button>
	      					</form>
	      				</div>
	      				<div class="container-fluid col-lg-7 profile-form">
	      					<form>
	      						<section class="container-fluid">
	      							<input type="text" name="fullname" placeholder="Fullname" required />
	      							<input type="text" name="username" placeholder="Username" required />
		      						<input type="email" name="email" placeholder="Email" required />
		      						<input type="text" name="tel" placeholder="Tel-phone" required />
		      						<input type="text" name="address" placeholder="Address" required />
		      						<input type="text" name="bio" placeholder="Bio" required />
	      						</section>
	      						<section class="row bg-dark">
	      							<div class="col-lg-6 pb-1">
	      								<input type="password" name="" placeholder="Change password">
	      							</div>
	      							<div class="col-lg-6">
	      								<input type="password" name="" placeholder="Confirm password">
	      							</div>
	      						</section>
	      						<button type="submit" class="btn green-body container-fluid">Submit</button>
	      					</form>
	      				</div>
      				</div>
			</div>
		</div>

		</div>
	</div>
<style type="text/css">
	.profile-img form{
		margin: 0 auto !important;
		float: none !important;
		padding: 5px;
	}
	.profile-img img{
		width: 300px;
		height: 300px;
		border-radius: 300px;
		margin: 0 auto !important;
		float: none !important;
	}
	.profile-form form,input{
		text-align: center;
		color: grey;
	}
	label{
		font-size: 21px !important;
		color: #25A187 !important;
	}
</style>