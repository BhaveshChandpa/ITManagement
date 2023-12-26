<!doctype html>

<html>

<head>

   @include('layout.head')

</head>

<body class="sb-nav-fixed">

        @include('layout.navbar')


    <div id="layoutSidenav">

        @include("layout.sidebar")

    <div id="layoutSidenav_content">
        <main>

            
            @yield('content')

            
        </main>
      

    </div>

</div>
       @include('layout.footer')
</body>

</html>