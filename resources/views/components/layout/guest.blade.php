<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<x-layout.head />
<body>

{{$slot}}
<x-parts.toast/>
</body>
</html>
