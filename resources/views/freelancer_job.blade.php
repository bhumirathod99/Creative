@extends('layouts.app')
@section('content')

	<div class="colorlib-services ">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta">Job</span>
					<h2 class="colorlib-heading">Find Freelancer Job</h2>
				</div>
			</div>
			<div class="colorlib-about ">
				<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="row">
								
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerExpert" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Select <br>Your Skill</h3>
									</a>
								</div>

								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerLevel" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Your <br>Job Level</h3>
									</a>
								</div>

								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerEducation" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Education  <br>Detail</h3>
									</a>
								</div>

								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerPastExperinace" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Past Job <br>Experiance</h3>
									</a>
								</div>
								
								<div class="col-md-2 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#FreelancerLanguage" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Language <br>You Know</h3>
									</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<form action="">

				<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerExpert">
						<div class="row">	
							<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
								<h2 class="colorlib-heading">Skill</h2>
								

								<div class="form-group">
									<span class="heading-meta">Select Main Category of Skill</span>
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
						</div>
					</div>
				</div>

				<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerLevel">
					<div class="row">	
						<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
							<h2 class="colorlib-heading ">Your Level</h2>
							<div class="form-group"> 
							    <span class="heading-meta">Select Freelancer Level</span>
							    <select id="cars" class="form-control">
								 	<option value="volvo">Entry Level</option>
								  	<option value="saab">Intermediate level</option>
								  	<option value="opel">Expert level</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerEducation">
					<div class="row">	
						<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
							<h2 class="colorlib-heading">Education Detail</h2>
							<div class="form-group">
								<div class="form-group"> 
									<span class="heading-meta">Your Collage Name</span>
									<input type="text" class="form-control" placeholder="Enter Collage Name">
								</div>
								<div class="form-group"> 
									<span class="heading-meta">Your Course</span>
									<input type="text" class="form-control" placeholder="Enter Course Name">
								</div>
								<div class="form-group"> 
								    <span class="heading-meta">Your Degree</span>
								    <select id="cars" class="form-control">
									 	<option value="volvo">Diploma</option>
									  	<option value="saab">Bacholer</option>
									  	<option value="opel">Master</option>
									  	<option value="opel">PHD</option>
									</select>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerPastExperinace">
					<div class="row">	
						<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
							<h2 class="colorlib-heading ">Past Experinace</h2>
							<div class="form-group">
								<span class="heading-meta">Your position</span>
								<select id="cars" class="form-control">
								 	<option value="volvo">Team Leader</option>
								  	<option value="saab">Manager</option>
								  	<option value="opel">Assistant Manager</option>
									<option value="opel">Coordinator</option>
									<option value="opel">Administrator</option>
								</select>
							</div>

							<div class="form-group"> 
								<span class="heading-meta">Company Name</span>
								<input type="text" class="form-control" placeholder="Enter Company Name">
							</div>


							<div class="form-group"> 
								<span class="heading-meta">Location</span>
								<input type="text" class="form-control" placeholder="Enter Company Location">
							</div>	

							<div class="form-group"> 
								<span class="heading-meta">Joining Date</span>
								<input type="date" class="form-control" placeholder="Enter Company Location">
							</div>	

							<div class="form-group"> 
								<span class="heading-meta">Leaving Date</span>
								<input type="date" class="form-control" placeholder="Enter Company Location">
							</div>	
						</div>
					</div>
				</div>

				<div class="col-md-8 col-md-offset-1 col-md-push-1 hire-form" id="FreelancerLanguage">
					<div class="row">	
						<div class="col-md-10  col-md-pull-1 animate-box" data-animate-effect="fadeInLeft" id="BrandName">
							<h2 class="colorlib-heading ">Language</h2>
							<div class="form-group"> 
								<span class="heading-meta">Select Freelancer Language</span>
								<input type="checkbox" name="clases" value="Bike" id="activecheck">  English<br>
								<input type="checkbox" name="vehicle" value="Car" id="activecheck">  Gujarati<br>
								<input type="checkbox" name="vehicle" value="Car" id="activecheck">  Hindi<br>
							</div>
						</div>
					</div>
				</div>				

				</form>
			</div>
		</div>
	</div>
@endsection
