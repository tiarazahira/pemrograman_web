
@php
use App\Models\Logo;
$Logo = Logo::first();
@endphp
<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ Route ('home') }}">
				@if (!empty($Logo->image))
					<img loading="preload" decoding="async" class="img-fluid" width="160" src="{{ Storage::url($Logo->image) }}" alt="Wallet">
				@else
					<span>Logo kosong, silahkan isi dari backend dulu.</span>
				@endif
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{ Route ('home') }}">Home</a></li>
					<li class="nav-item "> <a class="nav-link" href="{{ Route ('about') }}">About Us</a></li>
					<li class="nav-item "> <a class="nav-link" href="services.html">Services</a></li>
					<li class="nav-item "> <a class="nav-link" href="team.html">Our Team</a></li>
					<li class="nav-item "><a class="nav-link " href="blog.html">Blog</a></li>
					<li class="nav-item "><a class="nav-link " href="faq.html">FAQ</a></li>
				</ul>
				<a href="#!" class="btn btn-outline-primary">Contact Us</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->