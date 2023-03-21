@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      {{-- sweet alert --}}
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


      <title>{{ $title }}</title>
</head>

<body>

      @includeIf('_success')
      {{ $slot }}

      {{-- jquery cdn --}}
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>

</html>
