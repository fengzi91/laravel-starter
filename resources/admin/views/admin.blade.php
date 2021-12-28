<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel - Admin</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ mix('/static/admin/css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('/static/admin/js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-[#f0f2f5]">
@inertia
</body>
</html>
