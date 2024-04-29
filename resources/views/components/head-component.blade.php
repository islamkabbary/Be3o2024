<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ $title }}</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    {{ $customStyles ?? ' ' }}
    {{-- @livewireStyles --}}
</head>
