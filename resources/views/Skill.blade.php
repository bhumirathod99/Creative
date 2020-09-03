@extends('layouts.app')
@section('content')


<div class="colorlib-blog">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">Skill</span>
				<h2 class="colorlib-heading">Freelancer Skill </h2>
			</div>
		</div>
		<div class="row">
		@foreach($skill as $s)
			<!-- <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
				<div class="blog-entry">
					<a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
					<div class="desc">
						<span ><small> {{$s->skill_master }} </small> </span>
						<h3><a href="blog.html">{{ $s->skill }}</a></h3>
						<p>{{ $s->discription }}</p>
					</div>
				</div>
			</div> -->
			
			<div class="col-md-4">
				<a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
					<div class="services-img" style="background-image: url(images/blog-2.jpg)"></div>
					<div class="desc">
						<h3>{{ $s->skill }}</h3>
					</div>
				</a>
			</div>
		@endforeach
		</div>
	
		<!-- <div class="row">
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div> -->
	</div>
</div>

@endsection