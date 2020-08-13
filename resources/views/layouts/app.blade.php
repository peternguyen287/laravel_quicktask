<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('messages.quicktask') }}</title>
    <script rel="stylesheet" type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script rel="stylesheet" type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
</head>

<body>
<div class="container">

    <nav class="navbar navbar-default"></nav>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->

        @php $locale = session()->get('locale') @endphp
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                @switch ($locale)
                    @case ('en')
                        English
                    @break

                    @case ('vi')
                        Vietnam
                    @break
                @endswitch
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('lang', ['locale' => 'en']) }}">
                    English</a>
                <a class="dropdown-item" href="{{ route('lang', ['locale' => 'vi']) }}">
                    Vietnam</a>
            </div>
        </li>
    </ul>
</div>
@yield('content')
</body>
</html>
