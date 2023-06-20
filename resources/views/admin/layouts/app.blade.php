<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
<section class="container px-4 mx-auto">
    <div class="sm:flex sm:items-center sm:justify-between">
        @yield('header')
    </div>
   <div class="content">
       @yield('content')
   </div>
    <footer>
        footer
    </footer>
</section>

</body>
</html>
