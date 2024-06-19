<? require_once '../header.php' ?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Контакты</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Контакты</li>
					</ul>
				</nav>
				
			</div>
		</div>
	</div>
	
	<section class="section-wrapper-8 content-inner-1">
		<div class="container">
			<div class="row inner-section-wrapper align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-5 hover-aware box-hover">
						<div class="icon-bx"> 
							<div class="icon-cell">
								<i class="flaticon-placeholder"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Location</h5>
							<p>6952 Shelley St <br>Melbource</p>
							<div class="effect bg-primary"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-5 hover-aware box-hover active">
						<div class="icon-bx"> 
							<div class="icon-cell">
								<i class="flaticon-telephone"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Phone Number</h5>
							<p>+(800) 800-900-100 <br>+222 33 567 8665</p>
							<div class="effect bg-primary"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-5 hover-aware box-hover">
						<div class="icon-bx "> 
							<div class="icon-cell">
								<i class="flaticon-email-1"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Email Address</h5>
							<p>Info@Webmail.com <br>Info@Example.web.com</p>
							<div class="effect bg-primary"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-5 hover-aware box-hover">
						<div class="icon-bx "> 
							<div class="icon-cell">
								<i class="flaticon-clock-1"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Open & Closing</h5>
							<p>Mon - Fri: 09:00am <br>to  07.00pm </p>
							<div class="effect bg-primary"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-head text-center">
				<h2 class="title">Reservation</h2>
			</div>
			<form class="dzForm dezPlaceAni" method="POST" action="assets/script/contact_smtp.php">
				<div class="dzFormMsg"></div>
				<input type="hidden" class="form-control" name="dzToDo" value="Contact" >
				<div class="row">
					<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
						<label class="form-label text-primary">Your Name</label>
						<div class="input-group input-line input-black">
							<input name="dzName" required type="text" class="form-control" placeholder="John Doe">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
						<label class="form-label text-primary">Your Email</label>
						<div class="input-group input-line input-black">
							<input name="dzEmail" required type="text" class="form-control" placeholder="info@example.com">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
						<label class="form-label text-primary">Your Number</label>
						<div class="input-group input-line input-black">
							<input name="dzPhoneNumber" required type="text" class="form-control dz-number" placeholder="9876543210">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
						<label class="form-label text-primary">Members</label>
						<div class="input-group input-line input-black">
							<input name="dzOther[Person]" required type="text" class="form-control" placeholder="1 Person">
						</div>
					</div>
					<div class="col-sm-12 m-b40">
						<label class="form-label text-primary">Message</label>
						<div class="input-group input-line input-black">
							<textarea name="dzMessage" required class="form-control" placeholder="Hi, do you Have a moment to talk About !"></textarea>
						</div>
					</div>
					<div class="col-sm-12 m-b20">
						<div class="input-recaptcha">
							<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
							<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
						</div>
					</div>
					<div class="col-12 text-center">
						<button name="submit" value="submit" type="submit" class="btn btn-primary btn-hover-1"><span>Book A Table</span></button>
					</div>
				</div>
			</form>
		</div>
	</section>

<? require_once '../footer.php' ?>		
		
	