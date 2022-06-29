<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Index</title>

    <link href="{{ asset('ui/assets/css/ui.css') }}" rel="stylesheet">


</head>

<body>
    <h1 class="bg-cyan-700">index</h1>

    <div id="app">
        <datagrid></datagrid>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ui/assets/js/ui.js') }}"></script>
</body>

</html>
