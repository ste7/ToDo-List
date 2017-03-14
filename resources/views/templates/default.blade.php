<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ToDo-List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('font-awesome/css/font-awesome.min.css') !!}">
</head>
<body>

<div class="container">
    @include('templates.navbar')
</div>

<div class="container">
    @include('alert.info')

    @yield('content')
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>