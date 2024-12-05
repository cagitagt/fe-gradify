<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <x-navbar></x-navbar>

  <main>
    <div class="w-full">
      {{ $slot }}
    </div>
  </main>

  <x-footbar></x-footbar>
</body>
</html>