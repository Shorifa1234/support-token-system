<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title . ' | ' . config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" />
    <link rel="stylesheet" href="{{ asset('scss/styles.css') }}" />
    @stack('styles')
  </head>
  <body>
    <x-partials.sidebar />
    <main id="content" class="px-3 pt-3 pb-0 mb-0 vh-100" >
      {{ $slot }}
      <x-partials.footer />
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    @isset($scripts)
      {{ $scripts }}
    @endisset
  </body>
</html>
