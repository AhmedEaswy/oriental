<!DOCTYPE html>
<html lang="{{ current_local() }}" dir="{{ current_dir() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="{{ setting('meta','description','textarea','about_us') }}">

    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('assets/frontend/dist/output.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/frontend/image/favicon.png') }}">

</head>

<body>
{{ $slot }}
</body>

</html>
