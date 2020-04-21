@include('math.head')
@include('components.footer')

@section('content')
    {{-- main --}}
    <div class="math">
        <div class="math-title">
            <div class="title">
                <h1>Math</h1>
                <p>〜数学の冒険へようこそ〜</p>
            </div>
            <div class="word">
{{--                <p>数学の冒険へようこそ</p>--}}
            </div>
        </div>

        <div class="math-space">
            <div class="math-card">
                @foreach($mathList as $math)
                    <div class="card3">
                        <a href="/detail/{{ $math->id }}">
                            <div class="box3">
                                @if ($math->image)
                                <img src="{{ asset('storage/'.$math->image) }}" class="image3">
                                @else
                                    <img class="image3">
                                @endif
                                <div>
                                    <p class="title3">{{ $math->title }}</p>
                                    <p class="content3">{{ $math->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

                {!! $mathList->render() !!}

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
