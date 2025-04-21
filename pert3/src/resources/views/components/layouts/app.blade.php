<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.header')
    @livewireStyles
</head>

<body>

@include('partials.navbar')
{{ $slot }}


@include('partials.footer')

@include('partials.script')
@livewireScripts
</body>
</html>
