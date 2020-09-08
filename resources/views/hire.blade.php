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
									<span class="heading-meta">Select Main Category of Freelancer</span>
									<input type="checkbox" name="clases" value="Bike" id="activecheck1">  Actor<br>
									<input type="checkbox" name="vehicle" value="Car" id="activecheck2">  Designer<br>
									<input type="checkbox" name="vehicle" value="Car" id="activecheck3">  Writter<br>
								</div>
								
							    <div id="active_sub1" class="form-group">
							        <span class="heading-meta">Select Sub Category of Actor</span>
							        <input type="checkbox" name="sports[]" value="cycling" /> Short Film<br/>
							        <input type="checkbox" name="sports[]" value="running" /> Documentary<br/>
							        <input type="checkbox" name="sports[]" value="visit gym" /> Dancing<br/>
							        <input type="checkbox" name="sports[]" value="swimming" /> singing<br/>
							    </div>
							     <div id="active_sub2" class="form-group">
							        <span class="heading-meta">Select Sub Category of Designer</span>
							        <input type="checkbox" name="sports[]" value="cycling" /> Logo Design<br>
							        <input type="checkbox" name="sports[]" value="running" /> Banner Design<br>
							        <input type="checkbox" name="sports[]" value="visit gym" /> Templete Design<br>
							        <input type="checkbox" name="sports[]" value="visit gym" /> Poster<br>
							    </div>
							     <div id="active_sub3" class="form-group">
							        <span class="heading-meta">Select Sub Category of Wriiter</span>
							        <input type="checkbox" name="sports[]" value="cycling" /> Story Writter<br>
							        <input type="checkbox" name="sports[]" value="running" /> Content Writting<br>
							        <input type="checkbox" name="sports[]" value="visit gym" /> Blog<br/>
							    </div>
							    <script type="text/javascript">
								// assign function to onclick property of checkbox
								document.getElementById('activecheck1').onclick = function() {
								    // call toggleSub when checkbox clicked
								    // toggleSub args: checkbox clicked on (this), id of element to show/hide
								    toggleSub(this, 'active_sub1');
								};

								// called onclick of checkbox
								function toggleSub(box, id) {
								    // get reference to related content to display/hide
								    var el = document.getElementById(id);
								    
								    if ( box.checked ) {
								        el.style.display = 'block';
								    } else {
								        el.style.display = 'none';
								    }
								}

								
								document.getElementById('activecheck2').onclick = function() {
								    toggleSub(this, 'active_sub2');
								};
								function toggleSub(box, id) {
								    var el = document.getElementById(id);								    
								    if ( box.checked ) {
								        el.style.display = 'block';
								    } else {
								        el.style.display = 'none';
								    }
								}


								document.getElementById('activecheck3').onclick = function() {
								    toggleSub(this, 'active_sub3');
								};
								function toggleSub(box, id) {
								    var el = document.getElementById(id);
								    if ( box.checked ) {
								        el.style.display = 'block';
								    } else {
								        el.style.display = 'none';
								    }
								}

							</script> 








							    <br/><br/>
							    <div class="form-group"> 
							    <span class="heading-meta">Select Freelancer Level</span>
							    <select id="cars" class="form-control">
								  <option value="volvo">Entry Level</option>
								  <option value="saab">Intermediate level</option>
								  <option value="opel">Expert level</option>
 

 
								</select>
								</div>
								<br/><br/>

							    <div class="form-group">
									<span class="heading-meta">Select Freelancer Language</span>
									<input type="checkbox" name="clases" value="Bike" id="activecheck">  English<br>
									<input type="checkbox" name="vehicle" value="Car" id="activecheck">  Gujarati<br>
									<input type="checkbox" name="vehicle" value="Car" id="activecheck">  Hindi<br>
								</div>
								  
							</div>
						</div>
					</div>

					

					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="Competition">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
								<h2 class="colorlib-heading">Competition Detail</h2>
								<div class="form-group">
									<span class="heading-meta">Competition Name</span>
									<input type="text" class="form-control" placeholder="Competition Name">
								</div>
								<div class="form-group">
									<span class="heading-meta">Competition Detail</span>
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Competion  Discription"></textarea>
								</div>
								<div class="form-group">
									<span class="heading-meta">Registration Deadline</span>
									<input type="date" class="form-control" placeholder="Registraion Deadline">
								</div>
								<div class="form-group">
									<span class="heading-meta">Submission Deadline</span>
									<input type="date" class="form-control" placeholder="Submission Deadline">
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="Budget">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Project Budget</h2>
								<div class="form-group">
									<span class="heading-meta">Project Completetion Day</span>
									<input type="number" class="form-control" placeholder="Completetion Day">
								</div>
								<div class="form-group">
									<span class="heading-meta">Project Completetion Hour</span>
									<input type="number" class="form-control" placeholder="Completetion Hour">
								</div>
								<div class="form-group">
									<span class="heading-meta">Project Budject</span>
									<input type="number" class="form-control" placeholder="Budget">
								</div>
								<div class="form-group">
									<span class="heading-meta">First Payment After Prototype</span>
									<input type="number" class="form-control" placeholder="First Payment">
								</div>
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
@endsection
