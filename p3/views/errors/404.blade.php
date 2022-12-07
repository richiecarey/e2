@extends('templates/master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

<section class="grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
    <h2 class="mb-4 mt-4 text-2xl text-blue-700" test="404-page-not-found">404 - Page Not Found</h2>
    <a class="underline" href="{{ $app->config('app.url') }}">Return Home</a>
</section>

@endsection