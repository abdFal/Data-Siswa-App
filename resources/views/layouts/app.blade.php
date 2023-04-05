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
        #sidebar-wrapper {
        position: fixed;
        right: 0;
        width: 200px;
        height: 100%;
        background-color: #f8f9fa;
        border: none;
        border-left: 1px solid #dee2e6;
        border-right: 1px solid #dee2e6;
    }

    .sidebar-nav {
        margin-right: 1rem;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        border-bottom: 1px solid #6d6f71;
    }

    .sidebar-nav li a {
        display: block;
        padding: 12px 7px;
        text-decoration: none;
        color: #333;
        transition: background-color 0.4s ease;
    }

    .sidebar-nav li a:hover {
        background-color: #c8cacc;
    }
    .siswa{
        transition: all 0.3s ease;
        cursor: default;
    }
    .siswa:hover {
        opacity: 0.75;
    }
    .active{
        font-weight: bold;
    }
    </style>
</head>
<body class="container-fluid">
    @include('layouts.app.header')
    <div class="container-fluid">
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
        var links = document.querySelectorAll('.sidebar-nav a');

        links.forEach(function(link) {
        // cek apakah URL dari elemen <a> sama dengan URL halaman saat ini
        if (link.href === window.location.href) {
            // jika sama, tambahkan kelas "active" pada elemen <li> yang berisi elemen <a> tersebut
            link.parentNode.classList.add('active');
        }
    });
    </script>
</body>
</html>