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
    <div class="auth-container d-flex justify-content-center align-items-center position-relative vh-100" >
      <div class="auth-box bg-white rounded-0 shadow p-4" >
        <h3 class="text-center mb-4" >{{ $title ?: __('Welcome') }}</h3>
        {{ $slot }}
        @isset($bottom)
          <div class="text-center mt-3">
            {{ $bottom }}
          </div>
        @endisset
      </div>
      <x-partials.footer />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    @stack('scripts')
  </body>
</html>
