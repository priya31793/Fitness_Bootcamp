<?php $this->load->view('header'); ?>
  <div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url()?>home">DB &nbsp;<span>Fitness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="<?=base_url()?>home"><b>Home</b></a>
								</li>
								<li><a href="<?=base_url()?>home#contact"><b>Contact</b></a></li>
								<li class="active"><a href="<?=base_url()?>user/login_view"><b>Sign in </b></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url('../images/home.jpg');">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<p><span>The DB Fitness Centre offers a range of fitness and wellness services. Our Team provides and delivers high quality training and professionalism across all areas.</span></p>
								<span><a class="btn btn-primary" href="<?=base_url()?>user/login_view">Sign up/ Register</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
				<div id="body">
				<?php
				  $success_msg= $this->session->flashdata('success_msg');
				  $error_msg= $this->session->flashdata('error_msg');
				  if($success_msg){
					?>
					<div class="alert alert-success">
					  <?php echo $success_msg; ?>
					</div>
				  <?php
				  }
				  if($error_msg){
					?>
					<div class="alert alert-danger">
					  <?php echo $error_msg; ?>
					</div>
					<?php
				}
				?>	
                <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
								<?php echo form_error('user_email','<span style="color:red;" class="error">','</span>')?>
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
								<?php echo form_error('user_password','<span style="color:red;" class="error">','</span>')?>
                                <input class="form-control" placeholder="Password" name="user_password" type="password" required >
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
					<center><a href="" data-toggle="modal" data-target="#myModal">Forgot Password</a></center><!--for centered text-->
					<center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user'); ?>">Register here</a></center><!--for centered text-->
                </div>
				</div>
            </div>
        </div>
    </div>
	</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Reset your password</h4>
      </div>
      <div class="modal-body">         
        <?php 
		  echo $this->session->flashdata('message'); 
          echo $this->session->flashdata('msg'); 
          echo form_open('user/ForgotPassword'); 
        ?> 
	  <table class="table table-bordered table-hover table-striped">                                      
			<tbody>
			<tr>
			<td>Enter Email: </td>
			<td>
				<input type = "email" name = "user_email" id = "user_email" style="width:250px" required /> 
			</td>
			<td>
				<input type = "submit" value = "Submit" class="button"> 
			</td>
			</tr>
			</tbody>               
	  </table>
      <?php 
         echo form_close(); 
      ?> 
        <div id="fade" class="black_overlay"></div>                    
        </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<?php $this->load->view('footer'); ?> 