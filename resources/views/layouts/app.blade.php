<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>@yield('title')</title>
    <script
      src="https://kit.fontawesome.com/b2c7ef89be.js"
      crossorigin="anonymous"
    ></script>
    <style>
        .table{
            background-color: rgb(50, 51, 55);
            color: rgb(222, 222, 222);
            padding: 2rem;
        }
        .judul{
            background-color: rgb(37, 35, 44);
        }
        .label-jurusan{display: block;
        }
        #jurusan{display: block;};
    </style>
</head>
<body class="container-fluid">
    @include('layouts.app.header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.app.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      <script type="text/javascript">
        setTimeout(function () {
            // Closing the alert
            $('.alert').alert('close');
        }, 3000);
    </script>
</body>
</html>