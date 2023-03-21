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

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      {{-- sweet alert --}}
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!-- CSS -->
      <link href="{{ asset('plugins/smart/css/smart_wizard_all.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('plugins/smart/css/smart_wizard_dots.min.css') }}" rel="stylesheet" type="text/css" />



      <title>System To Reserv Locker</title>
</head>

<body>

      @includeIf('_success')
      {{ $slot }}

      {{-- jquery cdn --}}
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{ asset('plugins/smart/js/jquery.smartWizard.min.js') }}"></script>
      <script>
            $(document).ready(function() {
                  $(function() {
                        // SmartWizard initialize
                        $('#smartwizard').smartWizard({
                            theme:'dots'
                        });
                  });
            });
      </script>
</body>

</html>
