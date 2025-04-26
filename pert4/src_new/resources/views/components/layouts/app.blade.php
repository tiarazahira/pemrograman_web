<!DOCTYPE html>

<html lang="en-us">

@include('components.partials.header')
<body>

@include('components.partials.navbar')

{{ $slot }}

@include('components.partials.footer')

@include('components.partials.scripts')

</body>
</html>