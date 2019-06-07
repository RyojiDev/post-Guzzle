<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title or "tests API"}}</title>
    <script src="{{asset('js/app.js')}}" rel="text/javascript"></script>
<script src="{{asset('js/date.js')}}" rel="text/javascript"></script>
<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
    @yield('content')
    
@hasSection("javascript")
    @yield('javascript')
@endif    
</div>
</body>
</html>