<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta property="og:title" content="{title}" />
    <meta property="og:description" content="{description}" />
    <meta property="og:url" content="{url}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Hikari Scripts" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="#add the logo link from the project" /> -->
    <!-- <meta property="twitter:title" content="{title}" /> -->
    <!-- <meta property="twitter:description" content="{description}" /> -->
    <!-- <meta property="twitter:url" content="https://twitter.com/HikariScripts" /> -->
    <!-- <meta property="twitter:card" content="summary_large_image" /> -->
    <!-- <meta property="twitter:site" content="@hikariscripts" /> -->
    <!-- <meta property="twitter:image" content="logo link from project" /> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('title','Hikari scripts')</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/owl/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" integrity="sha512-QKC1UZ/ZHNgFzVKSAhV5v5j73eeL9EEN289eKAEFaAjgAiobVAnVv/AGuPbXsKl1dNoel3kNr6PYnSiTzVVBCw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    @if(!isset($header))
    <x-header.main-section />
    @endif
    <!--  -->
    @yield('main')
    @if(!isset($footer))
    <x-footer.main-section />
    @endif
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.js') }}"></script>
    <script src="{{ asset('assets/js/headroom.js') }}"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
      $("#header").headroom();
      // headroom.init();

      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        navText: [
          "<i class='las la-arrow-alt-circle-left icons'></i>",
          "<i class='las la-arrow-alt-circle-right icons'></i>",
        ],
      });
    </script>
    @hasSection ('script')
      @yield('script')    
    @else
        
    @endif

  {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

  </body>
</html>
