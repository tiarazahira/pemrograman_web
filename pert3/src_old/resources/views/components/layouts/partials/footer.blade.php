@php
    use App\Models\Footer;
    $footer = Footer::firts();
@endphp


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            @if(footer)
            
            <a wire:navigate href="{{ route ('home') }}"> Copyright 2025</a>
        </div>
	</div>
</footer>
