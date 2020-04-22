{{--@include('physics.head')--}}
@include('components.footer')

@section('content')
    {{-- main --}}
    <div class="math">
        <div class="math-title">
            <div class="title">
                <h1>Physics</h1>
                <p>〜物理学の冒険へようこそ〜</p>
            </div>
            <div class="word">
                {{--                <p>数学の冒険へようこそ</p>--}}
            </div>
        </div>

        <div class="math-space">
            <div class="math-card">
                @foreach($physicsList as $physics)
                    <div class="card3">
                        <a href="/detail/{{ $physics->id }}">
                            <div class="box3">
                                @if ($physics->image)
                                    <img src="{{ asset('storage/'.$physics->image) }}" class="image3">
                                @else
                                    <img class="image3">
                                @endif
                                <div>
                                    <p class="title3">{{ $physics->title }}</p>
                                    <p class="content3">{{ $physics->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {!! $physicsList->render() !!}

        </div>

    </div>
@endsection


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KaiWorld</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- style -->
    <link href="{{ asset('./css/physics/physics.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
