@extends('layouts.app')
@section('content')

	<div class="colorlib-services">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta">Hire</span>
					<h2 class="colorlib-heading">Hire best Freelancer</h2>
				</div>
			</div>
			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="row">
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#BrandName" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Your  <br>Brand Name</h3>
									</a>
								</div>
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#BrandName" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Your <br>Brand Detail</h3>
									</a>
								</div>
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerExpert" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Freelancer <br>Expertise</h3>
									</a>
								</div>
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#Competition" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Competition <br>Detail</h3>
									</a>
								</div>
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#Budget" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Your <br>Budget</h3>
									</a>
								</div>
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#Review" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Complete <br>Review</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<form action="">
					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="BrandName">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading ">Brand Name</h2>
								<div class="form-group">
									<span class="heading-meta">Name Your Brand</span>
									<input type="text" class="form-control" placeholder="Name">
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="BrandDetail">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Brand Detail</h2>
								<div class="form-group">
									<span class="heading-meta">Your brand or advertisment compelete detail</span>
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Discripetive Detail"></textarea>
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerExpert">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Freelancer Expertice</h2>
								<div class="form-group">
									<select name="cars" id="cars" multiple class="form-control">
									  <option value="volvo">Dancer</option>
									  <option value="saab">Actor</option>
									  <option value="opel">Content Writter</option>
									  <option value="audi">Designer</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="Competition">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Brand Name</h2>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="Budget">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Brand Name</h2>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="Review">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Brand Name</h2>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
