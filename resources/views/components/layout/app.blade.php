<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<x-layout.head />
<body>
<x-layout.navbar />
<div class="container-fluid">
    {{$slot}}
</div>

@if($toast)
    <x-parts.toast />
@endif

</body>
</html>
