<!doctype html>
<html>
<x-head-component />

<body>
    <x-header-component />
    <section class="bg-lightGray">
        {{ $content }}
    </section>
    <!-- Footer container -->
    <x-footer-component />
    <script src="{{ asset('js/main.js') }}"></script>
    {{ $customScripts ?? ' ' }}
    {{-- @livewireScripts --}}
</body>

</html>
