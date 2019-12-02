

<div class="container">
	
	<div class="row">
		
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="wrapper">
				<form method="POST" action="auth/verify/" class="form-signin">
					<h3 class="form-signin-heading text-center">Student Information System</h3>
					<input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off" autofocus>
					<input type="password" class="form-control" name="password" placeholder="Password" required="required" autocomplete="new-password">
					<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
					<?php if($this->session->flashdata('login_error')): ?>
						<br>
						<div class="alert alert-danger text-center" role="alert">
							<strong><?= $this->session->flashdata('login_error') ?></strong>
						</div>
					<?php endif; ?>
				</form>
			</div>

		</div>
		<div class="col-lg-4"></div>

	</div>

</div>

<style>

	#sy {
		margin-bottom: 10px;
	}

	.wrapper {	
		margin-top: 80px;
	  	margin-bottom: 80px;
	}

	.form-signin {
	  	max-width: 380px;
	  	padding: 15px 35px 45px;
	  	margin: 0 auto;
	  	background-color: #fff;
	  	border: 1px solid rgba(0,0,0,0.1);  
	}
  	.form-signin-heading, .checkbox {
	  	margin-bottom: 30px;
	}

	.checkbox {
	  	font-weight: normal;
	}

	.form-control {
	  	position: relative;
	  	font-size: 16px;
	  	height: auto;
	  	padding: 10px;
	 	@include box-sizing(border-box);
		&:focus {
		  	z-index: 2;
		}
	}

	input[type="text"] {
	  	margin-bottom: -1px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}

	input[type="password"] {
		margin-bottom: 20px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}


</style>
