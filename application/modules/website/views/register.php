<?php  //echo"<pre>";print_r($country); die;?>
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
	<div class="content-switcher">
		<h4>STYLE SWITCHER</h4>
		<ul>
			<li>
				<a id="orange-css" href="#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
			</li>
			<li>
				<a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
			</li>
			<li>
				<a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
			</li>
		</ul>

		<p>BODY SKIN</p>

		<label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
		<label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

		<hr />

		<p>LAYOUT STYLE</p>
		<label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
		<label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

		<hr/>

		<a href="#" class="custom-button purchase">Purchase</a>
		<div id="hideSwitcher">&times;</div>

	</div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Wrapper Starts -->
<div class="wrapper">
	<div class="container-fluid user-auth">
		<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
			<!-- Logo Starts -->
			<a class="logo" href="index.html">
				<img id="logo-user" class="img-responsive" src="<?php echo base_url()?>images/logo-dark.png" alt="logo">
			</a>
			<!-- Logo Ends -->
			<!-- Slider Starts -->
			<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
				<!-- Indicators Starts -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-testimonials" data-slide-to="1"></li>
					<li data-target="#carousel-testimonials" data-slide-to="2"></li>
				</ol>
				<!-- Indicators Ends -->
				<!-- Carousel Inner Starts -->
				<div class="carousel-inner">
					<!-- Carousel Item Starts -->
					<div class="item active item-1">
						<div>
							<blockquote>
								<p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
								<footer><span>Lucy Smith</span>, England</footer>
							</blockquote>
						</div>
					</div>
					<!-- Carousel Item Ends -->
					<!-- Carousel Item Starts -->
					<div class="item item-2">
						<div>
							<blockquote>
								<p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
								<footer><span>Slim Hamdi</span>, Tunisia</footer>
							</blockquote>
						</div>
					</div>
					<!-- Carousel Item Ends -->
					<!-- Carousel Item Starts -->
					<div class="item item-3">
						<div>
							<blockquote>
								<p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
								<footer><span>Dalel Boubaker</span>, Russia</footer>
							</blockquote>
						</div>
					</div>
					<!-- Carousel Item Ends -->
				</div>
				<!-- Carousel Inner Ends -->
			</div>
			<!-- Slider Ends -->
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<!-- Logo Starts -->
			<a class="visible-xs" href="index.html">
				<img id="logo" class="img-responsive mobile-logo" src="images/logo-dark.png" alt="logo">
			</a>
			<!-- Logo Ends -->
			<div class="form-container">
				<div>
					<!-- Section Title Starts -->
						<!-- <div class="row text-center">
							<h2 class="title-head hidden-xs">get <span>started</span></h2>
							 <p class="info-form">Open account for free and start trading Bitcoins now!</p>
							</div> -->
							<!-- Section Title Ends -->
							<!-- Form Starts -->
							<form method="post"  id='formvalid' action="<?php echo base_url()?>website/insert_user">
								<!-- Input Field Starts -->
								<div class="form-group">
									<input class="form-control" name="name" id="name" placeholder="NAME" type="text" required>
								</div>
								<!-- Input Field Ends -->
								<div class="form-group">
									<input class="form-control" name="btc" id="btc" placeholder="BTC ADDRESS" type="text" required>
								</div>
								<!-- Input Field Starts -->
								<div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
								</div>

								<div class="form-group">
									<input class="form-control" name="mobile" id="mobile" placeholder="MOBILE NO" type="text" required>
								</div>
								<div class="form-group">
									<!-- <input class="form-control" name="country" id="country" placeholder="Select Country Code" type="text" required> -->
									<div class="row">
										<div class="col-md-4">
											<select name="country" required onchange="get_state(this.value)" class="form-control">
												<option value="" disabled selected="">Country</option>
												<?php
										//print_r($country); die;
												if(!empty($country))
												{
													foreach ($country as $key => $value) {

														echo "<option value='".$value['id']."'>
														".$value['name']."
														</option>";
													}
												}

												?>
											</select>
										</div>
										<div class="col-md-4">
											<select id="state" required name="state" onchange="get_city(this.value)" class="form-control">
												<option value="" disabled selected="">States</option>
											</select>

										</div>
										<div class="col-md-4">
											<select name="city" id="city" required class="form-control">
												<option value="" disabled selected="">City</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
								<?php

									if(!empty($this->input->get('id')))
									{
										//echo"<script>alert('here')</script>";
										$sponser_id = $this->input->get('id');
										//echo $sponser_id; die;

									}
									else
									{
										$sponser_id='';
									}
								?>
								<input class="form-control" name="sponser_id" id="spomser_id" value="<?php echo  $sponser_id ?>" placeholder="SPONSER" type="text" required>

							</div>

							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<div class="form-group">
								<input class="form-control" name="password2" id="password2" placeholder="CONFIRM PASSWORD" type="password" required>
							</div>
							<?php

							if($this->session->flashdata('pm'))
							{
								echo "<span Style = margin-top:-10px;>";
								echo"<font color = 'red'>";
								echo "Password Did Not Match";
								echo"</font>";
								echo"</span>";
							}
							?>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit">create account</button>
								<p class="text-center">already have an account ? <a href="login.html">Login</a>
								</div>
								<!-- Submit Form Button Ends -->
							</form>
							<!-- Form Ends -->
						</div>
					</div>
					<!-- Copyright Text Starts -->
					<p class="text-center copyright-text">Copyright © 2018 Bayya All Rights Reserved</p>
					<!-- Copyright Text Ends -->
				</div>
			</div>
			<!-- Template JS Files -->
       <!--  <script type="text/javascript">
        	$().ready(function () {
        	
        	$("#formvalid").validate({
           
            rules: {
                name: "required",
                btc: "required",
                email: "required",
                mobile: "required",
                sponser_id:"required",
                    password: {
                        required: true,
                        minlength : 6
                    },
                    password_confirm: {
                      equalTo: "#password"
                    }                   
            },
            messages: {
                name: "Enter your name.",
                btc: "Enter your btc",
                email: "Enter your email",
                mobile: "Enter your mobile",
                password: {
                    required: "Please enter a password.",
                    minlength: "Your password must be at least 6 characters in length",
                }

            }
          });
        	});

        </script>> -->
        <script type="text/javascript">

        	function get_state(val)
        	{
	//alert(val);
	country_id = val; 

	$.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>" + "index.php/website/get_state",
		dataType: 'json',
		data: {id:country_id},
		success: function(data){
                //alert(data);
                //alert(data);
                //console.log(data);
                $('#state').html(data);
            },
        });
}
function get_city(val)
{
	//alert(val);
	city_id = val; 

	$.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>" + "index.php/website/get_city",
		dataType: 'json',
		data: {id:city_id},
		success: function(data){
                //alert(data);
                //alert(data);
                //console.log(data);
                $('#city').html(data);
            },
        });
}

</script>