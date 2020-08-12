<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('messages.quicktask') }}</title>
</head>

<body>

<div class="container">

    <nav class="navbar navbar-default"></nav>

    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->

        <?php $locale = session()->get('locale') ?>

        <li class="nav-item dropdown" style="list-style: none">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                @switch($locale)
                    @case('en')
                    <img src="{{asset('img/en.png')}}" width="20px" height="20x"> English
                    @break
                    @case('vi')
                    <img src="{{asset('img/vn.png')}}" width="20px" height="20x"> Vietnam
                    @break
                @endswitch
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('lang', ['locale' => 'en']) }}"><img src="{{ asset('img/en.png') }}" width="20" height="20x">
                    English</a>
                <a class="dropdown-item" href="{{ route('lang', ['locale' => 'vi']) }}"><img src="{{ asset('img/vn.png') }}" width="20px" height="20x">
                    Vietnam</a>
            </div>
        </li>
    </ul>
</div>

@yield('content')
</body>
</html>
