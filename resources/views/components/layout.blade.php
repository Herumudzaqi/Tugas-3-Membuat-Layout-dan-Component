<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <x-navbar></x-navbar>

  <div class="container mt-4">
    {{ $slot }}
  </div>

  <x-card><</x-card>
  <x-alert><</x-alert>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
