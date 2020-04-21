@include('physics.head')
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
                        </a>
                        </div>
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
    @yield('head')
</head>
<body>
<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
