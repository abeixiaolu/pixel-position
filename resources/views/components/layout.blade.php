<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
  <header class="flex items-center justify-between p-4">
    <a href="/">
      <h1>
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
      </h1>
    </a>

    <nav>
      <ul class="flex space-x-8">
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Career</a></li>
        <li><a href="#">Salaries</a></li>
        <li><a href="#">Companies</a></li>
      </ul>
    </nav>

    <button>Post a Job</button>
  </header>

  <main class="max-w-6xl mx-auto p-8">
    {{ $slot }}
  </main>
</body>

</html>