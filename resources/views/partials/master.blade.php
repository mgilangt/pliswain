<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
            <title>PlisWain | Platform No 1 Kirim WhatsApp Gratis</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Whatsapp blast, wa in aja, plis wa in, pesan cepat, pesan kapsul, pesan singkat, teman berbicara, teman curhat" />
            <meta name="keywords" content="pliswain" />
            <meta content="Codebucks" name="author" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <!-- favicon -->
            <link rel="shortcut icon" href="{{ URL::asset('../images/favicon2.ico')}}" />

            @yield('css')
            @include('partials.head-css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">

    @include('partials.preloader')

    @yield('content')

    @include('partials.vendor-script')

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('scripts')

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up-bold"></i>
    </button>
    <!--end back-to-top-->

</body>

</html>