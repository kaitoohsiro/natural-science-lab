@include('brain.head')
@include('components.footer')

@section('content')
    {{-- main --}}
    <div class="math">
        <div class="math-title">
            <div class="title">
                <h1>Brain</h1>
                <p>〜脳科学の冒険へようこそ〜</p>
            </div>
            <div class="word">
                {{--                <p>数学の冒険へようこそ</p>--}}
            </div>
        </div>

        <div class="math-space">
            <div class="math-card">
                @foreach($brainList as $brain)
                    <div class="card3">
                        <a href="/detail/{{ $brain->id }}">
                            <div class="box3">
                                @if ($brain->image)
                                    <img src="{{ asset('storage/'.$brain->image) }}" class="image3">
                                @else
                                    <img class="image3">
                                @endif
                                <div>
                                    <p class="title3">{{ $brain->title }}</p>
                                    <p class="content3">{{ $brain->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {!! $brainList->render() !!}

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
