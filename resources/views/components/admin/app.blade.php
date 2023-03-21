@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
      <meta name="description" content="STRL COMPANY">
      <!-- Twitter meta-->
      <meta property="twitter:card" content="summary_large_image">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Open Graph Meta-->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Vali Admin">
      <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
      <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
      <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
      <meta property="og:description"
            content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <title>{{ $title }}</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

      {{-- datatable --}}
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin_folder/css/main.css') }}">

      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


      {{-- sweet alert --}}
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="app sidebar-mini">
      <!-- Navbar-->
      @include('admin/_header')

      <!-- Sidebar menu-->
      @include('admin/_sidebar')

      <main class="app-content">
            @includeIf('_success')
            {{ $slot }}
      </main>

      {{-- jquery cdn --}}
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

      {{-- datatable --}}
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

      <!-- Essential javascripts for application to work-->
      <script src="{{ asset('admin_folder/js/main.js') }}"></script>

      <script type="text/javascript">
            $('#sampleTable').DataTable();
      </script>

      {{-- delete --}}
      <x-delete />

</body>

</html>
