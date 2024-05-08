<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<x-head-component :title=$title />

<body class="relative overflow-x-hidden " x-data="{ toggelMenu: false }">
    <x-header-component />
    <main>
        {{ $main }}
    </main>
    {{ $content ?? '' }}
    <x-footer-component />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js"
        integrity="sha512-hRhHH3+D9xVKPpodEiYzHWIG8CWbCjp7LCdZ00K3/6xsdC3iT0OlPJLIwxSMEl07gya1Ae8iAqXjMMLpzqqh0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{ $customScripts ?? ' ' }}
    @livewireScripts
</body>

</html>
